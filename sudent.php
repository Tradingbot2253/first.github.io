<?php 
session_start();

if(!isset($_SESSION['username']))
{
header("location:login.php");
}


elseif($_SESSION['usertype']=='admin')
{
header("location:login.php");
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>clients dashboard </title>
</head>
<body>
	<nav>
	<label class="logo"> SMART ENERGY METERING</label>
	<ul>
		<li><a href="2.php">Home</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="">Register</a></li>
		<i><a href="Logout.php">Logout</a></i>

	</ul>
</nav>
	<h1 style="font-weight: bolder;">Welcome client.</h1>

</body>
</html>