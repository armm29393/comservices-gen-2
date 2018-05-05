<?php
ob_start();
include_once('template.php');
require_once('session.php');
if($login_uid!=3){
    die('<br><h1 class="text-danger text-center">Access Denied!<br>For Admin ONLY!!</h1>');
} else {
    if (isset($_POST['submit'])){
        $username = $_POST['txtUsername'];
        $p1 = $conn->real_escape_string($_POST['txtPassword']);
        $p2 = $conn->real_escape_string($_POST['txtConPassword']);
        $sql = "SELECT `username` FROM `emp` WHERE `username`='".$username."'";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            echo "username already exists";
        } else {
            if ($p1<>$p2) {
                echo "Password and confirm password does not match";
            } else {
                $_SESSION['regstaff_name'] = $_POST['txtUsername'];
                $_SESSION['regstaff_pass'] = $p1;
                header('location:regis-staff-2.php');
            }
        }
    }
}
ob_end_flush();
?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-secondary">
                        <form class="form" role="form" autocomplete="off" action="" method="post">
                            <div class="card-header">
                                <h4 class="mb-0 my-2">ลงทะเบียนพนักงาน 1/2</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txtUsername">Username</label>
                                    <input type="text" class="form-control" name="txtUsername" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="txtPassword">Password</label>
                                    <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="txtConPassword">Confirm Password</label>
                                    <input type="password" class="form-control" name="txtConPassword" id="txtConPassword" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="form-group d-flex justify-content-end my-auto">
                                    <button type="submit" name="submit" class="btn btn-dark btn-lg">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
