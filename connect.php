<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'nSCWfHvr13==');
    define('DB_DATABASE', 'project');
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if ($conn->connect_errno){
        die("Connection failed!");
    } else {
         #echo "OK!";
    }
?>
