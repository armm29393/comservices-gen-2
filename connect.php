<?php
    $conn = mysqli_connect('localhost','root','armtechhitz2018','project');

    if ($conn->connect_errno){
        die("Connection failed!");
    } else {
        #echo "OK!";
    }
?>