<?php
include 'database.php';
//var_dump($results);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
      <?php foreach ($results as $room) { ?>
        <tr>
          <td><?php echo $room['id'] ?></td>
          <td><?php echo $room['room_number'] ?></td>
          <td><?php echo $room['floor'] ?></td>
          <td><?php echo $room['beds'] ?></td>
          <td><?php echo $room['created_at'] ?></td>
          <td><?php echo $room['updated_at'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>