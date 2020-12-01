<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>ManageQueue</title>

    <?php
        $result = null;
        include_once('connection.php');
        include_once('search.php');
        // include_once('editQ.php');
    ?>
   
   
</head>
<body>
    <h1 class="text-info"><center>Manage Queue</center> </h1>
    
    <br>

    <form name="bt-search" action="" method="post">
        <div class="row justify-content-center">
            <div class="input-group col-md-3">
                <input type="search" class="form-control " name="inputqueue" id="id_checksearch" placeholder="Queue" >
                <div class="input-group-append">
                    <button name="submit"class="btn btn-info" type="submit">SEARCH</button>
                </div>
            </div>
        </div>
    </form>
        
    <br>

    <form name ="tableq"  action="" method="post">
   
        <table class="table table-striped table-hover" >
            <thead>
                <tr>
                    <th>เลือก</th>
                    <th>คิว</th>
                    <th>ชื่อ</th>
                    <th>time</th>
                    <th>จำนวนลูกค้า</th>
                    <th>สถานะ</th>
                    <th>edit</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input position-static"  name="" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            </div>
                        </td>
                        <td><?php echo $row['queue']; ?> </td>
                        <td><?php echo $row['customer_ID']; ?></td>
                        <td><?php echo $row['queue_date']; ?></td>
                        <td><?php echo $row['customer_quantity']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                                <!-- bt edit -->
                            <button type="button" name="editqueue" class="btn btn-outline-warning" data-toggle="modal" data-target="#staticBackdrop">Edit
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </button>
                            <button type="button" class="btn btn-outline-danger">Cancel
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>

<!-- MOdal edit -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">EDIT QUEUE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">save</button>
        </div>
        </div>
    </div>
    </div>


</body>
</html>

<!-- <script>
        function checksearch(){
            console.log("checkk")
        var checksearch = document.getElementById("id_checksearch").value;
            if(isNaN(checksearch)){
                alert("กรุณากรอกคิว");
                return false;
            }
        }
    </script> -->