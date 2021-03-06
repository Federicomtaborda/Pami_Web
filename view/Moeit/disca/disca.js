$(function() {

  
  var $tvShowsContainer = $('#app-body').find('.tv-shows');
  $('.no_existe').hide();

  function renderShows(shows) {
    $tvShowsContainer.find('.loader').remove();

    $('#cantidad').html("<h3><i class='fa fa-file-pdf-o'></i> Registros Totales " +shows.length+ " </h3>");

    shows.forEach(function (show) {
     var article = template
        .replace(':name:', show.apellido_nombre)
        .replace(':certificado:', show.certificado)
        .replace(':fecha:', show.fecha)
      var $article = $(article)
      $tvShowsContainer.append($article.fadeIn(1000));

    })
  }

  /**
   * Submit serach form
   */

   $("input").keyup(function(){
    var busqueda = $("input").val();

      $tvShowsContainer.find('.tv-show').remove();

          $.ajax({
            url:'view/Moeit/disca/disca_ajax.php?op=buscar',
            data: { q: busqueda },
            })
              .then(function (shows) {
              console.log(shows);

            if (shows == "vacio") {
               $('.no_existe').show();

                }else{
               $('.no_existe').hide();
               renderShows(JSON.parse(shows));
          }
        })

      })


  var template = '<article class="tv-show">' +
          '<table class="table">' +
            '<tbody>'+
            '<tr>'+
              '<td><h1 class="capitalize">:name:</h1>'+
              '<small class="text-success">Cargado: :fecha:</small></td>' +
              '<td class="text-right">'+
              '<a href="archivos/discapacidad/:certificado:" class="btn btn-success">'+
              ' Certificado <i class="fa fa-download" aria-hidden="true"></i></a>'+
              '</td>' +
            '</tr>' +
            '<tbody>'+
          '</table>';

    $.ajax('view/Moeit/disca/disca_ajax.php?op=listar')
      .then(
        function (shows) {

        $tvShowsContainer.find('.loader').hide();
        renderShows(JSON.parse(shows));
        
      })

      function listar_ultimos(){

    $.ajax({
      type: 'GET',
      url : 'view/Moeit/disca/disca_ajax.php?op=ultimos',
      dataType: 'json'
    })
    .done(function( data ){

      console.log(data);

      data.user.forEach(function(users,index) {

        var content ="";


        content+='<div class="col-lg-3">';

        content+='<ul class="list-group caja">';
        content+='<li class="list-group-item">';
        content+='<a  href="archivos/discapacidad/'+users.certificado+'" class="capitalize">'+users.apellido_nombre+'</a>';
        content+='<br>';
        content+='<small> '+users.fecha+' </small>';
        content+='</li>';
        content+='</ul>';
        content+='</div>';

        $(".ultimos").append( content );
        
      }); 

      $('#titulo').html('<h3 class="text-success">Ultimos Certificados Cargados</h3>');

  
    })
    .fail(function(){
      console.log("Fallo!");
    })

  }//fin listar_todos

  listar_ultimos();
 
  
})
();