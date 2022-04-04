<?php
    session_start();
    if(isset($_SESSION['is_adminlogin'])){
        $aEmail = $_SESSION['aEmail'];
    }else{
        echo "<script>location.href = 'login.php'</script>";
    }

    if(isset($_REQUEST['view'])){
    $sql = "SELECT request_id,request_info,request_desc,requester_name,requester_add1,requester_add2,requester_city,requester_state,requester_zip,requester_email,requester_mobile,request_date FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
    $data = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($data);
    }

    if(isset($_REQUEST['close'])){
        $sql = "DELETE FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
        $data = mysqli_query($conn,$sql);

        if($data == TRUE){
            echo '<meta http-equiv="refresh" content= "0;URL=?closed" />';
        }else{
           echo '<div class="aleart bg-aleart bg-primary p-1 mt-2">Unable to Delet</div>';
        }
    }

    if(isset($_REQUEST['assign'])){
        if(($_REQUEST['request_id'] == "") || ($_REQUEST['request_info'] == "") || ($_REQUEST['request_desc'] == "") || ($_REQUEST['requester_name'] == "") || ($_REQUEST['requester_add1'] == "") || ($_REQUEST['requester_add2'] == "") || ($_REQUEST['requester_city'] == "") || ($_REQUEST['requester_state'] == "") || ($_REQUEST['requester_zip'] == "") || ($_REQUEST['requester_email'] == "") || ($_REQUEST['requester_mobile'] == "") || ($_REQUEST['assign_tech'] == "") || ($_REQUEST['input_date'] == "")){
            $msg = '<div class="alert text-center alert-warning col-sm-6 mt-2" role="alert">Fill All Fields</div>';
        }else{
            $rid = $_REQUEST['request_id'];
            $rinfo = $_REQUEST['request_info'];
            $rdesc = $_REQUEST['request_desc'];
            $rname = $_REQUEST['requester_name'];
            $radd1 = $_REQUEST['requester_add1'];
            $radd2 = $_REQUEST['requester_add2'];
            $rcity = $_REQUEST['requester_city'];
            $rstate =  $_REQUEST['requester_state'];
            $rzip = $_REQUEST['requester_zip'];
            $remail = $_REQUEST['requester_email'];
            $rmobile = $_REQUEST['requester_mobile'];
            $assigntech = $_REQUEST['assign_tech'];
            $assigndate = $_REQUEST['input_date'];

            $sql = "INSERT INTO assign_work_tb(request_id,request_info,request_desc,requester_name,requester_add1,requester_add2,requester_city,requester_state,requester_zip,requester_email,requester_mobile,assign_tech,input_date) VALUE('$rid',' $rinfo','$rdesc','$rname','$radd1','$radd2','$rcity','$rstate','$rzip','$remail','$rmobile','$assigntech','$assigndate')";

            if($conn->query($sql) == TRUE){
                $msg = '<div class="alert text-center alert-success col-sm-6 mt-2" role="alert">Work Assign Successfully!</div>';
            }else{
                $msg = '<div class="alert text-center alert-danger col-sm-6 mt-2" role="alert">Work Assign Failed!</div>';
            }
        }
    }
?>

<div class="col-sm-5 mt-5 jumbotron">
    <form action="" class="mt-3 mx-3" method="POST">
        <h5 class="text-center">Assign Work Order Request</h5>
        <div class="form-group">
            <label for="request_id">Request Id</label>
            <input type="text" class="form-control" id="request_id" name="request_id" value="<?php if(isset($_REQUEST['id'])) echo $result['request_id']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="request_info">Request Info</label>
            <input type="text" class="form-control" id="request_info" name="request_info" value="<?php if(isset($_REQUEST['id'])) echo $result['request_info']; ?>">
        </div>
        <div class="form-group">
            <label for="request_desc">Request Decscription</label>
            <input type="text" class="form-control" id="request_desc" name="request_desc" value="<?php if(isset($_REQUEST['id'])) echo $result['request_desc']; ?>">
        </div>
        <div class="form-group">
            <label for="requester_name">Requester Name</label>
            <input type="text" class="form-control" id="requester_name" name="requester_name" value="<?php if(isset($_REQUEST['id'])) echo $result['requester_name']; ?>">
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="requester_add1">Requester Address 1</label>
                <input type="text" class="form-control" id="requester_add1" name="requester_add1" value="<?php if(isset($_REQUEST['id'])) echo $result['requester_add1']; ?>">
            </div>
            <div class="form-group col-sm-6">
                <label for="requester_add2">Requester Address 2</label>
                <input type="text" class="form-control" id="requester_add2" name="requester_add2" value="<?php if(isset($_REQUEST['id'])) echo $result['requester_add2']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label for="requester_city">Requester City</label>
                <input type="text" class="form-control" id="requester_city" name="requester_city" value="<?php if(isset($_REQUEST['id'])) echo $result['requester_city']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="requester_state">Requester State</label>
                <input type="text" class="form-control" id="requester_state" name="requester_state" value="<?php if(isset($_REQUEST['id'])) echo $result['requester_state']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="requester_zip">Requester Zip</label>
                <input type="text" class="form-control" id="requester_zip" name="requester_zip" value="<?php if(isset($_REQUEST['id'])) echo $result['requester_zip']; ?>" onkeypress="isInputNumber(event)">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-8">
                <label for="requester_email">Email</label>
                <input type="email" class="form-control" id="requester_email" name="requester_email" value="<?php if(isset($_REQUEST['id'])) echo $result['requester_email']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="requester_mobile">Requester Mobile</label>
                <input type="text" class="form-control" id="requester_mobile" name="requester_mobile" value="<?php if(isset($_REQUEST['id'])) echo $result['requester_mobile']; ?>" onkeypress="isInputNumber(event)">
            </div>
        </div>
        <div class="row">
        <div class="form-group col-sm-6">
                <label for="assign_tech">Assign to Technician</label>
                <input type="text" class="form-control" id="assign_tech" name="assign_tech">
            </div>
            <div class="form-group col-sm-6">
                <label for="input_date">Date</label>
                <input type="date" class="form-control" id="input_date" name="input_date">
            </div>
        </div>
        <div class="text-end mt-2">
            <input type="submit" class="btn btn-success mr-2" value="Assign" name="assign">
            <input type="reset" class="btn btn-secondary" value="Reset" name="reset">
        </div>
        <?php if(isset($msg)){ echo $msg;} ?>
    </form>
</div>

<script>
    function isInputNumber(evt){
        var ch = String.formCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script>