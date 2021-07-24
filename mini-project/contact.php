<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "contact";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
//something was posted
$uname = $_POST['uname'];
$email = $_POST['email'];
$mbl = $_POST['mbl'];
$msg = $_POST['msg'];
if(!empty($uname) && !empty($email) && !empty($mbl) && !empty($msg))
{
$query = "insert into msgs (name,email,mbl,message) values ('$uname','$email','$mbl','$msg')";
mysqli_query($con, $query);
header("Location: /mini-project/index.php");
echo "we got you!";
die();
}
}
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <script src="script.js"></script>
    
      <div class="main">
         <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="feedback/login.php">login</a></li>
          
        </ul>
      </div>
	  
<div class="contact-section">
 
<form class="contact-form" method="post">
 <input type="text" class="contact-form-text" name="uname" placeholder="your name" required>
 <input type="email" class="contact-form-text" name = "email" placeholder="your email" required>

 <input type="text" class="contact-form-text"  name= "mbl" placeholder="your phoneno" required>

<textarea class="contact-form-text"  name ="msg" placeholder="your message" required></textarea>

<input type="submit" class="contact-form-btn" value="Send">

  </body>
</html>
	  