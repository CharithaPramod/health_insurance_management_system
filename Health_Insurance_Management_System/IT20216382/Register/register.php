<?php 
 require_once "../config.php";
 
    $First_Name="";
    $Middle_Name="";
    $Last_Name="";
    $Mobile_Number="";
    $Email_Address="";
    $Address="";
    $Gender="";
 ?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="styles/R.css">
	
	<title>Healthy Life</title>
	
	<script>
	
	document.write(Date());
	
	</script>
	
	<script src="js/R.js"></script>
	
</head>
<body>
<div class="form"  >
<form action="" method="get" onsubmit="return validPwd()"> 
<center><h2>Sing Up</h2></center>

<p>First Name</p>
<input type="text" id="button1" placeholder="First Name" name="FullName"required value="<?php echo $First_Name; ?>"><br>
<p>Middle Name</p>
<input type="text" id="button2" placeholder="Middle Name" name="FullName"required value="<?php echo $Middle_Name; ?>"><br>
<p>Last Name</p>
<input type="text" id="button3" placeholder="Last Name" name="FullName"required value="<?php echo $Last_Name; ?>"><br>
<p>Mobile Number</p>
<input type="phone" pattern="[0-9]{10}" id="button" placeholder=" Mobile No"  name="MobileNumber" value="<?php echo $Mobile_Number; ?>"><br>
<p>Address</p>
<textarea id="add" rows="3" cols="33" name="Address"value="<?php echo $Address; ?>"></textarea> 
<br>
<p>Gender <input type="radio" name="gender" placeholder="male"  > male
<input type="radio" name="gender" placeholder="female" name="Gender"value="<?php echo $Gender; ?>"> female</p>
<p>Email Address</Address></p>
<input type="email" pattern="[A-Za-z0-9+%_-]+@[a-zA-Z]+\.[a-z]{2,3}" id="button" name="Email" placeholder="abc@mail.com"required value="<?php echo $Email_Address; ?>">
<br>
<p>Password</p>
<input type="password" name="Password1" id="pwd1" name=" Password1" placeholder="  * * * * * * * * * *" required><br>
<p>Confirm Password</p>
<input type="password" name="Password2" id="pwd2" name="Password2" placeholder="  * * * * * * * * * *" required >
<hr>
<input type="checkbox" id="cb1" onclick="check()"> Accept all Terms & Condition according to the given items.<br><br>
<center><input type="submit" id="sub1" value="Submit"></center><br>
    <P></p>
</form></div>

</body>
</html>