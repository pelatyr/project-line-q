<?php
  $conn= mysqli_connect("35.240.184.212","admin","123456","project") or die("Error: " . mysqli_error($conn));
  
  mysqli_query($conn,"SET NAMES 'utf8' ");

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>