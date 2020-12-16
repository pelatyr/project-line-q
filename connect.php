<?php
    $servername = "35.240.184.212";
    $username = "admin";
    $password = "123456";
    $dbname = "project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>