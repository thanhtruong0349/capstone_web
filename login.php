<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<title>Daily weather</title>
	<script src="js/d3.v3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">


	<style>
	body {
		background-image: url("https://img.freepik.com/free-photo/blue-bokeh-textured-plain-product-background_53876-102475.jpg?w=1060&t=st=1649588997~exp=1649589597~hmac=cf462660f31d0148bcd30627b2b88884f249aafae64be235c61dc48da20898e9");
		background-repeat: repeat;
	}
</style>
</head>
<body>
	<div id= "body" >

		<div class="header">
			<h2>Login</h2>
		</div>

		<form method="post" action="login.php">

			<?php include('errors.php'); ?>

			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" >
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login_user">Login</button>
			</div>
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
		</form>

	</div>
</body>
</html>