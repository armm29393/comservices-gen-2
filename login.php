<?php
    require_once('connect.php');
    session_start();
    // if(isset($_POST['submit'])){header("location:index.php");}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <style>
        .nav {
            font-family: 'Kanit', sans-serif;
        }
        .vcenter {
            display: inline-block;
            vertical-align: middle;
            float: none;
        }
        .vertical-align {
            display: flex;
            align-items: center;
        }
    </style>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
        if (isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $conn->real_escape_string($_POST['password']);
            $sql = "SELECT * FROM `login` WHERE `username` = '".$username."' AND `password` = '".$password."'";
            $result = $conn->query($sql);
            #print_r($result);
            if($result->num_rows > 0){
                echo $row = $result->fetch_assoc();
                $_SESSION['username'] = $row['username'];
                $_SESSION['ID_position'] = $row['ID_position'];
                header("location:index.php");
            } else { //echo "Username or Password is invalid";
    ?>
                <!-- Wrong password alert -->
                <!-- <div class="col-md-6 mx-auto">
                    <div class="alert alert-danger col-3 mx-auto" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        Enter a valid email address
                    </div>
                </div> -->
                <!-- <div class="container">
                    <div class="row vertical-align"> -->
                    <br><div class="alert alert-danger alert-dismissible col-md-4 mx-auto"> 
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <!-- <strong>โอ๊ะโอ..</strong><br>Username or Password is invalid -->
                        <strong>โอ๊ะโอ..</strong><br>ชื่อบัญชีผู้ใช้งาน หรือ รหัสผ่าน ผิดพลาด!
                        </div>
                    <!-- </div>
                </div> -->
    <?php
            }
        }
    ?><br>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-4 mx-auto vcenter">
                <div class="card">
                    <form action="" method="POST">
                        <div class="card-header">
                            Login to your Account!
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="username" class="col-sm-4 col-form-label my-auto">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-4 col-form-label my-auto">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <input value="Login" type="submit" name="submit" class="btn btn-primary"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>