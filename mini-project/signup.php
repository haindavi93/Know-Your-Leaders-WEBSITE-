<?php 
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
//something was posted
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$cpwd = $_POST['cpwd'];
if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
{
//save to database
$user_id = random_num(20);
$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
mysqli_query($con, $query);
header("Location: login.php");
die;
}
else
{
echo "Please enter some valid information!";
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
          <li><a href="login.php">login</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    <div class="wrapper1">
      <div class="container1">
	  <form method="post">
        <input style="color:white" id ="email1" name="user_name" type="text" placeholder="username">
        <input style="color:white" id= "mbl1" type="text" name="mobile" placeholder="mobile number">
        <input style="color:white" id= "pwd1" type="password" name="password" placeholder="password">
        <input style="color:white" id= "cpwd1" type="password" name="cpwd" placeholder="confirm password">
        <button>signup</button>
		</form>
      </div>
    </div>
  </body>
</html>