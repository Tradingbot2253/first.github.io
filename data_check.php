<?php
session_start();

$host="localhost";
$user="root";
$password="";
$db="Great minds";


$data=mysqli_connect($host,$user,$password,$db);


if($data===false)
{
	die("error");
}


if (isset($_POST['submit'])) {
	// code...


	$data_name=$_POST['username'];
	$data_email=$_POST['email'];
	$data_password=$_POST['password'];
	$usertype="client";

	$sql="INSERT INTO schoolProject(username,email,password)
VALUES ('$data_name','$data_email','$data_password')";
$result=mysqli_query($data,$sql);
if ($result) {
	$_SESSION['message']="Sent";
	header("location:2.php");
}
else{
	echo "failled";
}

}



?>