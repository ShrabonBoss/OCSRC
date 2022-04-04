<?php 
    include('../dbConnection.php');
    session_start();

    if(!isset( $_SESSION['is_adminlogin'])){


        if(isset($_REQUEST['aEmail'])){
            $aEmail = mysqli_real_escape_string($conn, trim($_REQUEST['aEmail']));
            $aPassword = mysqli_real_escape_string($conn, trim($_REQUEST['aPassword']));

            $sql = "SELECT a_email, a_password FROM admin_login_tb WHERE a_email = '".$aEmail."' AND a_password = '".$aPassword."' limit 1";
            $result = $conn->query($sql);

            if($result->num_rows == 1){
                $_SESSION['is_adminlogin'] = true;
                $_SESSION['aEmail'] = $aEmail;
                echo "<script> location.href = 'dashboard.php';</script>";
                exit;
            }else{
                $msg = '<div class="alert alert-warning mt-3">Enter valid email and password</div>';
            }
        }
    }else{
        echo "<script> location.href = 'dashboard.php';</script>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <!------ link font awosom -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!------------ link google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet"> 
    <!------------link Bootstarp css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!----------link custom css-->
    <style>
    .custom-margin{
        margin-top: 8vh;
    }
    </style>
</head>
<body>
    <!------------- Start Form Heading --------------->
    <div class="mt-5 mb-3 text-center" style="font-size:30px">
        <i class="fas fa-stethoscope" ></i>
        <span>Online Computer Sales and Repair Center</span>
    </div>
    <p class="text-center">
        <i class="fas fa-user-secret text-danger fa-8x p-2"></i>Admin Area
    </p>
    <!--------------- End Form Heading ----------------->
    <!--------------------- Start Form ------------------>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5 custom-margin">
            <div class="col-sm-6 col-md-4">
                <form action="" class="shadow-lg p-4" method="POST">
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <lable for="email" class="font-weight-bold pl-2">Email</lable>
                        <input type="email" class="form-control" placeholder="Email" name="aEmail">
                        <small class="form-text">We'll naver share you email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <lable for="pass" class="font-weight-bold pl-2">Password</lable>
                        <input type="password" class="form-control" placeholder="Password" name="aPassword">
                    </div>
                    <button type="submit" class="btn btn-outline-danger mt-5 shadow-sm font-weight-bold" style="width:100%">Login</button>
                    <?php if(isset($msg)){echo $msg;} ?>
                </form>
                <div class="text-center"><a href="../main.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home</a></div>
            </div>
        </div>
    </div>
    <!---------------------------End Form --------------->

        <!------------link Bootstarp js-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>