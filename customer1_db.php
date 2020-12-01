<?php
  include('connection.php');
    
  $amount = $_POST['amount'];
	$queue = $_POST['queue'];
  // $addQueueStatement = "INSERT INTO q (queue_date, customer_quantity, queue) VALUES (NOW(), '".$amount."', '".$queue."') ";

  $addQueueStatement = "INSERT INTO q (queue_date, customer_quantity, customer_ID, queue, status) VALUES (
    NOW(),
    '".$amount."',
    1,
    '".$queue."',
    'in'
  )";


  if ($result = $conn->query($addQueueStatement)) {
    print_r($result);
  } else {
    echo false;
  }
 
?> 

