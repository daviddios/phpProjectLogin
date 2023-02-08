<?php
$servername = "localhost";
$username = "prueba2";
$password = "prueba";
$dbname = "base_prueba";

try {
  $conn = new PDO('mysql:host=localhost;dbname=base_prueba', $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if($conn){
    echo 'Youre connected';
  }
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>