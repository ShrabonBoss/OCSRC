<?php
    define('TITLE', 'Check Request Status');
    define('PAGE', 'service_status');
    include('include/header.php');
    include('../dbConnection.php');
    session_start();
    
    if($_SESSION['is_login']){
        $rEmail = $_SESSION['rEmail'];
    }else{
        echo "<script>location.href = 'user_login.php'</script>";
    }
?>
    <!-------------------- Start 2nd Column ---------------->
    <div class="col-sm-6 mt-5 mx-3">
        <form action="" method="POST" class="row">
            <div class="form-group col mr-2">
                <label for="checkid">Enter Request ID:</label>
                <input type="text" class="form-control" name="checkid" id="checkid">
            </div>
            <div class="col mt-4">
            <button type="submit" class="btn btn-danger" name="search">Search</button>
            <?php if(isset($msg)){ echo $msg;} ?>
            </div>
        </form>
    </div>

    <?php
    if(isset($_REQUEST['search'])){

      /* if($_REQUEST['checkid'] == ""){
            $msg = '<div class="alert text-center alert-warning col-sm-6 mt-2" role="alert">Enter Request Id</div>';
        }else{*/
        $rid = $_REQUEST['checkid'];
        $sql = "SELECT * FROM assign_work_tb WHERE request_id = $rid";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
    }

    if($result == TRUE){
        ?>
        <div class="col-sm-9 col-md-8">
            <table class="table bordered">
                <tr>
                    <td>Request ID:</td>
                    <td><?= $row['request_id']?></td>
                </tr>
                <tr>
                    <td>Request Info:</td>
                    <td><?= $row['request_info']?></td>
                </tr>
                <tr>
                    <td>Request Decscription:</td>
                    <td><?= $row['request_desc']?></td>
                </tr>
                <tr>
                    <td>Requester Name:</td>
                    <td><?= $row['requester_name']?></td>
                </tr>
                <tr>
                    <td>Requester Address1:</td>
                    <td><?= $row['requester_add1']?></td>
                </tr>
                <tr>
                    <td>Requester City:</td>
                    <td><?= $row['requester_city']?></td>
                </tr>
                <tr>
                    <td>Requester Email:</td>
                    <td><?= $row['requester_email']?></td>
                </tr>
                <tr>
                    <td>Requester Email:</td>
                    <td><?= $row['requester_mobile']?></td>
                </tr>
                <tr>
                    <td>Responsive Persion:</td>
                    <td><?= $row['assign_tech']?></td>
                </tr>
                <tr>
                    <td>Service Date:</td>
                    <td><?= $row['input_date']?></td>
                </tr>
            </table>
        </div>
        <?php
    }else{
        $msg = '<div class="alert text-center alert-warning col-sm-6 mt-2" role="alert">Enter valid Request Id</div>';
    }
    ?>

    <!------------------- End 2nd Column ---------------->

<?php 
    include('include/footer.php');
?> 