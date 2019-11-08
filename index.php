<?php 
session_start();
if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login & Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel = "stylesheet" type= "text/css"
	href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6">
			<h2>Login</h2> <br>
			<form action="uservalidation.php" method="post">
				<div class="form-group">

					<label><b>Username</b></label>
					<input type="text" name="user" class="form-control" placeholder="Enter Username" required>
				</div>
				<div class="form-group">

					<label><b>Password</b></label>
					<input type="Password" name="pass" class="form-control" placeholder="Enter Password" required>
				</div>
				<button type="submit" class="btn btn-primary"> Login </button>

			</form>
		</div>
    <div class="col-md-6">
			<h2>Registration</h2> <br>
			<form action="registration.php" method="post">
				<div class="form-group">

					<label><b>Full Name</b></label>
					<input type="text" name="user" class="form-control" placeholder="Enter Fullname" required>
				</div>
                <div class="form-group">

					<label><b>Email</b></label>
					<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
				</div>

				<div class="form-group">

					<label><b>Password</b></label>
					<input type="Password" name="pass" class="form-control" placeholder="Create Password" required>
				</div>
                
                 <div class="form-group">
						<label>Country</label>
						<input type="text" name="country" placeholder="Country" class="form-control" required>
                         </div>

				 <div class="form-group">
						<label>Number</label>
						<input type="number" name="number" placeholder="Number" class="form-control" required>
                         </div>

				<div class="form-group">
				<input type="checkbox" name="terms" id="check" value="term" required > <b>I Agree With the Terms & Conditions</b>
				</div>


				<button type="submit" class="btn btn-primary"> Register Now </button>

			</form>
		</div>


    </div>

		</div>
	</div>

</body>
</html>