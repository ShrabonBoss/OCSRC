<?php
    define('TITLE', 'Request Submit');
    define('PAGE', 'submit_request');
    include('include/header.php');
    include('../dbConnection.php');
    session_start();

    if($_SESSION['is_login']){
        $rEmail = $_SESSION['rEmail'];
    }else{
        echo "<script>location.href = 'user_login.php'</script>";
    }

    if(isset($_REQUEST['submitrequest'])){
        // Checking for empty fields
        if(($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['requestername'] == "") || ($_REQUEST['requesteradd1'] == "") || ($_REQUEST['requesteradd2'] == "") || ($_REQUEST['requestercity'] == "") || ($_REQUEST['requesterstate'] == "") || ($_REQUEST['requesterzip'] == "") || ($_REQUEST['requesteremail'] == "") || ($_REQUEST['requestermobile'] == "") || ($_REQUEST['requestdate'] == "")){
            $msg = '<div class="alert text-center alert-warning col-sm-6 mt-2" role="alert">Fill All Fields</div>';
        } else{
            $rInfo = $_REQUEST['requestinfo'];
            $rDesc = $_REQUEST['requestdesc'];
            $rName = $_REQUEST['requestername'];
            $rAdd1 = $_REQUEST['requesteradd1'];
            $rAdd2 = $_REQUEST['requesteradd2'];
            $rCity = $_REQUEST['requestercity'];
            $rState = $_REQUEST['requesterstate'];
            $rZip = $_REQUEST['requesterzip'];
            $rEmail = $_REQUEST['requesteremail'];
            $rMobile = $_REQUEST['requestermobile'];
            $rDate = $_REQUEST['requestdate'];

            $sql = "INSERT INTO submitrequest_tb(request_info,request_desc,requester_name,requester_add1,requester_add2,requester_city,requester_state,requester_zip,requester_email,requester_mobile,request_date) VALUE('$rInfo','$rDesc','$rName','$rAdd1','$rAdd2','$rCity','$rState','$rZip','$rEmail','$rMobile','$rDate')";

            if($conn->query($sql) == TRUE){
                $msg = '<div class="alert text-center alert-success col-sm-6 mt-2" role="alert">Request Submitted Successfully!</div>';
                $genid = mysqli_insert_id($conn);
                $_SESSION['myid'] = $genid;
                echo "<script>location.href = 'submit_request_success.php'</script>";
            }else{
                $msg = '<div class="alert text-center alert-danger col-sm-6 mt-2" role="alert">Request Submitted Failed!</div>';
            }
            
        }
    }
?>
<!--------------Start Form---------------->
<div class="col-sm-9 col-md-10 mt-5">
    <form class="mx-5" action="" method="POST">
        <div class="form-group mb-2">
            <label for="inputRequestInfo">Request Info</label>
            <input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="requestinfo">
        </div>
        <div class="form-group mb-2">
            <label for="inputRequestDescription">Description</label>
            <input type="text" class="form-control" id="inputRequestDescription" placeholder="write description" name="requestdesc">
        </div>
        <div class="form-group mb-2">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Rahul" name="requestername">
        </div>
        <div class="row">
            <div class="form-group mb-2 col-md-6">
                <label for="inputAddress1">Address Line 1</label>
                <input type="text" class="form-control" id="inputAddress1" placeholder="House No. 123" name="requesteradd1">
            </div>
            <div class="form-group mb-2 col-md-6">
                <label for="inputAddress2">Address Line 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Railway Colony" name="requesteradd2">
            </div>
        </div>

        <div class="row">
            <div class="form-group mb-2 col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Dhaka" name="requestercity">
            </div>
            <div class="form-group mb-2 col-md-4">
                <label for="inputState">State</label>
                <input type="text" class="form-control" id="inputState" placeholder="Motijil" name="requesterstate">
            </div>
            <div class="form-group mb-2 col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" placeholder="1000" name="requesterzip" onkeypress="isInputNumber(event)">
            </div>
        </div>

        <div class="row">
            <div class="form-group mb-2 col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="example@example.com" name="requesteremail">
            </div>
            <div class="form-group mb-2 col-md-2">
                <label for="inputMobile">Mobile</label>
                <input type="text" class="form-control" id="inputMobile" placeholder="012345678999" name="requestermobile" onkeypress="isInputNumber(event)">
            </div>
            <div class="form-group mb-2 col-md-2">
                <label for="inputDate">Date</label>
                <input type="date" class="form-control" id="inputDate" placeholder="dd/mm/yy" name="requestdate">
            </div>
        </div>

        <button type="submit" class="btn btn-danger" name="submitrequest">Submit</button>
        <button type="reset" class="btn btn-secondary" name="submitrequest">Reset</button>

        <?php if(isset($msg)){echo $msg;} ?>

    </form>
</div>
<!------------- End Form ----------------->

<!------------------- Only Number for field------------>
<script>
    function isInputNumber(evt){
        var ch = String.formCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script>

<?php 
    include('include/footer.php');
?> 