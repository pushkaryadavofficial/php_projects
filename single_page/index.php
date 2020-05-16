<?php 
$users = [
	['name'=>'pushkar','email'=>'admin@pushkaryadav.com','password'=>'pass0201'],
	['name'=>'testuser01','email'=>'testuser01@pushkaryadav.com','password'=>'test01']
];
$loggeduser = [];
if(isset($_POST['login'])):
	$email = $_POST['email'];
	$password = $_POST['password'];
	foreach ($users as $user):
		if($email == $user['email'] && $password == $user['password']):
			global $loggeduser;
			$loggeduser[] = $user;
			print_r($loggeduser);
		endif;	
	endforeach;
else:
header('location:accessdenied.php');	
endif;	
$page = '';
if(isset($_GET['page'])):
	global $page;
	$page = $_GET['page'];
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<?php if ($page == 'signup_page') : ?>
			<h3>Create a new account</h3>
		<?php elseif($page == 'login_page' || $page == ''): ?>
			<h3>LogIn to continue</h3>
		<?php endif; ?>	
		<div class="form">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<?php if ($page == 'signup_page') : ?>
					<input type="text" name="name" placeholder="name"><br>
					<input type="email" name="email" placeholder="email"><br>
					<input type="password" name="password" placeholder="password"><br>
					<input type="submit" value="Signup" name="signup"><br>
				<?php elseif($page == 'login_page' || $page == ''): ?>
					<input type="email" name="email" placeholder="email"><br>
					<input type="password" name="password" placeholder="password"><br>
					<input type="submit" value="Log in" name="login"><br>
				<?php endif; ?>	
			</form>
			<?php if ($page == 'signup_page') : ?> 
			<p>Already have an account 
				<a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=login_page">Sing in</a>
			</p>
			<?php elseif($page == 'login_page' || $page == ''): ?>
			<p>don't have an account 
				<a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=signup_page">Sign up</a>
			</p>
			<?php endif; ?>	
		</div>
	</div>
</body>
</html>