<?php 
$detailerror = "";
if (isset($_POST['add_student'])) {
	$name = $_POST['name'];
	if($name != ""){
		$class = $_POST['class'];
		if($class != ""){
			$f_name = $_POST['f_name'];
			if($f_name != ""){
				$m_name = $_POST['m_name'];
				if($m_name != ""){
					$email = $_POST['email'];
					if($email != ""){
						$mobile = $_POST['mobile'];
						if($mobile != ""){
							$address = $_POST['address'];
							if($address != ""){
								include 'config/db_config.php';
								$sql = "INSERT INTO students(name,class_joined,email,mobile,father_name,mother_name,address) VALUES('$name','$class','$email','$mobile','$f_name','$m_name','$address')";
								$res = mysqli_query($conn,$sql);
								if ($res) {
									mysqli_close($conn);
									echo '<div class="alert alert-success m-0"><i class=""></i> Data inserted Successfully</div>';
									header('location:students.php');
								}else{
									echo '<div class="alert alert-dark m-0">OOPs something went wrong!</div>';
									mysqli_close($conn);
								}
							}
						}
					}
				}
			}
		}
	}else{
		$detailerror = '<div class="alert alert-danger m-0"><i class="fas fa-exclamation-triangle"></i> plaese fill all details</div>';
		echo $detailerror;
	}	
}

include 'template/header.php';
 ?>

<div class="container">
	<div class="alert alert-info">hey, you don't need to specify admn no,date,status these will be alloted automatically</div>
	<form action="add_student.php" method="POST">
		<div class="form-row">
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Name</label>
				<input type="text" class="form-control" name="name" id="">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Class</label>
				<input type="text" class="form-control" name="class" id="">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Father's Name</label>
				<input type="text" class="form-control" name="f_name" id="">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Mother's Nmae</label>
				<input type="text" class="form-control" name="m_name" id="">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Email</label>
				<input type="text" class="form-control" name="email" id="">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Mobile no</label>
				<input type="text" class="form-control" name="mobile" id="">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Address</label>
				<input type="text" class="form-control" name="address" id="">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12 d-flex justify-content-end align-items-end">
				<input type="submit" value="Submit Details" name="add_student" class="btn btn-success">
			</div>
		</div>
	</form>
</div>

<?php include 'template/footer.php'; ?>