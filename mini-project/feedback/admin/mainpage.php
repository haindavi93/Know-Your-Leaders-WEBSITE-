<!DOCTYPE html>
<html lang="en" >

<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}

.column {
  float: left;
  width: 40%;
  margin-bottom: 16px;
  padding: 0 18px;
  color:white;
  font-weight: bold;
  height:50%;
  
}
.row{
  padding-top:130px;
  background-image:url('galary6.jpg');
  min-height: 100vh;
  padding-left:430px;
}
.card {
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}
.button {
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: black;
  border: 1px solid white;
  transition:0.5s ease;
  text-align: center;
  cursor: pointer;
  width: 30%;
  font-weight: bold;
}

.button:hover {
 background-color:white;
 color:black;
  
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: blue;
}
img{
  height:350px;
}
h2{
	color:green;
}
</style>
  <meta charset="UTF-8">
  <title>Feedback</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>
<body>
<div class="row">
 <form action = "feedbackdownload.php" method="POST"> 
  
  <div class="column">
    <div class="card">
      <img src="feedback.png" alt="Haindavi" style="width:100%">
      <div class="container">
        <h2>Feedback</h2>
        <p class="title">View feedback</p>
        <p><button class="button">Feedback</button></p>
      </div>
    </div>
  </div>
  </form>
   <form action = "logout.php" method="POST"> 
  
  <div class="column">
    <div class="card">
      <img src="feedback1.png" alt="Haindavi" style="width:100%">
      <div class="container">
        <h2>Logout</h2>
        <p class="title">Logout as admin</p>
        <p><button class="button">Logout</button></p>
      </div>
    </div>
  </div>
  </form>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
  
</body>

</html>
