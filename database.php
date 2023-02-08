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
          echo "fuck";
          $sql = "INSERT INTO app_user (name, email, pass, city)
                    VALUES ('" . $_SESSION["name"] . "','" . $_SESSION["email"] . "', '" . $_SESSION["pass"] . "', 'a')";
          echo "fuck";
          $conn->exec($sql);
          echo "fuck";
        $conn = null;
          ?>
          <a href="/panel.html"><input id="submit" type="button" value="Go to Panel! 🧑🏽‍💻"></a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
