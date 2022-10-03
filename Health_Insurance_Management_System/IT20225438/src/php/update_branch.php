<?php
 require 'config.php';

if(isset($_POST['submi'])){
	$name = $_POST["field1"];
	$no = $_POST["field2"];
	$address = $_POST["field3"];
	
	$sql = "UPDATE branches SET Branch_name='Kaduwela' WHERE id=13";
	$sql = "UPDATE branches SET Contact_no='011-2712584' WHERE id=10";
	$sql = "UPDATE branches SET Contact_no='063-2263412' WHERE id=8";
	
	
	if(mysqli_query($conn,$sql)) {
		echo "<script> alert ('Records updated successfully!!!') ;
		window.location='../html/About Us.html';
		</script>";
	
	}
	else {
		echo "<script> alert('Error in updating records') </script>";
	}
}
	mysqli_close($conn);	
?>