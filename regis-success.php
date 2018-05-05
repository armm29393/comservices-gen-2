<?php
    ob_start();
    include_once('template.php');
    header('refresh: 2; url=index.php');
    ob_end_flush();
?>
<br><h3 class="text-success text-center thfont">บันทึกลงฐานข้อมูลเรียบร้อย!</h3>
<br><div class="text-muted text-center">Redirecting to Home. . .</div>
