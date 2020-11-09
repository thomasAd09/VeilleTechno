<?php
/*$dsn = 'mysql:host=localhost;dbname=failleSQL'; //Data source Name
$username = 'root';
$password = 'root';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');

$conn = new PDO($dsn, $username, $password,$options);*/
$sous_titre = "Faille SQL";

ob_start(); 
require('FailleSQL/config.php');
session_start();
if (isset($_POST['username'])){
  $username = ($_REQUEST['username']);
//$username = mysqli_real_escape_string($conn, $username);
  $password = ($_REQUEST['password']);
//$password = mysqli_real_escape_string($conn, $password);


  $query = "SELECT * FROM `users` WHERE username='$username' AND password='$password' ";

  $result = mysqli_query($conn,$query) or die(mysql_error());

  $rows = mysqli_num_rows($result);
   if($rows==1){
      $logged_in_user = mysqli_fetch_assoc($result);
      if($logged_in_user['user_type'] == 'admin'){

         $_SESSION['username'] = $username;
         header("Location: admin.php");
      }else{

         $_SESSION['username'] =  $username;
         header("Location: user.php");
      }
   }else{
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
   }
}


/*
session_start();
if(!empty($_SESSION['username'])) {
   header('location:plan.php');
}


if(isset($_POST['login'])) {

   $user = $_POST['username'];
   $pass = $_POST['password'];

   if(empty($user) || empty($pass)) {
      $message = 'All field are required';
   } else {
      $query = $conn->prepare("SELECT username, password FROM users WHERE 
      username=? AND password=? ");
      $query->execute(array($user,$pass));
      $row = $query->fetch(PDO::FETCH_BOTH);

      if($query->rowCount() > 0) {
         $_SESSION['username'] = $user;
         header('location:user.php');
      } else {
         $message = "Username/Password is wrong";
      }
   }
}
*/
?>


<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username"  class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password"  class = "box" /><br/><br />
                  <input type = "submit" name="login" value="Login"/><br />
               </form>
               <?php
                  if(isset($message)) {
                     echo $message;
                  }
               ?>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>

<?php

$contenu = ob_get_clean();

require 'gabarit.php'; ?>

