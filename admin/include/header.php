
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------ link font awosom -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!------------ link google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet"> 
    <!------------link Bootstarp css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo TITLE ?></title>
</head>
<body>
    <!--------------- Start Top Navbar------------------>
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">OCSRC</a></nav>
    <!--------------------------- End Top Navbar ------------>

    <!--------------------- Start Container-------------------->
    <div class="container-fluid" style="margin-top:40px">
        <!------------------ Start row----------------->
        <div class="row">
            <!------------------------- Start side navbar (1st column)----------->
            <nav class="col-sm-2 bg-light sidebar py-5">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="dashboard.php" class="nav-link  <?php if(PAGE == 'dashboard'){echo 'active';} ?>"><i class="fa fa-tachometer">Dashboard</i></a></li>
                        <li class="nav-item"><a href="work_order.php" class="nav-link <?php if(PAGE == 'work_order'){echo 'active';} ?>"><i class="fa fa-shopping-cart">Work Order</i></a></li>
                        <li class="nav-item"><a href="requests.php" class="nav-link <?php if(PAGE == 'requests'){echo 'active';} ?>"><i class="fa fa-pencil">Requests</i></a></li>
                        <li class="nav-item"><a href="assets.php" class="nav-link <?php if(PAGE == 'assets'){echo 'active';} ?>"><i class="fa fa-book">Assets</i></a></li>
                        <li class="nav-item"><a href="technician.php" class="nav-link <?php if(PAGE == 'technician'){echo 'active';} ?>"><i class="fa fa-wrench">Technician</i></a></li>
                        <li class="nav-item"><a href="requester.php" class="nav-link <?php if(PAGE == 'requester'){echo 'active';} ?>"><i class="fa fa-user">Requester</i></a></li>
                        <li class="nav-item"><a href="sell_report.php" class="nav-link <?php if(PAGE == 'sell_report'){echo 'active';} ?>"><i class="fas fa-table">Sell Report</i></a></li>
                        <li class="nav-item"><a href="work_report.php" class="nav-link <?php if(PAGE == 'work_report'){echo 'active';} ?>"><i class="fas fa-table">Work Report</i></a></li>
                        <li class="nav-item"><a href="change_password.php" class="nav-link <?php if(PAGE == 'change_password'){echo 'active';} ?>"><i class="fas fa-key">Change Password</i></a></li>
                        <li class="nav-item"><a href="../logout.php" class="nav-link"><i class="fas fa-sign-out-alt">Log Out</i></a></li>
                    </ul>
                </div>
            </nav>
            <!----------------------- End side navbar (1st column) --------------->
