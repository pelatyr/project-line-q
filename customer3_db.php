<?php

include('connection.php');

$lineId = $_POST['lineId'];
$checkCustomerId = "SELECT * from customer where customer_ID = "$lineId" ";
$result = mysql_query($checkCustomerId) or die(mysql_error());
$num=mysql_num_rows($result);
if($num==0{
    echo "location='customer4.php'"
})
else{
    echo "location='Thanks.php'"
}




<!-- <?php

// include('connection.php');

// if (isset($_POST['submit'])) {
//     $lineId = $_POST['lineId'];
//     $checkCustomerId = "SELECT * FROM customer WHERE customer_ID = '$lineId'";
//     $isHasId = $conn->query($checkCustomerId);
//     if ($isHasId->num_rows == 0) {
//         echo $isHasId->num_rows;//
//         echo "Id not exsited";//
//         header("Location: customer4.php");
//     } else {
//         echo $isHasId->num_rows;//
//         echo "Id existed";//
//     }
//     echo $lineId;//
// }
?> -->