<?php 
$username = "root";
$password = "";
$server = 'localhost';
$db = 'job';
$conn = mysqli_connect($server,$username,$password,$db);
if($conn){
	echo "connected to database<BR>";
}else{
	echo "no connection<BR>";
	//not in xampp--in other--die("no connection".mysqli_connect_error());
}

// mysql_connect('localhost','root','','job');


?>



