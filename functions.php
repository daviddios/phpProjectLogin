<?php
function checkUser()
{
    session_start();
    $_SESSION['panelUsername'] = $_POST['username'];
    $_SESSION['panelMail'];
    require 'connection.php';
    $sql = "SELECT username, userpass from app_user where username = '" . $_POST["username"] . "'";
    $conn->query($sql);
    foreach ($conn->query($sql) as $row) {
        $sqlUser = $row['username'];
        $sqlPass = $row['userpass'];
    }
    if ($sqlUser == $_POST["username"]) {
        $_SESSION['panelUsername']=$sqlUser;
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
};
function loadLogin(){
    session_start();
    echo '<div class="left" id="left">';
    echo '<div class="login">Glad to see you!</div>';
    echo '<div class="eula">Forgotten password?</div>';
    echo '</div>';
    echo '<div class="right" id="right">';
    echo '<div class="login" id="login">Login</div>';
    echo '<div class="form">';
    echo '<form action="login.php" method="post" name>';
    echo '<label for="username">username:</label>';
    echo '<input type="username" name="username" required>';
    echo '<label for="password">Password:</label>';
    echo '<input type="password" name="password" required>';
    echo '<input type="submit" name="comprobar" id="submit" value="Submit">';
    echo '</form>';
    }
;
?>