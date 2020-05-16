<?php 
// if (isset($_GET['submit'])) {
// 	echo $_GET['email'];
// 	echo $_GET['title'];
// 	echo $_GET['ingredients'];
// }

// ! -> != ,reverses the result
include('config/db_connect.php');
$title=$email=$ingredients='';
$errors = array('email'=>'','title'=>'','ingredients'=>'');
if (isset($_POST['submit'])) {
	//check email
	if (empty($_POST['email'])) {
		$errors['email'] = 'An email is required <br>';
	}else{
		$email = $_POST['email'];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors['email'] =  "email must be a valid email address";
		}
	}
	//check title
	if (empty($_POST['title'])) {
		$errors['title'] = 'An title is required <br>';
	}else{
		$title = $_POST['title'];
		if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
			$errors['title'] =  "title must be letters and spaces only";
		}
	}
	//check ingredients
	if (empty($_POST['ingredients'])) {
		$errors['ingredients'] = 'An ingredients is required <br>';
	}else{
		$ingredients = $_POST['ingredients'];
		if(!preg_match('/^([a-zA-Z\s]+)(,[a-zA-Z\s]*)*$/', $ingredients)){
			$errors['ingredients'] =  "ingredients must be a comma seprated list";
		}
	}

	//POST check end

	if(array_filter($errors)){
		// echo 'errors in the form';
	}else{
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$ingredients = mysqli_real_escape_string($conn,$_POST['ingredients']);
		//create sql
		$sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title','$email','$ingredients')";
		//save to database
		if(mysqli_query($conn,$sql)){
			//success
			mysqli_close($conn);
			header('location:pizzaza_home.php');

		}else{
			//error
			echo 'query error'.mysqli_error($conn);
		}
		// echo "form is valid";
			}
}
// array_filter($errors) -returns true if errors
// htmlspecialchars() - prevent xss attacks
 ?>
<?php include 'template/header.php'; ?>
<section class="container grey-text">
	<h4 class="center">Add a Pizza</h4>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="white">
		<label>Your Email:</label>
		<input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
		<div class="red-text"><?php echo $errors['email']; ?></div>
		<label>Pizza title:</label>
		<input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
		<div class="red-text"><?php echo $errors['title']; ?></div>
		<label>Ingredients(comma seprated):</label>
		<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
		<div class="red-text"><?php echo $errors['ingredients']; ?></div>
		<div class="center">
			<input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
		</div>
	</form>
</section>
<?php include 'template/footer.php'; ?>
</html>