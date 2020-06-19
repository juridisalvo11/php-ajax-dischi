var $ = require('jquery');
var Handlebars = require("handlebars");

$(document).ready(function(){

  var source   = document.getElementById("cd-template").innerHTML;
  var template = Handlebars.compile(source);

  $.ajax({
    'url': 'dischi.php',
    'method': 'GET',
    'success': function(data) {
      var dischi = data;
      //console.log(dischi);
      for (var i = 0; i < dischi.length; i++) {
        var disco_corrente = dischi[i];
        //console.log(disco_corrente);
        var dati_cd = {
          'artista': disco_corrente.author,
          'genere': disco_corrente.genre,
          'titolo': disco_corrente.title,
          'copertina': disco_corrente.poster,
          'anno': disco_corrente.year
        }
        console.log(disco_corrente.author);
        var context = template(dati_cd);

        $('#box-dischi').append(context);
      }
    },
    'error': function() {
      alert ('errore');
    }
  })
})
