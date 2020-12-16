<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="stylesheet" href="./style.css" > -->
    <!-- <title>Document</title> -->
    
    <script charset="utf-8" src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
    <?php
        require("connect.php");
        include_once("Res_Head.php");
        
    ?>
  </head>

  <body>

    <form action="" method="POST" class="form-inline">
        
        <!-- lineId=UID -->
        <input id="lineId" type="hidden" name="lineId" /><br><br>
           
        <!-- Name -->
        <div class="form-group mb-3 mr-4">
          <label for="text-input">Name: </label>
          <input class="form-control " type="text" id="name" name="name" placeholder="Your Name">
        </div>
      
        <!-- Phone -->
        <div class="form-group mb-3 mr-4">
          <label for="tel-input">Phone: </label>
          <input class="form-control  " type="tel" id="customer" name="phone" placeholder="0xx-xxx-xxxx">
        </div>

        <!-- submit -->
        <button class="btn btn-success mb-3" type="submit" name="submit" id="exampleModalLong">Submit</button>
    
    </form>
    

  </body>

</html>


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->


<!-- <button type="button" class="btn btn-primary" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div> -->

<?php
    if ( isset($_POST["submit"]) ) {

        $sql = "SELECT COUNT(*) as count FROM customer WHERE customer_line = '{$_POST["lineId"]}'";
        
        if ($result = $conn->query($sql)) {
            $row = $result->fetch_assoc();
            // echo $row["count"];
            
            if ($row["count"] == 0) {
                $sql = "INSERT INTO customer (customer_name, customer_phone, customer_line) 
                        VALUES  ('".$_POST["name"]."', '".$_POST["phone"]."', '".$_POST["lineId"]."')";
                $result = $conn->query($sql);
            }
            else{
                $sql = "UPDATE customer 
                        SET customer_name = '{$_POST["name"]}',customer_phone = '{$_POST["phone"]}' 
                        WHERE customer_line = '{$_POST["lineId"]}' ";
            

                    $result = $conn->query($sql);
                }
            }
            header("location:login.php");
    }
?>

<script>


// $('#exampleModalLong').on("click", function() {
//     console.log("clickkk");
//     $('#exampleModal').modal();
// });

</script>

<script>

    liff.init({
        liffId: "1655337616-o0KjdPbA" // Use own liffId
    }).then(() => {
        if (!liff.isLoggedIn()) { liff.login(); }
        const idToken = liff.getDecodedIDToken();
        document.getElementById("lineId").value = idToken.sub;
    }).catch((err) => {
        console.log(err.code, err.message);
    });

</script>