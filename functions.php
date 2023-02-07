<?php
    session_start();
function checkUser(){
    echo $_POST["email"];
    $sql = "SELECT email from app_user where email = '".$_POST["email"]."'";
    $result = $conn->query($sql);
    echo $result;
    }
?>