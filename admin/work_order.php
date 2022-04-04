<?php
    define('TITLE', 'Work Worder');
    define('PAGE', 'work_order');
    include('../dbConnection.php');
    include('include/header.php');
    session_start();

    if(isset($_SESSION['is_adminlogin'])){
        $aEmail = $_SESSION['aEmail'];
    }else{
        echo "<script>location.href = 'login.php'</script>";
    }
?>


<?php  include('include/footer.php'); ?>