
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm_Q</title>

</head>
<body>
<?php
    /*---------------------------------ConnectDB-------------------------------------------------------- */
    $con = mysqli_connect('localhost','root','12345678');
    if (!$con){ 
        die("Connection failed : ". mysqli_connect_error());
    }
    mysqli_select_db($con,'testq') or die("Can't Select".mysqli_connect_error());

/*---------------------------------------------------------------------------------------------------- */

    

    
    date_default_timezone_set('Asia/Bangkok');
    $today_date=date("d-M-Y");
    $today_time=date("h:i:s: a");
    echo "<b>Today is </b> $today_date $today_time";

?>
    
    
<form>
<p>
<label for="q">คิวที่ </label>
<input type="q" name="q" class="form-control">
</p>
<button type="submit" class="btn btn-success">บันทึก</button>

</form>  
</body>
</html>