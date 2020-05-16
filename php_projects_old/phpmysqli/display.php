
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>checkform</title>
 	<meta name="viewport" content="width=device-width,initial-scale=1">
 	<?php include'links.php'; ?>
	<style><?php include'style.css';?></style>
 </head>
 <body>
 
 	<div class="main-div">
 		<h1>list of candidates for job</h1>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Degree</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Refer</th>
						<th>Post</th>
						<th colspan="2">operation</th>
					</tr>
				</thead>
				<tbody>
					<?php 

					include 'connection.php';

					$selectquery = "select * from jobregistration";

					$query = mysqli_query($conn,$selectquery);

					while($res = mysqli_fetch_array($query)){
					?>
						<tr>
						<td><?php echo $res['id'];?></td>
						<td><?php echo $res['name'];?></td>
						<td><?php echo $res['degree'];?></td>
						<td><?php echo $res['mobile'];?></td>
						<td><div class="email-style"><?php echo $res['email'];?></div></td>
						<td><?php echo $res['refer'];?></td>
						<td><div class="post-class"><?php echo $res['jobpost'];?></div></td>
						<td><a href="updates.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" title="Update"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
						<td><a href="delete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" title="Trash"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
					</tr>
					<?php
					}


					 ?>
					
				</tbody>
			</table>
		</div>
	</div>

 	</div>


 </body>
 </html>