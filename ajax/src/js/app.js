var $ = require('jquery');

$(document).ready(function(){
  $.ajax({
    'url': '../ajax/dischi.php',
    'method': 'GET',
    'success': function(data) {
      var dischi = data;
      console.log(dischi);
      for (var i = 0; i < dischi.length; i++) {
        var disco_corrente = dischi[i];

        var dati_cd = {
          'artista': data.author,
        }
        console.log(dati_cd);
      }
    },
    'error': function() {
      alert ('errore');
    }
  })
})
