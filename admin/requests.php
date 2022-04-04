<?php
    define('TITLE', 'Requests');
    define('PAGE', 'requests.php');
    include('../dbConnection.php');
    include('include/header.php');
    if(session_id() == ''){
        session_start();
    }

    if(isset($_SESSION['is_adminlogin'])){
        $aEmail = $_SESSION['aEmail'];
    }else{
        echo "<script>location.href = 'login.php'</script>";
    }
?>
<!------------------ Start 2nd Column ----------------->
<div class="col-sm-4 mb-5">
    <?php 
        $sql = "SELECT request_id, request_info, request_desc, request_date FROM submitrequest_tb";
        $data = mysqli_query($conn,$sql);
        $total = mysqli_num_rows($data);
        if($total > 0){
            while($row = mysqli_fetch_assoc($data)){
    ?>
                <div>
                    <div class="card mt-5 mx-2">
                        <div class="card-header">
                         <h6> Request ID:<?= $row['request_id'] ?></h6>
                        </div>
                        <div class="card-body">
                            <h5>Request Info:<?= $row['request_info'] ?></h5>
                            <p class="card-text">Request Decscription:<?= $row['request_desc'] ?></p>
                            <p class="card-text">Requesting Date:<?= $row['request_date'] ?></p>
                            <div class="text-end">
                                <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $row['request_id'] ?>">
                                <input type="submit" class="btn btn-danger mr-2" value="view" name="view">
                                <input type="submit" class="btn btn-secondary" value="close" name="close">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<?php
            }
        }else{
            echo "no request";
        }
    ?>
</div>

<!--------------------- End 2nd Column  ---------------->

<!--------------------- Start Assign Work (3rd Column) ---------------->
<?php include('assign_work_form.php'); ?>
<!--------------------- End Assign Work (3rd Column) ---------------->
<?php  include('include/footer.php'); ?>