<?php
	include_once 'config.php';
?>
<?php

 	$smt=$_POST["smthd"];
 	$fnam=$_POST["fname"];
 	$an=$_POST["anum"];
 	$ead=$_POST["eadd"];
 	$ep=$_POST["epwd"];
 	$ip=$_POST["ipn"];
	$vo=$_POST["vop"];
 	$rss=$_POST["rs"];
    $iplan=$_POST["iplan2"];
 	

    $sql="insert into newdetails(select_the_method,Full_Name ,Account_number,Email_address,Enter_the_password,Insurance_policy_number,Value_of_payment,Rs,Insurance_plan ) values('$smt','$fnam','$an','$ead','$ep','$ip','$vo','$rss','$iplan')";
 
 	if(mysqli_query($conn,$sql)){
		echo "<script> alert('successfully!') </script>";
		//header("location:index.html");
	}
	 else{
		echo "<script> alert('error') </script>";
	}
 
mysqli_close($conn);
?>	 
	 