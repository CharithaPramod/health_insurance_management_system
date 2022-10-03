<?php
require 'config.php';

if(isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $tele = $conn->real_escape_string($_POST['tele']);
    $msg = $conn->real_escape_string($_POST['msg']);

$sql = "INSERT INTO contact_us(user_name, email, contact_no, nic, message) VALUES('$name', '$email', '$tele', '$nic', '$msg');";

if($conn -> query($sql)) {
    echo "Inserted Successfully!";
}
else {
    echo "Error: ".$conn -> error;
}
}

header("location: ../html/index.html");
?>