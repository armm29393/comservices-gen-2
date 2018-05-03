<?php
    require_once('session.php');
    include_once('template.php');
    if($login_uid!=3){
?>
        <h1 class="text-danger text-center">Access Denied! For Admin ONLY!!</h1>
<?php   } else {  ?>
        <h1 class="text-success text-center">Admin Access!!</h1>
<?php
    }
?>