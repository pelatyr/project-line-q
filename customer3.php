<?php
    include('connection.php');
?>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
<link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
    <script>
        function closePopup(){
            alert("close");
            $.colorbox.close();
        }
    </script>
</head>

<body>
    <div class="container mt-5">
        <div class="col-lg-12 text-center">
            <div class="row d-flex justify-content-center">
                <div class="card">
                    <div class="card-header text-center">
                        Line information
                    </div>
                    <div class="card-body">
                        <form action="customer3_db.php" method="POST" onsubmit="closePopup();">
                            <div class="form-group">
                                <!-- <label>Enter amount of person:</label> -->
                                <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping">Line id</span>
                                    </div>
                                    <input name="lineId"  type="text" class="form-control" min="1" placeholder="Enter your line id" aria-describedby="addon-wrapping" required />
                                </div>
                            </div>
                            <input class="btn btn-primary" type="submit" name="submit" />
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>