<?php 
include 'configDB.php';
session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['register'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	$sql = "SELECT * FROM users WHERE email = '{$email}'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		echo "<script>alert('Error, email already exists')</script>";
	}
	else
	{
		$sql1 = "INSERT INTO users (name,email,password)
		VALUES ('$username', '$email', '$password')";
		$result = mysqli_query($conn, $sql1);
		if($result)
		{
    		header('Location: login.php');
		}
		else
		{
			echo "<script>alert('Error in inserting to database')</script>";
		}
	
	}
	

}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Register</title>
</head>
<body>
	<div class="container">
		<h1>Register</h1>
		<form action="" class="inputForm" onsubmit="return validateForm()" method="POST">
			<div class="input-group">
				<input type="text" placeholder="Username" id="username" name="username">
			</div>

			<div class="input-group">
				<input type="text" placeholder="Email" id="email" name="email">
			</div>

			<div class="input-group">
				<input type="password" placeholder="Password" id= "password" name="password">
            </div>

            <div class="input-group">
				<input type="password" placeholder="Confirm Password" id="confirmPassword" name="cpassword">
			</div>

			<div class="input-group">
				<button name="register" class="btn">Register</button>
			</div>

			<p>Already have an account? <a href="login.php">Login Here</a></p>
		</form>
	</div>
	<script src="registerJS.js"></script>
</body>
</html>