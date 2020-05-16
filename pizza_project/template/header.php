<?php 
session_start();
if($_SERVER['QUERY_STRING'] == ''){
	unset($_SESSION['name']);
	// unset all - session_unset();
}
$name = $_SESSION['name'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pizzaza Pizza</title>
	<?php include 'links.php'; ?>
	<style>
		.brand{
			background:#01CBC6 !important; /* !important to overrite classes */
		}
		.brand-text{
			color: #01CBC6 !important;
		}
		form{
			max-width: 460px;
			margin: 20px auto;
			padding: 20px;
		}
		.pizza{
			width: 100px;
			margin: 40px auto -30px;
			display: block;
			position: relative;
			top: -30px;
		}
	</style>
</head>
<body class="grey lighten-4">
	<nav class="white z-depth-0">
		<div class="container">
			<a href="pizzaza_home.php" class="brand-logo brand-text">Pizzaza Pizza</a>
			<ul id="nav-mobile" class="right hide-on-small-and-down">
				<li class="grey-text">Hello <?php echo htmlspecialchars($name); ?></li>
				<li><a href="add.php" class="btn brand z-depth-0">Add Pizza</a></li>
			</ul>
		</div>
	</nav>