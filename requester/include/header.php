
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo TITLE ?></title>
    <!------ link font awosom -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!------------ link google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet"> 
    <!------------link Bootstarp css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-------------------Start Top navbar ------------------>
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a href="requesterprofile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">OCSRC</a></nav>
    <!----------------------- End Top navbar -------------->

    <!------------- start container ------------------>
    <div class="container-fluid" style="margin-top:40px">
        <!------------- start row------------------>
        <div class="row">
            <!------------start side bar------------------>
            <nav class="col-sm-2 bg-light sidebar py-5">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="requesterprofile.php" class="nav-link  <?php if(PAGE == 'requesterprofile'){echo 'active';} ?>"><i class="fas fa-user"></i>Profile</a></li>
                        <li class="nav-item"><a href="submit_request.php" class="nav-link <?php if(PAGE == 'submit_request'){echo 'active';} ?>"><i class="fab fa-accessible-icon"></i>Submit Request</a></li>
                        <li class="nav-item"><a href="service_status.php" class="nav-link <?php if(PAGE == 'service_status'){echo 'active';} ?>"><i class="fas fa-align-center"></i>Service Status</a></li>
                        <li class="nav-item"><a href="password_change_request.php" class="nav-link <?php if(PAGE == 'password_change_request'){echo 'active';} ?>"><i class="fas fa-key"></i>Change Password</a></li>
                        <li class="nav-item"><a href="../logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
            <!------------- end side bar------------------>