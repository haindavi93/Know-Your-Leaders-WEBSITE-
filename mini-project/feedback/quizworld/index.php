
<?php 

	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'quizdb');

?>





<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
<!-- 
	 font-family: 'Montserrat', sans-serif; 
	font-family: 'Open Sans', sans-serif;
	-->

</head>
<body style="background:url('quizbg1.png');background-size:cover">

	<div class="container" style="padding-top:40px">
		<h1 class="text-center"  style="color:white" > Welcome to Know Your Leaders Quiz </h1><br>

		<div class="row" style="padding-top:40px">
			
			<div class="col-lg-6">
				<div class="card" style="background:transparent; box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 2);
  margin: 8px;">
					<h4 class="card-header text-center" style="color:white"> Login Form </h4>
					<br>
					<form action="login.php" method="post">
						<div class="form-group" style="padding-left:20px;padding-right:20px">
							<label for="user " style="color:white"> Username: </label>
							<input type="text" name="user" id="user" class="form-control" style="background:transparent">
						</div>
						<div class="form-group" style="padding-left:20px;padding-right:20px">
							<label for="pass " style="color:white"> Password: </label>
							<input type="text" name="pass" id="pass" class="form-control" style="background:transparent">
						</div>
						<div style="padding-bottom:20px">
						<button class="btn btn-success d-block m-auto" type="submit" style="background:transparent;border:solid white"> Submit </button>
					</div>
					</form>
				
				</div>
			</div>

			<div class="col-lg-6">
				<div class="card" style="background:transparent; box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 2);
  margin: 8px;">
					<h4 class="card-header text-center" style="color:white"> SignUp Form </h4>
					<br>
					<form action="registration.php" method="post">
						<div class="form-group" style="padding-left:20px;padding-right:20px">
							<label for="user " style="color:white"> Username: </label>
							<input type="text" name="user" id="user" class="form-control" style="background:transparent">
						</div>
						<div class="form-group" style="padding-left:20px;padding-right:20px">
							<label for="pass " style="color:white"> Password: </label>
							<input type="text" name="pass" id="pass" class="form-control" style="background:transparent">
						</div>
						<div style="padding-bottom:20px">
						<button class="btn btn-success d-block m-auto" type="submit" style="background:transparent;border:solid white"> Submit </button>
						</div>
						<div class="duplicate"> </div>
					</form>

				</div>
			</div>
				</div>
			</div>

		</div>

	</div>

</body>
</html>