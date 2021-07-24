<?php 
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
//something was posted
$user_name = $_POST['user_name'];
$password = $_POST['password'];
if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
{
//read from database
$query = "select * from users where user_name = '$user_name' limit 1";
$result = mysqli_query($con, $query);
if($result)
{
if($result && mysqli_num_rows($result) > 0)
{
$user_data = mysqli_fetch_assoc($result);
if($user_data['password'] === $password)
{
$_SESSION['user_id'] = $user_data['user_id'];
header("Location: index.php");
die;
}
}
}
echo '<script>alert("invalid username or password");</script>';
}
else
{
echo '<script>alert("invalid username or password");</script>';
}
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <script src="script.js"></script>
    
      <div class="main">
        
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
   

    <div class="wrapper">
      <div class="container">
	  <form method="post">
        <input style="color:white" id ="email" name="user_name" type="text" placeholder="username or mobile">
        <input style="color:white" id= "pwd" name="password" type="password" placeholder="password">
        <button>Login</button><br>
		</form>
		<button id="sbtn" onclick="window.open('signup.php')">Signup</button><br>
      </div>
    </div>
  </body>
</html>