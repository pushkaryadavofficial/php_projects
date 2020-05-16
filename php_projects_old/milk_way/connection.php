<?php 
$username = "root";
$password = "";
$server = "localhost";
$db = "milk_way";
$conn = mysqli_connect($server,$username,$password,$db);
if($conn){
	echo "connection successful to database";
}else{
	echo "connection failed";
}
?>