<?php
    include_once('template.php');
    require_once('connect.php');
    if(isset($_SESSION['username'])){header("location:index.php");}
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $conn->real_escape_string($_POST['password']);
        $sql = "SELECT * FROM `emp` WHERE `username` = '".$username."' AND `password` = '".base64_encode($password)."'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $row['username'];
            $_SESSION['emp_name'] = $row['emp_name'];
            $_SESSION['ID_position'] = $row['ID_position'];
            header("location:index.php");
            // print_r($_SESSION);
        } else { //echo "Username or Password is invalid";
            echo '<br><div class="alert alert-danger alert-dismissible col-md-4 mx-auto">'.
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
            '<strong>โอ๊ะโอ..</strong><br>ชื่อบัญชีผู้ใช้งาน หรือ รหัสผ่าน ผิดพลาด!</div>';
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<br><div class="container">
        <div class="row">
            <div class="col-sm-auto col-md-7 col-lg-4 mx-auto">
                <div class="card">
                    <form action="" method="POST">
                        <div class="card-header">
                            <h4 class="mb-0 my-2">Login to your Account!</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="username" class="col-sm-5 col-form-label my-auto">Username</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-5 col-form-label my-auto">Password</label>
                                <div class="col-sm-7">
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
    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
