<?php 
session_start();

	include("connection.php");
	include("functions.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>KNOW YOUR LEADERS</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <script src="script.js"></script>
    <div class="header">
      <div class="main">
        
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href = "contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="title">
        <h1>KNOW YOUR LEADERS</h1>
      </div>
      <div class="button">
        <a href="feedback/login.php" class="btn">Login</a>
        <a href="gallery.php" class="btn">Gallery</a>
        </div>
    </div>   
    
  </body>
</html>