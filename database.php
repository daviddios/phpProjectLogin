
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PHP examples</title>
  <link rel="stylesheet" href="/css/style.css">

</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "prueba2";
$password = "prueba";
$myDB = "base_prueba";

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);    
    if ($conn != null){
            echo 'You are connected';
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
    $sql = "INSERT INTO postPHP (name, email, pass)
                VALUES ('".$_SESSION["name"]."','".$_SESSION["email"]."', '".$_SESSION["pass"]."'
)";

?>

<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Check Data</div>
      <div class="eula">Please check if there are errors:</div>
    </div>
    <div class="right">
      <div class="form">
                <?php 
                    $statement = $conn->exec($sql);
                    if($statement==1)
                        echo 'Data has been added to database 👍🏼'
                    ;
                    $conn = null;
                    ?>

      </div>
    </div>
</div>
</div>

</body>
</html>