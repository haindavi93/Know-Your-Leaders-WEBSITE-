<!DOCTYPE html>
<html>
<head>
  <title>All Options</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<style>
ul{
  float: right;
  list-style-type:none;
  margin-top:25px;
  padding-right:10px;

}
ul li{
  display:inline-block;

}
ul li a{
  text-decoration: none;
  color:#5DADE2 ;
  padding:9px 20px;
  border: 1px solid white;
  transition:0.5s ease;
  background-color:#CD5C5C;
  font-weight:bold;
}
ul li a:hover{
  background-color:green ;
  color:white;
}

.column {
  float: left;
  width: 27%;
  margin-bottom: 16px;
  padding: 0 8px;
  color:white;
  font-weight: bold;
  height:50%;
  
}
.row{
  padding-top:130px;
  background-image:url('galary3.jpg');
  min-height: 80vh;
  padding-left:210px;
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
  height:300px;
}
h2{
	color:green;
}
</style>
<body> 
<div class="header">
      <div class="main">
        
        <ul>
          <li><a href = "logout.php">Log Out</a></li>
        </ul>
      </div>

</div> 
<div class="row">
  <div class="column">
    <div class="card">
      <img src="quiz1.png" alt="Haindavi" style="width:100%">
      <div class="container">
        <h2>Quiz</h2>
        <p class="title">try our quiz to test your knowledge</p>
        
        <p><button class="button" onclick = "window.open('quizworld/index.php')">quiz</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card"> 
	<img src="feedback.png" alt="Haindavi" style="width:100%">
      <div class="container">
        <h2>Feedback</h2>
        <p class="title">please feel free to give us your feedback</p>
        
        <p><button class="button" onclick = "window.open('index.php')">feedback</button></p>
      </div>
    </div>
  </div>
  
   <div class="column">
    <div class="card"> 
	<img src="home3.png" alt="Haindavi" style="width:100%">
      <div class="container">
        <h2>Home</h2>
        <p class="title">back to home page</p>
       
        
        <p><button class="button" onclick = "window.open('/mini-project/index.php')">home</button></p>
      </div>
    </div>
  </div>

  
</div>
</body>
</html>