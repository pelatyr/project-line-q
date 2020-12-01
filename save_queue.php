<?
	include('connection.php');

	$amount = $_POST['amount'];
	$queue = $_POST['queue'];
  // INSERT INTO q (queue_date, customer_quantity) VALUES (NOW(), $amount)
  $addQueueStatement = "INSERT INTO q (queue_date, customer_quantity, queue) VALUES (NOW(), '".$amount."','".$queue."')";
  // echo $addQueueStatement;
  // $addQueueResult = $conn->query($addQueueStatement);
  $addQueueResult = $conn->query($addQueueStatement);
  $lastid = $conn->insert_id;
  if($lastid!="") {
    echo "success";
  }else{
  	echo "0";
  }
?>