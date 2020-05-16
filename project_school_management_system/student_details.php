<?php include 'config/db_config.php';
if (isset($_POST['student_status_deactivate'])) {
		$admn_no = $_POST['admn_no'];
		$sql = "UPDATE students SET status = 'Deactivated' WHERE admn_no = $admn_no";
		$result = mysqli_query($conn,$sql);
		if(!$result){
			echo mysqli_error($conn);
		}
		$sql = "SELECT * FROM students WHERE admn_no = $admn_no";
		$result = mysqli_query($conn,$sql);
		$student = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		mysqli_close($conn);
		header('location:students.php');
}
if (isset($_POST['student_status_activate'])) {$admn_no = $_POST['admn_no'];$sql = "UPDATE students SET status = 'Active' WHERE admn_no = $admn_no";$result = mysqli_query($conn,$sql);if(!$result){echo mysqli_error($conn);}$sql = "SELECT * FROM students WHERE admn_no = $admn_no";$result = mysqli_query($conn,$sql);$student = mysqli_fetch_assoc($result);mysqli_free_result($result);mysqli_close($conn);header('location:students.php');}
if (isset($_GET['admn_no']) || isset($_GET['search'])) {
	$admn_no = $_GET['admn_no'];
	$sql = "SELECT * FROM students WHERE admn_no = $admn_no";
	$result = mysqli_query($conn,$sql);
	$student = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	mysqli_close($conn);
	// print_r($student);
	
}
?>
<?php include 'template/header.php'; ?>
<div class="container">
	<div class="d-flex justify-content-end m-0">
		<form action="student_edit.php" method="POST">
			<input type="hidden" name="student_admn_no" value="<?php echo $student['admn_no'] ?>">
			<input type="submit" value="Edit Details" name="student_edit" class=" pl-5 pr-5 btn btn-warning">
		</form>
	</div>
	<div class="row justify-content-center">
		<div class=" col-12 col-sm-10">
			<table class="table">
				<tr>
					<th>Student name:</th>
					<th><?php echo $student['name']; ?></th>
				</tr>
				<tr>	
					<td>Admission number:</td>
					<td><?php echo $student['admn_no']; ?></td>
				</tr>
				<tr>
					<td>Father's Name:</td>
					<td><?php echo $student['father_name']; ?></td>
				</tr>
				<tr>
					<td>Mother's Name:</td>
					<td><?php echo $student['mother_name']; ?></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><?php echo $student['address']; ?></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><?php echo $student['email']; ?></td>
				</tr>
				<tr>
					<td>Contact number:</td>
					<td><?php echo $student['mobile']; ?></td>
				</tr>
				<tr>
					<td>Class joined at admission:</td>
					<td><?php echo $student['class_joined']; ?></td>
				</tr>
				<tr>
					<td>Date of admission:</td>
					<td><?php echo $student['date_joined']; ?></td>
				</tr>
				<tr class="text-success">
					<td>status:</td>
					<td><?php echo $student['status']; ?></td>
				</tr>
			</table>	
			<form action="student_details.php" method="POST">
				<input type="hidden" name="admn_no" value="<?php echo $student['admn_no']; ?>">
				<?php if ($student['status'] == 'Active'): ?>	
				<input type="submit" value="Deactivate Student" name="student_status_deactivate" class="btn btn-danger">
				<?php else: ?>	
				<input type="submit" value="Activate Student" name="student_status_activate" class="btn btn-warning">
				<?php endif; ?>
			</form>
		</div>
	</div>
</div>
<?php include 'template/footer.php'; ?>