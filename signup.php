<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" type="text/css" href="signup.css">

<body>
	<center class="Welcome" style="font-weight: bolder; padding: 20px;">Welcome back to the Smart Energy Project Portal</center>
	<center >
		<div class="form_deg">
			<h3 style="float: inherit;" style="color:hotpink;"> 
				<?php 
			error_reporting(0);
			session_start();
			session_destroy();
			
			echo $_SESSION['loginmessage'];
			
			


			 ?>
			</h3>

   <div class="container" id="signin">

	
	<h1 class="form-title">
		Login
	</h1>
	<form method="post" action="db-connect.php"><meta charset="utf-8">
		
		<div class="input-group" >
			<i class="fas fa-user"></i>
			<label class="label_deg">Username</label>
					<input type="text" name="Username">


		</div>
		<div class="input-group">
			<i class="fas fa-lock"></i>
			<input type="password" name="password"  id="password" placeholder="password" required>
			<label class="password">Password</label>
			<p class="recover">

				<a href="#">Recover password</a>
			</p>
			
			<input type="submit" name="submit" class="btn" value="Sign In" name="signin" id="signIn">


		</div>

<p class="or">   

--------------Or-----------------

</p>
<div class="icons">
	<i class="fab fa-google"></i>
	<i class="fab fa-facebook"></i>

</div>
<div  class="links"> 
<p>Yet have account?</p>
<button id="signUpButton"><a href="signin.php">Sign Up</a></button>
</div>
</form>
</div>

 <script type="text/javascript"></script>	
</body>
</html>