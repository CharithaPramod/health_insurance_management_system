<?php 
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "h_i_m_s";

    $conn = new mysqli($server_name, $user_name, $password, $db_name);

    if($conn -> connect_error) {
        die("Connection Failed: " . $conn -> connect_error);
}
?>