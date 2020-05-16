<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>job registration</title>
	<?php include 'links.php';?>
	<style>
		*{
			font-family: 'Muli', sans-serif;
		}
		.top{
			font-size: 40px;
			color: #0A79DF;
		}
		body{
			background: #12c2e9;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}
		.image{
			background: #00F260;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0575E6, #00F260);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0575E6, #00F260); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

			border-radius: 76% 16% 25% 36% / 40% 38% 33% 35% ;
			margin-right: 10px;
			width:200px;
			height: auto;
		}
		/** created by Pushkar Yadav **/
	</style>
</head>
<body>
	
<section>
	<div class="container text-center top mt-5 mb-5">
		want a job?<hr width="50%">
	</div>
</section>
<section>
	<div class="container mt-5 text-capitalize">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-12"><div class="image"><img src="http://localhost/pushkaryadav.learn/php.learn/phpmysqli/img/2.png" class="img-fluid" alt=""></div><BR><a href="display.php"><input type="button" name ="checkform"value="checkform" class="btn btn-info"></a></div>
			<div class="col-lg-9 col-md-9 col-12">
				
				<form action="" method="POST">
				  <div class="row">
				    <div class="col">
				      <input type="text" class="form-control" name="user" placeholder="name">
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" name="degree" placeholder="degree">
				    </div>
				  </div>
				  <div class="row mt-2">
				    <div class="col">
				      <input type="text" class="form-control" name="mobile" placeholder="mobile">
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" name="email" placeholder="email">
				    </div>
				  </div>
				  <div class="row mt-2">
				    <div class="col">
				      <input type="text" class="form-control" name="refer" placeholder="refer">
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" name="jobprofile" placeholder="jobpost" values="webprofile" >
				    </div>
				  </div>
				  <div class="row mt-2">
				    <div class="col">
				      plaese write all data!
				    </div>
				    <div class="col ">
				     <input type="submit" name="submit" class="btn btn-outline-dark"value="register">

				    </div>
				  </div>
				</form>

			</div>
		</div>
	</div>
</section>


	
</body>
</html>
<?php
 include 'connection.php';
 
if(isset($_POST['submit'])){
	$name = $_POST['user'];
	$degree = $_POST['degree'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$refer = $_POST['refer'];
	$jobprofile = $_POST['jobprofile'];
	$insertquery = "INSERT INTO `jobregistration`(`name`, `degree`, `mobile`, `email`, `refer`, `jobpost`) VALUES ('$name','$degree','$mobile','$email','$refer','$jobprofile')";
	$res = mysqli_query($conn,$insertquery);
	if($res){
		?><script>alert("data inserted successfully");</script>
		<?php
	}else{
		?><script>alert("data not inserted");</script>
		<?php
	}



}



?>