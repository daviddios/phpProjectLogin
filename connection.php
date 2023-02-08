<?php
  $servername = "localhost";
  $username = "prueba2";
  $password = "prueba";
  $dbname = "base_prueba";

    $con = new mysqli($servername, $username, $password, $dbname);
    
    if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
    }
