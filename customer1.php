 <?php
  include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Confirm_Q</title>
  <LINK REL="SHORTCUT ICON" HREF="Q.png">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script type="text/javascript">
    jQuery(document).ready(function() {
      function updateClock() {
        var currentTime = new Date();
        var currentHours = currentTime.getHours();
        var currentMinutes = currentTime.getMinutes();
        var currentSeconds = currentTime.getSeconds();
        currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
        currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;
        var timeOfDay = (currentHours < 12) ? "AM" : "PM";
        currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
        currentHours = (currentHours == 0) ? 12 : currentHours;
        var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

        $('#jq4uclock').html(currentTimeString);
      }

      myCounter = setInterval(function() {
        updateClock();
      }, 1000);

    });
  
    $(document).ready(function(){
      $('#btn_smqueue').click(function(){
        var fd = new FormData();
        var queue_amount = $('#Amount').val();
        var queue_num = $('#numqueue').val();
        fd.append('amount',queue_amount);
        fd.append('queue',queue_num);

        $.ajax({
          url: './customer1_db.php',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){
            console.log(response)
            if(response != 0){
              $('#myModal').modal('hide');
              //$('#preview').append(response);
              location.replace("./customer3.php");
            }else{
              alert("error");
            }
          }
        });
      });
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
  <div class="container">
    <!-- Trigger the modal with a button -->
    <center><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">กดเพื่อรับคิว</button></center>
    <div id='preview'></div>
  </div>

  <!-- My Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <div class="container">
            <div class="col-lg-12 text-center">
              <div class="row d-flex justify-content-center my-3">
                <!--clock -->
                <div class="demoarea" id="setinterval2"><span id="jq4uclock"></span></div>
              </div> 
                
              <!--show queue -->
              <div class="row d-flex justify-content-center my-3">
                <div class="card">
                  <div class="card-header">
                    Your waiting queue
                  </div>
                  <div class="card-body text-center">
                    <?php
                      $getQueueFromDB = "SELECT count(*) AS 'lastestQueue' FROM q WHERE DATE(queue_date) = CURDATE()";

                      if ($result = $conn->query($getQueueFromDB)) {
                        $data = $result->fetch_row();
                        $queue = $data[0] + 1;
                        printf($queue);
                      } 
                      else {
                        printf("Connection not alive");
                      }
                    ?>

                  </div>
                </div>
              </div>

                <div class="row d-flex justify-content-center my-3">
                  <form action="" method="POST">
                    <div class="form-group">
                      <!-- <label>Enter amount of person:</label> -->
                      <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="addon-wrapping">Enter amount of person</span>
                        </div>
                        <input type='hidden' id='numqueue' value='<?=$queue?>'>
                        <input name="Amount" id="Amount" type="number" class="form-control" min="1" placeholder="Amount of people" aria-describedby="addon-wrapping"/>
                      </div>
                    </div>
                    <input name="btn_smqueue" id="btn_smqueue" type="button" value="Place queue" class="btn btn-primary" />
                    <a name="cancel" value="Cancel" class="btn btn-primary" href="Thanks.php">Cancel</a>  
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
        
    </div>
  </div>

</body>
</html>



