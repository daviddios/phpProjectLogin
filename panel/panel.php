<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/panelStyle.css">
    <script src="/phptest/panel/script.js"></script>
    <title>Dashboard</title>
</head>
<header>
    <?php
    session_start();
    include 'panelFunctions.php';
    ?>
</header>
<body>
    <p>Hello</p>
    <a href="/phptest/panel/session_destroy.php">destroy session</a>
<?php
if(!isset($_SESSION['panelUsername'])){
    echo 'Youre not login into please <a href="/phptest/login.php"> Login</a';
} else {
    echo "welcome " . $_SESSION['panelUsername'];
};
    echo session_status();
?><form action="panel.php" method="post" name>
<input type="submit" id="logout" value="LogOut" name="logout">
</form>
<?php
    if(isset($_POST['logout']))
    {
       logout();
    } 
?>
</body>
</html>