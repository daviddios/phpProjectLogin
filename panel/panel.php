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
    include 'functions.php';
    ?>
</header>
<body>
    <p>Hello</p>
<?php
echo $_SESSION['panelUsername'];
?>
</body>
</html>