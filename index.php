<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PHP examples</title>
  <link rel="stylesheet" href="css/style.css">
    <script src="/phpTest/script/script.js"></script>
</head>
<header>
  <?php
  include 'connection.php';
  include 'functions.php';
  ?>
</header>
<body>
  
  <!-- DELETE COOKIES FUNCTION -->
<?php
if(isset($_POST['deleteCookies'])) {
    unset($_COOKIE["count"]);
}?>
  <!--END OF FUNCTIONS -->

  <!-- The following php code uses Cookies to count how many times have you viewed the page-->
<?php 
if (!isset($_COOKIE['count'])) { ?> 
Welcome! This is the first time you have viewed this page. 
<?php 
    $cookie = 1;
    setcookie("count", $cookie);
} else {
    $cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie);
    ?> 

You have viewed this page for <?= $_COOKIE['count'] ?> times. 

<?php  }
?> 
  <!-- End of counting zone -->

  <!-- Let's create a button who let us delete the $_COOKIE['count'] by calling "deleteCookies" function -->
<form class="inline" method="POST">
<input class="inline" type="submit" name="deleteCookies" value="Clear 🍪's">
</form>
<!-- End of cookies -->

<br>
<div class="page">
<div class="centered-page-text">
    <h1>Welcome to my app</h1>
  </div>
  <div class="container" id = "signup">
    <div class="left">
      <div class="login">Sign Up!</div>
      <div class="eula">Join to the recolectors community today and start to earn</div>
    </div>
    <div class="right">
    <div class="login">Login</div>
        <div class="form">
        <form action="login.php" method="post" name>
        <label for="username">username:</label>
        <input type="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <input type="submit" name="comprobar" id="submit" value="Submit">
      </form>
      <?php
      if(isset($_POST['comprobar']))
      {
         checkUser();
      } 
      ?>
      </div>
    </div>
  </div>
  <div class="centered-page-text">
    <p>Already signed up? <a href="/login.php">Login</a></p> 
  </div>
</div>

</body>
<?php



?>
</html>


