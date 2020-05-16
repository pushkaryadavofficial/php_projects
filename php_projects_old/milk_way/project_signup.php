<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Milk way</title>
	<link rel="stylesheet" href="fontawesome-free-5.13.0-web\css\all.min.css">
	<link rel="stylesheet" href="project.css">
</head>
<body>
	<div class="center">
		<h1>Create a new account</h1>
		<div class="form">
			<form method="POST">
			<input type="text" name="name"  placeholder="your name here"><br>
			<input type="text" name="username"  placeholder="your username here"><br>
			<input type="text" name="password"  placeholder="your password here"><br>
			<input type="text" name="mobile"  placeholder="your mobile number here"><br>
			<input type="submit" value="Sign Up" name="signup" class="submitbtn">
			</form>
			<a href="#" id="google"><i class="fab fa-google"></i> Sign up via Google</a>
			<a href="#" id="facebook"><i class="fab fa-facebook"></i> Sign up via Facebook</a><br>
			have an account	<a href="project_login.php"> Log in</a><br>
			<span class="creator">@creator:pushkaryadav</span>
		</div>
	</div>
</body>
</html>
<?php include 'connection.php';
if(isset($_POST['signup'])){
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$mobile = $_POST['mobile'];
	$insert_query = "INSERT INTO `users`(`name`, `username`, `password`, `mobile`) VALUES ('$name','$username','$password','$mobile')";
	$fire = mysqli_query($conn,$insert_query);
	if($fire){
		echo "done";
	}else{
		echo "ssignup failed";
	}
}




?>