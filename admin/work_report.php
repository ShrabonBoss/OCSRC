<?php
    define('TITLE', 'Work Report');
    define('PAGE', 'work_report');
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