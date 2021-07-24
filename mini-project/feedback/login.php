<?php 
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
//something was posted
$user_name = $_POST['user_name'];
$password = $_POST['password'];

if($user_name === 'admin@admin.com' && $password === 'admin'){
header("Location: admin/mainpage.php");
}
else{
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
header("Location: alloption.php");
die;
}
}

else{
echo '<script>alert("invalid username or password try to signup");</script>';
echo '<script>window.location.href="newsignup.php";</script>';
}
}
}
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
          <li><a href="/mini-project/index.php">Home</a></li>
          <li><a href="/mini-project/gallery.php">Gallery</a></li>
          <li><a href="/mini-project/about.php">About</a></li>
         
          <li><a href="/mini-project/contact.php">Contact</a></li>
        </ul>
      </div >

    <div class="wrapper">
      <div class="container">
	  <form method="post">
        <input style="color:white" id ="email" name="user_name" type="text" placeholder="username or mobile">
        <input style="color:white" id= "pwd" name="password" type="password" placeholder="password">
        <button>Login</button><br>
		</form>
		
      </div>
    </div>
  </body>
</html>