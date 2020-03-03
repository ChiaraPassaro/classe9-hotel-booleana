$(document).ready(
  function () {
    $.ajax(
      {
        'url': 'http://localhost:8888/hotel-booleana/server.php',
        'method': 'GET',
        'success': function (data) {
          //console.log(data);
          printResults(data);
        },
        'error' : function() {
          console.log('errore');
          
        }
      }
    );

    

  }
);

function printResults(data) {
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++) {
    // console.log(data[i]);
    var room = data[i];
    var html = template(room);
    $('.table tbody').append(html);
  }
}