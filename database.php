<?php
  $serverName = 'localhost';
  $user = 'root';
  $password = 'root';
  $dbName = 'dbhotel';

  $connection = new mysqli($serverName, $user, $password, $dbName);

  if ($connection && $connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
  } 
  elseif ($connection) {  
    //$query = "SELECT `room_number`, `floor`, `beds` FROM `stanze`";
    $query = "SELECT * FROM `stanze`";
    $result = $connection->query($query);

  //var_dump($result);
   if ($result && $result->num_rows > 0) {
    $results = [];
    while ($row = $result->fetch_assoc()) {
      $results[] = $row;
      //var_dump($row); die();
      // echo "Stanza N. " . $row['room_number'] . " piano: " . $row['floor'] . " letti " . $row['beds'] . "<br>";
    }
  } elseif ($result) {
    $results = [];
  } else {
    $error = "query error";
  }
  $connection->close();

}