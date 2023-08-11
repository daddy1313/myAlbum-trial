<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: show-image-gallery.php");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: show-image-gallery.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Wrong Password.'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('User Is Not Registered Please Check Again.'); </script>";
    header("Location: registration.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<h1>Simon's Gallery</h1>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Album</title>
  
</head>
<body>
  <style>
    body{
    
    display: flex;
    justify-content: center;
    background: url('img10.jpg');
}
h1{
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 30px;
}

#form{
     top:75px;
    text-align: center;
    border-radius: 10px;
    padding-top:0px ;
    padding-bottom:10px ;
    padding-left: 50px;
    padding-right: 50px;
    position: absolute;
}
#email, #password{
  height: 45px;
    width: 80%;
    margin-bottom:15px ;
    border:none;
    border-radius: 30px;
    color: rgb(65, 65, 65);
    
 
    padding: 0 0 0 45px;
    background: rgba(255, 255, 255, 0.5);
    outline: none;
    font-size: 15px;
    transition: 400ms;
}
#email:hover{
    width: 50%;
    transition-duration: 500ms;
}
#password:hover{
    width: 50%;
    transition-duration: 500ms;
}
#submit{border: none;
        border-radius: 30px;
        font-size: 15px;
        height: 45px;
        outline: none;
        width: 4cm;
        color: black;
        cursor: pointer;
        transition: .7s ;
    }
#register
    {
      margin-top: 20px;
      font-size: 20px;
      font-family: cursive;
      width: 3cm;
      height: 1.3cm;
      border-radius: 30px;
      transition: .9s  } 
p{
  font-weight: bold;
  font-size: larger;
}   
#form #submit:hover{
    
    
    transition-duration: 750ms;
    width: 6cm;
    background-color: #fbff28;
}
#register:hover
  {
    
    transition-duration: 1250ms;
    width: 6.3cm;
    background:linear-gradient(to right ,rgb(141, 192, 255) , rgb(255, 173, 173) );
   

}
label{
  font-weight: bold;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

</style>

<div id="form">

<h2>Login</h2>

    <form class="" action="" method="post" autocomplete="off">
      <label for="email">Username or Email : </label><hr>
      <input type="text" placeholder="Email or Username" id="email" name="usernameemail" required value=""> <br>
      <label for="password">Password</label><hr>
      <input type="password" placeholder="Password" id="password" name="password" required value=""> <br>
      <button type="submit" id="submit" name="submit">Login</button>
    </form>
    <br>
    <p>Don't have an account?</p><p>Register Now!⬇️⬇️⬇️😊</p><a id="register" href="registration.php"><button id="register">Register</button></a>
</div>
</body>
</html>
