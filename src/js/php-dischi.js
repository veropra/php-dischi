var $ = require('jquery');
$(document).ready(function(){

  var source   = $("#template_disco").html();
  var template = Handlebars.compile(source);

  $.ajax({
    'url': 'http://localhost:8888/php-dischi/data.php',
    'method': 'GET',
    'success': function(data){
      var albums = JSON.parse(data);
      for (var i = 0; i < albums.length; i++) {
      var album = albums[i];
      var context = {
        img: album['img'],
        album: album['album'],
        band: album['band'],
        year: album['year']
      };
      var html = template(context);
      $('.main_content').append(html);
      }
    },
    'error': function(){
      alert('errore');
    }
  });

});
