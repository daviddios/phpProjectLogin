<?php
    session_start();
function checkUser()
{
    require 'connection.php';
    $sql = "SELECT email, pass from app_user where email = '" . $_POST["email"] . "'";
    $conn->query($sql);
    foreach ($conn->query($sql) as $row) {
        $sqlMail = $row['email'];
        $sqlPass = $row['pass'];
    }
    echo $sqlMail . " - " . $sqlPass;

    /* if ($sqlMail == $_POST["email"]){
        echo 'true';
    } */
}
?>