<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.js" integrity="sha256-v28e/OFwH4PmlZT+LbqfwlMOE1hImPNesl1Ha52e6pk=" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <title>Document</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>numero stanza</th>
        <th>piano</th>
        <th>letti</th>
        <th>creato il</th>
        <th>aggiornato il</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>

  <script id="entry-template" type="text/x-handlebars-template">
    <tr>
      <td>{{id}}</td>
      <td>{{room_number}}</td>
      <td>{{floor}}</td>
      <td>{{beds}}</td>
      <td>{{created_at}}</td>
      <td>{{updated_at}}</td>
    </tr>
  </script>
  <script src="script.js"></script>
</body>

</html>