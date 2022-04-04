
<?php 
    define('TITLE', 'Requester Profile');
    define('PAGE', 'requesterprofile');
    include('../dbConnection.php');
    session_start();

    if($_SESSION['is_login']){
        $rEmail = $_SESSION['rEmail'];
    }else{
        echo "<script>location.href = 'user_login.php'</script>";
    }

    $sql = "SELECT r_name, r_email FROM requesterlogin_tb WHERE r_email = '$rEmail'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    if($row == 1){
        $data = mysqli_fetch_assoc($result);
        $rName = $data['r_name'];
    }

    // update info
    if(isset($_REQUEST['nameupdate'])){
        if($_REQUEST['rName'] == ""){
            $msg = '<div class="alert text-center alert-warning col-sm-6 mt-2" role="alert">Fill All Fields</div>';
        }else{
            $rName = $_REQUEST['rName'];
            $sql = "UPDATE requesterlogin_tb SET r_name = '$rName' WHERE r_email = '$rEmail'";

            if($conn->query($sql) == TRUE){
                $msg = '<div class="alert text-center alert-success col-sm-6 mt-2" role="alert">Info Update Successfully</div>';
            }else{
                $msg = '<div class="alert text-center alert-danger col-sm-6 mt-2" role="alert">Updating Failed</div>';
            }
        }
    }
?>

<?php
    include('include/header.php');
?>
            <!------------- Start Profile Area ------------------>
            <div class="col-sm-6 mt-5">
                <form action="" method="POST" class="mx-5">
                    <div class="form-group m-1">
                        <lable for="rEmail">Email</lable>
                        <input type="email" name="rEmail" id="rEmail" class="form-control" value="<?php echo $rEmail ?>" readonly>
                    </div>
                    <div class="form-group m-1">
                        <lable>Name</lable>
                        <input type="text" name="rName" id="rName" class="form-control" value="<?php echo $rName ?>">
                    </div>
                    <button type="submit" name="nameupdate" class="btn py-1 mt-5 btn-danger">Update</button>
                    <?php if(isset($msg)){echo $msg;} ?>
                </form>
            </div>
            <!------------- End Profile Area ------------------>
<?php 
    include('include/footer.php');
?>   