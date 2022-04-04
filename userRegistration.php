<?php  
// connecting with db
include('dbConnection.php');

$userName = $_REQUEST['rName'];
$userEmail = $_REQUEST['rEmail'];
$userPassword = $_REQUEST['rPassword'];

if(isset($_REQUEST['rSignup'])){
    // checking empty field
    if(($_REQUEST["rName"] == "") || ($_REQUEST["rEmail"] == "") || ($_REQUEST["rPassword"] == "")){
        $r_error = '<div class="alert alert-warning mt-2" role="alert">
                         <h6 class="text-center">All Fields are required</h6>
                    </div> ';
    }else { // email already registered
            $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email = '".$_REQUEST['r_Email']."'";
            $result = $conn->query($sql);

            if($result->num_rows==1){
                    $r_error = '<div class="alert alert-warning mt-2" role="alert">
                                    <h6 class="text-center">Email id already Registered</h6>
                                </div> ';
            }else{ // assigning value for new account
                    $sql = "INSERT INTO requesterlogin_tb(r_name,r_email,r_password) VALUES('$userName','$userEmail','$userPassword')";
                    $conn->query($sql);

                    if($conn->query($sql) == TRUE){
                        $r_error = '<div class="alert alert-success mt-2" role="alert">
                                        <h6 class="text-center">Account Successfully Created!</h6>
                                    </div>';
                    }else{
                        $r_error = '<div class="alert alert-danger mt-2" role="alert">
                                        <h6 class="text-center">Unable to Creat Account!</h6>
                                    </div>';
                    }
                }

        
        }
    }

?>

<div class="container pt-5" id="registration">
        <h2 class="text-center">Create an Account</h2>
        <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
                <form action="" class="shadow-lg p-4" method="POST">
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <lable for="name" class="font-weight-bold pl-2">Name</lable>
                        <input type="text" class="form-control" placeholder="Name" name="rName">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <lable for="email" class="font-weight-bold pl-2">Email</lable>
                        <input type="email" class="form-control" placeholder="Email" name="rEmail">
                        <small class="form-text">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <lable for="pass" class="font-weight-bold pl-2">New Password</lable>
                        <input type="password" class="form-control" placeholder="Password" name="rPassword">
                    </div>
                    <button type="submit" style="display:block; width:100%;" class="btn btn-danger mt-5 text-center shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                    <em style="font-size: 10px;">Note - By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy</em>
                    <?php if(isset($r_error)== TRUE){
                        echo $r_error;
                    } ?>
                </form>
            </div>
        </div>
    </div>