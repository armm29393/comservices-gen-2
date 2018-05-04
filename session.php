<?php
    error_reporting(~E_NOTICE);
    require_once('connect.php');
    session_start();

    if(!isset($_SESSION['username'])){
        header("location:login.php");
    } else {
        // echo "You are already logged in please log out first if you wish to log in again";
        // header("location:index.php");
        $user_check = $_SESSION['username'];
        // header("location:index.php");
    }

    $ses_sql = mysqli_query($conn,"select * from emp where username = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $login_session = $row['username'];
    $login_uid = $row['ID_position'];
    // echo "Username: $login_session";
?>
