<?php
    session_start();
    require_once('connect.php');
    error_reporting(~E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Itim" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <style>
        body{background: #eee url(http://subtlepatterns.com/patterns/sativa.png);height: 100%}
        nav {
            font-family: 'Kanit', sans-serif;
        }
        .thfont {
            font-family: 'Itim', cursive;
        }
        .bg-lblue {
            background-color: #3582ff;
        }
        .card-header {
            font-family: 'Itim', cursive;
        }
        .card-body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-lblue">
        <div class="container">
            <a class="navbar-brand text-light" href="index.php"><i class="fas fa-bug"></i> P&W Computer Services</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="test1.php">ค่าบริการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="test2.php">ติดต่อเรา</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
<?php
    if (isset($_SESSION['username'])) {
        echo '<li class="nav-item dropdown">'.
        '<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
        'ยินดีต้อนรับ คุณ '.$_SESSION['emp_name'].'</a>'.
        '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
        $sql = "SELECT `Name_position` FROM `position` WHERE `ID_position` = '".$_SESSION['ID_position']."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        // print_r($row);

        if($row['Name_position'] == 'Receptionist') { // พนักงานขาย
            echo '<a class="dropdown-item" href="#">พนักงานหน้าร้าน</a>';
        } elseif($row['Name_position'] == 'Technician') { // ช่างซ่อม
            echo '<a class="dropdown-item" href="repair-form.php">จัดการข้อมูลการซ่อม</a>';
        } elseif($row['Name_position'] == 'Manager') { // ผู้จัดการ
            echo '<a class="dropdown-item" href="admin.php">Admin Check Status</a>'
            .'<a class="dropdown-item" href="regis-staff-1.php">ลงทะเบียน Satff</a>'
            .'<a class="dropdown-item" href="manage-user.php">จัดการข้อมูล Staff</a>'
            .'<a class="dropdown-item disabled" href="#">Delete</a>';
        }
        echo '<div class="dropdown-divider"></div>'
        .'<a class="dropdown-item bg-danger text-light" href="logout.php">'
        .'<i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>'
        .'</div></li>';
    } else {
       echo '<li class="nav-item"><a class="nav-link text-light" href="login.php">Login</a></li>';
    }
?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- CODE HERE -->

    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
