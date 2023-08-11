<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);

  if($result == 1){
    echo
    header("Location: index.php");
    
  }
  elseif($result == 10){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Password Does Not Match'); </script>";
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
    background: url('img11.jpg');
}
h1{
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 30px;
}

#form{
     top:50px;
    text-align: center;
    border-radius: 10px;
    padding-top:0px ;
    padding-bottom:10px ;
    padding-left: 50px;
    padding-right: 50px;
    position:absolute;
}
#email, #password, #name, #username{
  height: 45px;
    width: 80%;
    margin-bottom:15px ;
    border:none;
    border-radius: 30px;
    color: rgb(65, 65, 65);
    
 
    padding: 0 0 0 45px;
    background: rgba(255, 255, 255, .5);
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
#name:hover{
    width: 50%;
    transition-duration: 500ms;
}
#username:hover{
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
#login
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
#login:hover
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

<h2>Register</h2>



    <form class="" action="" method="post" autocomplete="off">
      <label for="name">Name : </label><hr>
      <input placeholder="Name" id="name" type="text" name="name" required value=""> <br>
      <label for="username">Username : </label><hr>
      <input placeholder="Username" id="username" type="text" name="username" required value=""> <br>

      <label for="email">Email : </label><hr>
      <input id="email" placeholder="Email" type="email" name="email" required value=""> <br>

      <label for="password">Password : </label><hr>
      <input id="password" placeholder="Password" type="password" name="password" required value=""> <br>

      <label for="confirmPassword">Confirm Password : </label><hr>
      <input id="password" placeholder="Confirm" type="password" name="confirmpassword" required value=""> <br>

      <button id="submit" type="submit" name="submit">Register</button>
      <br>
    
    </form>
    <p>Already have an account?</p><p>Login Now!⬇️⬇️⬇️😊</p><a id ="login" href="login.php"><button id="login">Login</button></a>
    </div>    
  </body>
</html>
