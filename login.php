<?php
    session_start();
    require("connect.php");
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
        nav {
            font-family: 'Kanit', sans-serif;
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
            } else { //echo "Username or Password is invalid";?>
                <div class="alert alert-danger">
                    <strong>โอ๊ะโอ..</strong><br>Username or Password is invalid
                </div>
                <div class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>One fine body&hellip;</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <script>
                    BootstrapDialog.show({
                        type: 'TYPE_DANGER',
                        title: 'Say-hello dialog',
                        message: 'Hi Apple!'
                    });
                </script>
                <?php
            }
        }
    ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <form action="" method="POST">
                        <div class="card-header">
                            Login to your Account!
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-md-4 form-label my-auto">Username</label>
                                <div class="col-sm-9 col-xs-3">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-md-4 form-label my-auto">Password</label>
                                <div class="col-sm-9 col-xs-3">
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