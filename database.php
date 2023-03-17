<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PHP examples</title>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <?php
  session_start();
  ?>
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Adding Data</div>
      <div class="eula">We're updating our DBs with your info.</div>
    </div>
    <div class="right">
      <div class="form">
        <?php
        require 'connection.php';
          $sql = "INSERT INTO app_user (username, mail, userpass, userrol)
                    VALUES ('" . $_SESSION["username"] . "','" . $_SESSION["email"] . "', '" . $_SESSION["pass"] . "', 'a')";
          $conn->exec($sql);
        $conn = null;
          ?>
          <a href="/phptest/login.php"><input id="submit" type="button" value="Go to Login! 🧑🏽‍💻"></a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
