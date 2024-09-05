<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Smart Energy Metering</title>
	<link rel="stylesheet" type="text/css" href="Login.css">
<body class="body_deg" background="1_8LZSZ41RJoTNQc3BnFlRzw.jpg">
	<center class="Welcome">Welcome to the Smart Energy Project Portal</center>
	<center >
		<div class="form_deg">
			<center class="title_deg">Login!</center>
			<h3 style="float: inherit;" style="color:hotpink;"> 
				<?php 
			error_reporting(0);
			session_start();
			session_destroy();
			
			echo $_SESSION['loginmessage'];
			
			


			 ?>
			</h3>
			<form action="db-connect1.php" method="POST" class="login_form">
				<div >
					<label class="label_deg">USERNAME</label>
					<input type="text" name="name">
				</div>
				<div>
					<label class="label_deg">PASSWORD</label>
					<input type="password" name="password">
				</div>
				<div>

					<input class="btn btn-primary" type="submit" name="submit"value="Login">
				</div>
				<h4>Registered yet?</h4>
				<a href="signin.php">click here</a>
			</form>

		</div>


	</center>

</body>
</html>