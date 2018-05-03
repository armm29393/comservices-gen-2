<?php
    require_once('session.php');
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
            <a class="navbar-brand text-light" href="index.php">P&W Computer Services</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="test1.php">ค่าบริการ</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="test2.php">ติดต่อเรา</a>
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
                            <a class="dropdown-item" href="admin.php">ผู้จัดการ - Admin</a>
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
    <!-- CODE HERE -->
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>