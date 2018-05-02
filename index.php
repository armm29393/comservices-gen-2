<?php session_start();
error_reporting(~E_NOTICE); ?>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand text-light" href="#">P&W Computer Services</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">ค่าบริการ</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">ติดต่อเรา</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['username'])) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ยินดีต้อนรับ คุณ <?php echo $_SESSION['username'] ?>
                        </a>
                        <?php if($_SESSION['ID_position'] == '1') { // พนักงานขาย ?> 
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">พนักงานขาย</a>
                        <?php } elseif($_SESSION['ID_position'] == '2') { // ช่างซ่อม ?>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">ช่างซ่อม</a>
                        <?php } elseif($_SESSION['ID_position'] == '3') { // ผู้จัดการ ?>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">ผู้จัดการ</a>
                            <a class="dropdown-item" href="#">Insert</a>
                            <a class="dropdown-item" href="#">Update</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        <?php } ?>
                        <div class="dropdown-divider"></div> <!-- ตัวคั่น -->
                        <a class="dropdown-item bg-danger text-light" href="logout.php">
                        <i class="oi oi-account-logout"></i> ออกจากระบบ</a>
                        </div>
                    </li>
                <?php } else { ?>
                   <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <!--<div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1444877466744-dc2f2af2b931?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5a1447e8db4c8125f711640db0190032&auto=format&fit=crop&w=1280&h=300&q=80">
            </div>-->
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1456428199391-a3b1cb5e93ab?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=eac7867573ceb666d69ad7bb77d75eaa&auto=format&fit=crop&w=1280&h=300&q=80">
            </div>
            <!--<div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=79f96121806d64f986dc5e5d9308afb1&auto=format&fit=crop&w=1280&h=300&q=80">
            </div>-->
        </div>
        <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>-->
        </a>
    </div>
    
        <div class="jumbotron">
            <div class="container text-center">
                <h3 class="font-weight-normal">Check devices status</h3>
                <p class="lead">Type your fix No. here</p>
                <div class="form-group form-contrpl-lg">
                    <div class="col-10 col-xs-12 col-md-7 mx-auto">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="Ex. HDD0048">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script>
    function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode != 46 && charCode > 31 
				&& (charCode < 48 || charCode > 57))
				return false;
				return true;
			}
    </script>
</body>
</html>