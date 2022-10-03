<?php
 require 'config.php';
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width,initial-scale=1">
    -->
    <title>Healthy Life</title>
    <link href="../css/style_About us page.css" type="text/css" rel="stylesheet">
	<link href="../css/style_news page.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js" href="script/script.js"> </script>
</head>

<body>
	<script>
    document.write(Date());
    </script>
    <header>
        <a href="index.html">
            <img src="../images/logo.png " class="logo" alt="logo">
        </a>
        <nav>
            <ul class="nav_list">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Profile</a></li>
                <li><a href="">Plans</a></li>
                <li><a href="News.html">News</a></li>
                <li><a href="">Payments</a></li>
                <li><a href="">Contact Us</a></li
            </ul>
        </nav>
        <div class="search-container">
            <form action="../php/action.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <a class="cta" href=""><button> <i class="fa fa-user"></i> Login</button></a>
        <a class="cta" href=""><button><i class="fa fa-user"></i> Sign Up</button></a>
    </header>
	<hr>
	<br> <br>
	<br> <br>
	<center>
	<div style="background-color: lightblue">
		<table border="1" width="100%">
		<tr>
			<th> Branch_name </th>
			<th> Contact_no </th>
			<th> Address </th>
			<th> ID </th>
		</tr>
		
		<?php
		$sql ="SELECT * FROM branches";
		$result = $conn->query($sql);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo"<tr><td>".$row["Branch_name"]."</td><td>".$row["Contact_no"]."</td><td>".$row["Address"]."</td><td>".$row["ID"]."</td></tr>";
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
            <h3> <a href="About Us.html">About Us</a> </h3>
            <ul>
               <li> Who we are </li>
                <li>  Our management </li>
                <li>  Awards and history </li>
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