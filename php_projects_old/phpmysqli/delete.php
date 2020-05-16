<?php 
include'connection.php';
$id = $_GET['id'];
$deletequery = "delete from jobregistration where id = $id";
$query = mysqli_query($conn,$deletequery);
header('location:display.php');
?>