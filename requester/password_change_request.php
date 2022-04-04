<?php
    define('TITLE', 'Password Change');
    define('PAGE', 'password_change_request');
    include('include/header.php');
    include('../dbConnection.php');
    session_start();

    if($_SESSION['is_login']){
        $rEmail = $_SESSION['rEmail'];
    }else{
        echo "<script>location.href = 'user_login.php'</script>";
    }
    
     // update info
    $rEmail = $_SESSION['rEmail'];
    if(isset($_REQUEST['passupdate'])){
        if($_REQUEST['rPassword'] == ""){
            $msg = '<div class="alert text-center alert-warning col-sm-6 mt-2" role="alert">Fill All Fields</div>';
        }else{
            $rPassword = $_REQUEST['rPassword'];
            $sql = "UPDATE requesterlogin_tb SET r_password = '$rPassword' WHERE r_email = '$rEmail'";

            if($conn->query($sql) == TRUE){
                $msg = '<div class="alert text-center alert-success col-sm-6 mt-2" role="alert">Password Change Successfully</div>';
            }else{
                $msg = '<div class="alert text-center alert-danger col-sm-6 mt-2" role="alert">Updating Failed</div>';
            }
        }
    }
?>
<!---------------Start Change Password---------------------->
<div class="col-sm-9 col-md-10 mt-5">
                <form action="" method="POST" class="mt-5 mx-5">
                    <div class="form-group m-1">
                        <lable for="rEmail">Email</lable>
                        <input type="email" id="inputEmail" class="form-control" value="<?php echo "$rEmail"; ?>" readonly>
                    </div>
                    <div class="form-group m-1">
                        <lable for="inputpassword">New Password</lable>
                        <input type="password" id="inputpassword" class="form-control" placeholder="new password" name="rPassword">
                    </div>
                    <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
                    <button type="reset" class="btn btn-secondary mt-4">Reset</button>
                    <?php if(isset($msg)){echo $msg;} ?>
                </form>
            </div>
<!------------------------- End Change Password------------------------>            

<?php 
    include('include/footer.php');
?> 