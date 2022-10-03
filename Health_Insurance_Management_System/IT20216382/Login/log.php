<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles/styleslogin.css">
	
	<script src="js/myScriptLogin.js"></script>
	
</head>
<body>

	<div class="login">
		<h2> Login </h2>
		<div class="Left-box">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post" onsubmit="return validate()">
                        <div class=" <?php echo (!empty($username_err)) ?'has-error' : ''; ?>">
			Username or Email*
			<br>
			<input type="text" id="user"value="<?php echo $username; ?>" name="username" placeholder="Username or Email" >
			<span class="help-block"><?php echo $username_err; ?></span>
                        <br><br>
</div>
			Password
			<br>
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
			<input type="password" id="pwd" name="pwd" placeholder="Password" >
			<br><br><br>
			<input type="Submit" id="submit" value="Login" >
			
			</form>
		</div>
		<div class="Right-box">
			- or -
			<br><br>
			<a href="https://www.facebook.com" class="fa fa-facebook">
			Login With Facebook	</a> <br><br>
			<a href="https://accounts.google.com/signin/v2/sl/pwd?passive=1209600&continue=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&followup=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="fa fa-google">
			Login With Google+	</a>
			<br><br>
			<a href="../Register/html.html" id="signin">Sign in </a>
		</div>
	</div>
</body>
</html>