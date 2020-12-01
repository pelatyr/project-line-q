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
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
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
    <div class="col-lg-12 text-center">
      <div class="row d-flex justify-content-center my-3">
        <div class="demoarea" id="setinterval2"><span id="jq4uclock"></span></div>
      </div>

      <div class="row d-flex justify-content-center my-3">
        <div class="card">
          <div class="card-header">
            Your waiting queue
          </div>
          <div class="card-body text-center">
            <h1>
              <?php
                $getQueueFromDB = "SELECT count(queue) AS 'lastestQueue' FROM q WHERE DATE(queue_date) = CURDATE()";

                if ($result = $conn->query($getQueueFromDB)) {
                  $data = $result->fetch_row();
                  $queue = $data[0] + 1;
                  printf($queue);
                  $getqueue = "INSERT INTO q(queue) Value(&queue)";
                } 
                

                else {
                  printf("Connection not alive");
                }
              ?>
            </h1>
          </div>
        </div>
      </div>

      <div class="row d-flex justify-content-center my-3">
        <form action="customer3.php" method="POST">

          <div class="form-group">
            <!-- <label>Enter amount of person:</label> -->
            <div class="input-group flex-nowrap">
              <div class="input-group-prepend">
                <span class="input-group-text" id="addon-wrapping">Enter amount of person</span>
              </div>
              <input name="Amount" type="number" class="form-control" min="1" placeholder="Amount of people" aria-describedby="addon-wrapping"/>
            </div>
          </div>
          <input name="submit" type="submit" value="Place queue" class="btn btn-primary" />
          <a name="cancel" value="Cancel" class="btn btn-primary" href="Thanks.php">Cancel</a>

        </form>
      </div>
    </div>
  </div>
</body>

</html>

<?php
  if (isset($_POST['submit'])) {
    $amount = $_POST['Amount'];
    // INSERT INTO q (queue_date, customer_quantity) VALUES (NOW(), $amount)
    $addQueueStatement = "INSERT INTO q (queue_date, customer_quantity) VALUES (NOW(), '$amount')";
    // echo $addQueueStatement;
    // $addQueueResult = $conn->query($addQueueStatement);
    if ($addQueueResult = $conn->query($addQueueStatement)) {
      $lastestAddRecordId = $conn->insert_id;
      header("Location: customer3.php");
    }
  }
  if (isset($_POST['cancel'])) {
    header("Location: Thanks.php");
  }
?>