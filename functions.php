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
    /* echo $_POST['email']. " - " . $sqlMail . "\t";
    echo $_POST['password']. " - " . $sqlPass;
 */
    if ($sqlMail == $_POST["email"]) {
        echo 'User exists';
        if ($sqlPass == $_POST['password']) {
            echo 'Access garanted';
            header('Location: /panel/index.php');
        } else {
            echo 'Wrong Password';
        }
        ;
    } else {
        echo 'User doesnt exists';
    }
    ;
}
?>