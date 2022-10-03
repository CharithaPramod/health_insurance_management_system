<?php
 require 'config.php';

if(isset($_POST['submi'])){
	$name = $_POST["field1"];
	$no = $_POST["field2"];
	$address = $_POST["field3"];
	
	$sql = "insert into branches(Branch_name,Contact_no,Address,ID)values('$name','$no','$address','')";
	
	if(mysqli_query($conn,$sql)) {
		echo "<script> alert ('Records inserted successfully!!!') ;
		window.location='../html/About Us.html';
		</script>";
	
	}
	else {
		echo "<script> alert('Error in inserting records') </script>";
	}
}
	mysqli_close($conn);	
?>

