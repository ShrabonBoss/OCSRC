<?php
  define('TITLE', 'Request Success');
  include('include/header.php');
  include('../dbConnection.php');
  session_start();

  if(isset($_SESSION['is_user_login'])){
    $rEmail = $_SESSION['rEmail'];
}else{
    echo "<script>location.href = 'user_login.php'</script>";
}
  ?>
    <div class="col-sm-9 mb-5">
    <?php 
        $sql = "SELECT request_id, request_info, request_desc, request_date FROM submitrequest_tb";
        $data = mysqli_query($conn,$sql);
        $total = mysqli_num_rows($data) LIMIT 2;
        if($total > 0){
            while($row = mysqli_fetch_assoc($data)){
    ?>
                <div class="col-sm-6">
                    <div class="mt-5 mx-2 text-center">
                        <h4> Request ID:<?= $row['request_id'] ?></h4>
                        <h5>Request Info:<?= $row['request_info'] ?></h5>
                        <h5>Request Decscription:<?= $row['request_desc'] ?></h5>
                        <h5>Requesting Date:<?= $row['request_date'] ?></h5>
                        <input type="submit" class="btn btn-primary" value="Print" name="submit">
             
                    </div>
                </div>
<?php
            }
        }else{
            echo "no request";
        }
    ?>
</div>
<?php

  include('include/footer.php');
?>