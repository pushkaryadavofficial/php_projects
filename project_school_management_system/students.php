<?php 
	include 'config/db_config.php';
	$sql = 'SELECT * FROM students';
	$result = mysqli_query($conn,$sql);
	$students = mysqli_fetch_all($result,MYSQLI_ASSOC);
	// print_r($students);
	mysqli_free_result($result);
	mysqli_close($conn);
 ?>
<?php include 'template/header.php'; ?>
<div class="container">
	<div class="m-1 row">
		<div class="col-md-4 col-lg-4 col-12 col-sm-12">
			<a href="add_student.php" class="btn btn-success">Add Student</a>
		</div>
		<div class="col-md-8 col-lg-8 col-12 col-sm-12">
			<form action="student_details.php" method="GET">
				<div class="form-row">
				    <div class="col-8">
				    	<input type="text" name="admn_no" class="form-control" placeholder="search by admission number">
				    </div>
				    <div class="col-4">
				    	<input type="submit" value="Find Detail" name="search" class="btn btn-dark">
				    </div>
				</div>
			</form>
		</div>	
	</div>

	<div class="row">
		<?php foreach ($students as $student) { ?>
		<div class="col-12 col-sm-12 col-md-4 text-white text-center p-1">
		<div class="detail p-2 text-capitalize" style="border-radius: 1em;">	
			<i class="fa fa-user fa-3x"></i><br>
			Admission Number: <?php echo $student['admn_no'] ?><br>
			Student Name: <?php echo $student['name'] ?><br>
			Status: <span class="text-dark"><?php echo $student['status'] ?></span><br>
			<a href="student_details.php?admn_no=<?php echo $student['admn_no'] ?>" class="btn btn-primary btn-sm">More info</a>
		</div>	
		</div>
		<?php } ?>
	</div>
</div>
<?php include 'template/footer.php'; ?>