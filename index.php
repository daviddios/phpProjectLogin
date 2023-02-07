<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PHP examples</title>
  <link rel="stylesheet" href="/css/style.css">

</head>
<body>
  <!-- DELETE COOKIES FUNCTION -->
<?php
if(isset($_POST['deleteCookies'])) {
    setcookie("count", "", time()-(60*60*24*7));
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
<?php  }?> 
  <!-- End of counting zone -->

  <!-- Let's create a button who let us delete the $_COOKIE['count'] by calling "deleteCookies" function -->
<form class="inline" method="POST">
<input class="inline" type="submit" name="deleteCookies" value="Clear 🍪 🍪">
</form>

<br>
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Sign Up!</div>
      <div class="eula">By clicking submit you agree to the ridiculously long terms that you didn't bother to read</div>
    </div>
    <div class="right">
      <div class="form">
        <form action="post.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" required>
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        <input type="submit" id="submit" value="Submit">
      </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
