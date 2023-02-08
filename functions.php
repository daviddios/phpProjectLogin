<?php

require('connection.php');
function checkUser()
{
    global $con;
        $sql = "SELECT email from app_user where email = '" . $_POST["email"] . "'";
        $result = $con->query($sql);
    echo $_POST["email"];
        if ($result == $_POST["email"]) {
            $sql = "SELECT pass from app_user where email = '" . $_POST["email"] . "'";
            $result = $con->query($sql);
            if ($result == $_POST["password"]) {
                echo '<p>Succesful</p>';
            } else {
                loginIncorrectPassword();
            }
        } else {
            loginUserDontExists();
        }

}
;

    function normalLogin()
    {
    echo '<form action="login.php" method="post" name>';
    echo '<label for="email">Email:</label>';
    echo '<input type="email" name="email" required>';
    echo '<label for="password">Password:</label>';
    echo '<input type="password" name="password" required>';
    echo '<input type="submit" name="comprobar" id="submit" value="Submit">';
    echo '</form>';
    
};
    function loginIncorrectPassword(){
    echo '<form action="login.php" method="post" name>';
    echo '<label for="email">Email:</label>';
    echo '<input type="email" name="email" required>';
    echo '<label for="password">Password:</label>';
    echo '<input type="password" name="password" required>';
    echo '<p>User correct but password is wrong</p>';
    echo '<input type="submit" name="comprobar" id="submit" value="Submit">';
    echo '</form>';

};
    function loginUserDontExists(){
    echo '<form action="login.php" method="post" name>';
    echo '<label for="email">Email:</label>';
    echo '<input type="email" name="email" required>';
    echo '<label for="password">Password:</label>';
    echo '<input type="password" name="password" required>';
    echo '<p>User dont exists</p>';
    echo '<input type="submit" name="comprobar" id="submit" value="Submit">';
    echo '</form>';
    }
    function selectslq(){
    global $con;
        $sql = "SELECT * from app_user";
        $result = $con->query($sql);
    echo $result;
    }
?>
