<?php
$servername = "localhost";
$username = "prueba2";
$password = "prueba";
$myDB = "base_prueba";

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($conn != null){
      echo 'You are connected';
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>