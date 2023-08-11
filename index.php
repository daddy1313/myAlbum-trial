<?php
require 'function.php';

$select = new Select();

if(!empty($_SESSION["id"])){
  $user = $select->selectUserById($_SESSION["id"]);
}
else{
  
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="index.css">
    <meta charset="utf-8">
    <title>Home-Gallery</title>
  </head>
  <body><div id="greet">
    <h1>Welcome <?php echo $user["name"]; ?></h1>
    </div>
    <a href="logout.php"><button>Logout</button></a>
  </body>
</html>
