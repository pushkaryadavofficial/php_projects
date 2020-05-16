<?php
include 'config/db_config.php';
$detailerror = "";
$student = ['admn_no'=>'','name'=>'','class_joined'=>'','mother_name'=>'','father_name'=>'','address'=>'','email'=>'','mobile'=>''];
if (isset($_POST['student_edit'])) {
	$admn_no = $_POST['student_admn_no'];
	$sql = "SELECT * FROM students WHERE admn_no = $admn_no";
	$result = mysqli_query($conn,$sql);
	$student = mysqli_fetch_assoc($result);
	$admn_no = $student['admn_no'];
	mysqli_close($conn);
	if(!$student){
		header('location:error.php');
	}
}
if (isset($_POST['update_student'])) {
	$admn_no = $_POST['admn_no'];
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
								$sql = "UPDATE students SET name='$name',class_joined='$class',email='$email',mobile='$mobile',father_name='$f_name',mother_name='$m_name',address='$address' where admn_no = $admn_no";
								$res = mysqli_query($conn,$sql);
								if ($res) {
									mysqli_close($conn);
									header('location:students.php');
								}else{
									echo '<div class="alert alert-dark m-0">OOPs something went wrong!</div>';
									$sql = "SELECT * FROM students WHERE admn_no = $admn_no";
									$result = mysqli_query($conn,$sql);
									$student = mysqli_fetch_assoc($result);
									$admn_no = $student['admn_no'];
									mysqli_close($conn);
									if(!$student){
										header('location:error.php');
									}
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
	<form action="student_edit.php" method="POST">
		<div class="form-row">
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<input type="hidden" name="admn_no" value="<?php echo $student['admn_no'] ?>">
				<label for="">Name</label>
				<input type="text" class="form-control" name="name" value="<?php echo $student['name'] ?>">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Class joined</label>
				<input type="text" class="form-control" name="class" value="<?php echo $student['class_joined'] ?>">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Father's Name</label>
				<input type="text" class="form-control" name="f_name" value="<?php echo $student['father_name'] ?>">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Mother's Nmae</label>
				<input type="text" class="form-control" name="m_name" value="<?php echo $student['mother_name'] ?>">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Email</label>
				<input type="text" class="form-control" name="email" value="<?php echo $student['email'] ?>">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Mobile no</label>
				<input type="text" class="form-control" name="mobile" value="<?php echo $student['mobile'] ?>">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12">
				<label for="">Address</label>
				<input type="text" class="form-control" name="address" value="<?php echo $student['address'] ?>">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-12 d-flex justify-content-end align-items-end">
				<input type="submit" value="Update Details" name="update_student" class="btn btn-success">
			</div>
		</div>
	</form>
</div>

<?php include 'template/footer.php'; ?>