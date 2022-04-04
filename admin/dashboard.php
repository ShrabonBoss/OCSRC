<?php
    define('TITLE', 'dashboard');
    define('PAGE', 'dashboard');
    include('../dbConnection.php');
    include('include/header.php');
    session_start();

    if(isset($_SESSION['is_adminlogin'])){
        $aEmail = $_SESSION['aEmail'];
    }else{
        echo "<script>location.href = 'login.php'</script>";
    }
?>


            <!----------------------- Start (2nd column) --------------->
            <div class="col-sm-9 col-md-10">
                <div class="row text-center mx-5">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                            <div class="card-header">Request Recive</div>
                            <div class="card-body">
                            <h4 class="card-title">43</h4>
                            <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                            <div class="card-header">Assign Work</div>
                            <div class="card-body">
                            <h4 class="card-title">52</h4>
                            <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-info mb-3" style="max-width:18rem;">
                            <div class="card-header">No. of Technician</div>
                            <div class="card-body">
                            <h4 class="card-title">1</h4>
                            <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-5 mt-5 text-center">
                    <p class="bg-dark text-white p-2">List of Requesters</p>
                    <table class="table tablebordered m-2">
                    <thead>
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM requesterlogin_tb";
                        $data = mysqli_query($conn,$sql);
                        $total = mysqli_num_rows($data);
                       if($total > 0){
                            foreach($data as $row){
                                ?>
                                <tr>
                                    <td><?= $row['r_login_id']; ?></td>
                                    <td><?= $row['r_name'];?></td>
                                    <td><?= $row['r_email'];?></td>
                                </tr>
                                <?php
                            }
                       }else{
                            echo "no user registation.";
                       }
                    ?>
                    <tbody>
                    </table>
                </div>
            </div>
            <!----------------------- End (2nd column) --------------->
<?php  include('include/footer.php'); ?>