<?php 
//connection to database
$conn = mysqli_connect('localhost','pushkar','_password_y','school_management_system');
//check connection
if(!$conn){
	echo "no connection".mysqli_connect_error();
}



 ?>