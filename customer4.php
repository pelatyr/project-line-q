<?php
  include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>system for Q</title>
    <LINK REL="SHORTCUT ICON" HREF="Q.png">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400,500,600&display=swap&subset=thai" rel="stylesheet">
    <link rel="stylesheet" href="css1.css" type = "text/css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    

    <script type="text/javascript">

 
jQuery(document).ready( function ()
{
 function updateClock()
    {
  var currentTime = new Date ( );
  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
  currentHours = ( currentHours == 0 ) ? 12 : currentHours;
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
  
  $('#jq4uclock').html(currentTimeString);
 }
 
 myCounter = setInterval(function() {
  updateClock();
 }, 1000);   
    
});
    </script>

    <style lang="text/css">
        #jq4uclock {
          font-size: 17px;
          line-height: 17px;
        }
    </style>

</head>
<body>
<form>
<?php
    /*---------------------------------ConnectDB-------------------------------------------------------- 
    $host = 'localhost';
    $user = 'root';
    $password = '123456789';
    $database = 'project';
    
    $link=mysql_connect($Q);
    
    
    mysql_select_db($database,$link);
    

/*---------------------------------------------------------------------------------------------------- 
    $fQ =$_REQUEST["number_q"];

    echo "$fnumber_q";
    
    $sql ="INSERT INTO q value" ('$fnumber_q');
    
    mysqli_set_charset($link,"utf8"); */
    
 date_default_timezone_set('Asia/Bangkok'); $today_date=date("d-M-Y");
     
        

?>


<?php echo "Today is  $today_date "; ?><div class="demoarea" id="setinterval2"><span id="jq4uclock"></span></div>


<div class="container">
<div class="header">
<br>
    <font size="7">WELLCOME </font>
    <br>
    <br>
    <br>
    <div style = "margin-top: 40px">
        <input type = text name = "Name" size="20" value="" placeholder="Name" required><br>
    <div style = "margin-top: 40px">   
        <input type = text name = "Name" size="20" value="" placeholder="Callnumber" required><br>
        <br>
        <div style = "margin-top:20px;">      
        <button type="submit" class="buttonadd" value="" style="margin-right:33px">connect line</button>
        <button type="reset" value="" class="buttoncancle">CANCLE</button></a><br> 
</div>  

    <br/><br/><br/>
    

</form>  
</body>
</html>