

<?php 


error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message']) {

	$message=$_SESSION['message'];
	echo "<script type='text/javascript'>
	alert('$message');
	</script>";
	// code...
}


 ?>

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
			<center class="title_deg">Sign Up!</center>
			<form action="data_check.php" method="POST" class="login_form">
				<div >
					<label class="label_deg">USERNAME</label>
					<input type="text" name="username">
				</div>
				<div>
					<label class="label_deg">Email</label>
					<input type="text" name="email">
				</div>

					<div>
					<label class="label_deg">PASSWORD</label>
					<input type="password" name="password">
				</div>
				<div>

					<input class="btn btn-primary" type="submit" name="submit"value="signup">
				</div>
				<h4>Have an account?</h4>
				<a href="login.php">click here</a>
			</form>

		</div>


	</center>

</body>
</html>