<?php 
  include __DIR__ . '/database.php';
header('Content-Type: application/json');
  if(isset($results)) {
    //$results
    echo json_encode($results);
  } else {
    $results = [
      'error' => $error
    ];
    echo json_encode($results);
  }