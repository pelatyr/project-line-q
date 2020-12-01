<?php
    $where = "";
    if(isset($_POST['submit'])){
        $inputqueue = $_POST['inputqueue'];
        if (!empty($inputqueue)) {
            $where .= "AND queue = '$inputqueue'";
        }
    }
    $sql = "SELECT * FROM q WHERE DATE(queue_date) = CURDATE() $where ORDER BY queue DESC";
    $result = mysqli_query($conn,$sql);  
    //  echo $sql;
?>