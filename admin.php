<?php
    require_once('session.php');
    include_once('template.php');
    if($login_uid!=3){
        echo '<h1 class="text-danger text-center">Access Denied!<br>For Admin ONLY!!</h1>';
    } else {
        echo '<h1 class="text-success text-center">Admin Access!!</h1>';
    }
?>