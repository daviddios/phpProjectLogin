<?php
    session_start();
    $_SESSION['panelUsername'];
    $_SESSION['panelMail'];
function checkUser()
{
    require 'connection.php';
    $sql = "SELECT username, userpass from app_user where username = '" . $_POST["username"] . "'";
    $conn->query($sql);
    foreach ($conn->query($sql) as $row) {
        $sqlUser = $row['username'];
        $sqlPass = $row['userpass'];
        $_SESSION['panelUsername']=$sqlUser;
    }
    if ($sqlUser == $_POST["username"]) {
        echo 'User exists';
        if (password_verify($_POST["password"], $sqlPass)) {
            echo 'Access garanted, HashCheck';
            header('Location: /phptest/panel/panel.php');
        } else {
            
        }
        ;
    } else {
        echo 'User doesnt exists';
    }

    ;
}
?>