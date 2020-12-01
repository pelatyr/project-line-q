<!-- Copyright 2011 jQuery4u.com -->
<!DOCTYPE html>
<html>
<title>jQuery Function Demo - jQuery4u.com</title>
<head>
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
          font-size: 42px;
          line-height: 42px;
        }
    </style>

</head>
<body>
<div class="demoarea" id="setinterval2"><span id="jq4uclock"></span></div>

</body>
</html>
<!-- Copyright 2011 jQuery4u.com -->