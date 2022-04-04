<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "OCSRC";
    $db_port = "80";

    // Creat connection

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name, $db_port);

    // Checking connection
    if($conn->connect_error){
        die("Connection Failed");
    }
    /*else{
        echo"Connect";
    }
    */
?>