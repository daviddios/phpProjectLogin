<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PHP examples</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php
    session_start();
    $_SESSION['username'] = $_POST["username"];
    $_SESSION['email'] = $_POST["email"];
/*     $_SESSION['pass'] = $_POST["password"]; */
    // doc about how password_hash works https://www.php.net/manual/en/function.password-hash.php
    $_SESSION['pass'] = password_hash($_POST["password"], PASSWORD_DEFAULT);
    ?>
<!-- partial:index.partial.html -->
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Check Data</div>
      <div class="eula">Please check if there are errors:</div>
    </div>
    <div class="right">
      <div class="form">
        <h2>Welcome <?php echo $_SESSION["username"];?></h2>
        
        <!--<p>Is <span style="color:red;">
          <?php 
            echo $_SESSION["email"];
            echo $_SESSION['password'];
            ?> </span>your email for sure?</p>-->
        <p>
          <a style="text-decoration: none;" href="signup.html"> Let me try again </a>  
          <a style="text-decoration: none;" href="database.php"> It's OK!</a>
        </p>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>
