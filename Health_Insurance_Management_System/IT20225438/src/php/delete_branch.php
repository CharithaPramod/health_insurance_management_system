<?php
 require 'config.php';

if(isset($_POST['submi'])){
	$name = $_POST["field1"];
	$no = $_POST["field2"];
	$address = $_POST["field3"];
	
	$sql = "DELETE FROM branches where name='SAD'";
	$sql = "DELETE FROM branches where ID='3'";
	$sql = "DELETE FROM branches where ID='2'";
	$sql = "DELETE FROM branches where ID='4'";
	$sql = "DELETE FROM branches where ID='5'";
	$sql = "DELETE FROM branches where ID='6'";
	
	if(mysqli_query($conn,$sql)) {
		echo "<script> alert ('Records deleted successfully!!!') ;
		window.location='../html/About Us.html';
		</script>";
	
	}
	else {
		echo "<script> alert('Error in deletig records') </script>";
	}
}
	mysqli_close($conn);	
?>