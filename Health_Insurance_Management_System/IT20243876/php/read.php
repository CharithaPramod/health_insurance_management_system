<?php

include_once 'config.php';


?>





<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width,initial-scale=1">
    -->
    <title>Healthy Life</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <a href="../../IT20210106/html/index.html">
            <img src="../images/logo.png " class="logo" alt="logo">
        </a>
        <nav>
        <ul class="nav_list">
                <li><a href="../../IT20210106/html/index.html">Home</a></li>
                <li><a href="../php/read.php">Profile</a></li>
                <li><a href="../../IT20210106/php/plan.php">Plans</a></li>
                <li><a href="../../IT20225438/src/html/News.html">News</a></li>
                <li><a href="../../IT20208844/html/index.html">Payments</a></li>
                <li><a href="../../IT20210106/html/contact_us.html">Contact Us</a></li>
                <li><a href="../../IT20225438/src/html/About Us.html">About Us</a></li>
            </ul>
        </nav>

    </header>
	
	
	
	
	
	<div style="background-color : lightblue">
	    <table border="1" width="100%">
	    <tr>
		    <th>select_the_method</th>
            <th>Full_Name</th>
			<th>Account_number</th>
			<th>Email_address</th>
			<th>Enter_the_password</th>
            <th>Insurance_policy_number</th>
			<th>Value_of_payment</th>
			<th>Rs</th>
			<th>Insurance_plan</th>
		</tr>
		

    <?php
	
    $sql = "SELECT * FROM newdetails";
    $result = $conn->query($sql);

    if($result->num_rows>0){
	    while($row = $result->fetch_assoc()){
		    echo"<tr><td>".$row["select_the_method"]."<tr><td>".$row["Full_Name"]."<tr><td>".$row["Account_number"]."<tr><td>".$row["Email_address"]."<tr><td>".$row["Enter_the_password"]."<tr><td>".$row["Insurance_policy_number"]."<tr><td>".$row["Value_of_payment"]."<tr><td>".$row["Rs"]."<tr><td>".$row["Insurance_plan"]."</td></tr>";
	    }
	}
    else {
        echo " 0 results";
	}
	echo "</table>";
	
	$conn->close();
	
	?>
	
     </table>
     </div>

    <br><br>
    <br><br>


<footer class="row">
        <div class="column">
            <h3> Quick Links </h3>
            <ul>
                <li><a href="">Go to home page</a></li>
                <li><a href="">Life Insurance </a></li>
                <li><a href="">Who we are</a></li>
            </ul>
        </div>
        <div class="column">
            <h3> About Us </h3>
            <ul>
                <li> <a href="">Who we are </a></li>
                <li> <a href="">Our management</a></li>
                <li> <a href="">Awards and history</a></li>
            </ul>
        </div>
        <div class="column" style="width: 40%">
            <h3> Find us on </h3>
            <ul type="none">
                <li> <a href="https://www.map.google.com"><i class="fa fa-map"></i> &nbsp;&nbsp;Colombo 11</a> </li>
                <li> <a href="https://www.facebook.com"> <i class="fa fa-facebook"></i> &nbsp;&nbsp; facebook </a> </li>
                <li> <a href="https://www.google.com"><i class="fa fa-google"></i> &nbsp;&nbsp; Google </a> </li>
                <li> <a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i> &nbsp;&nbsp; Linkedin </li>
                <li> <a href="https://www.skype.com"><i class="fa fa-skype"></i> &nbsp;&nbsp; Skype </li>
            </ul>
        </div>
        <h4 class="cpr">Health Life Insurance PVT Ltd. &nbsp;&nbsp; All Copyrights are reserved.</h4>
    </footer>

</body>

</html>













	
	
	
	
	
	