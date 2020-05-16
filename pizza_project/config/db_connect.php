<?php 
	//connect to database
	$conn = mysqli_connect('localhost','pushkar','_Password_','pizzaza_pizza'); 
	//check connecttion
	if(!$conn){
		echo "Connection error: ".mysqli_connect_error();
	}
 ?>