<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'nSCWfHvr13==');
    define('DB_DATABASE', 'project');
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if ($conn->connect_errno){
        die("Connection failed!");
    } else {
        // printf("Initial character set: %s\n", $conn->character_set_name());
        /* change character set to utf8 */
        if (!$conn->set_charset("utf8")) {
           printf("Error loading character set utf8: %s\n", $conn->error);
           // exit();
        } else {
           // printf("Current character set: %s\n", $conn->character_set_name());
        }
    }
?>
