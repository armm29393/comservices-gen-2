<?php
ob_start();
include_once('template.php');
require_once('connect.php');
if (!isset($_SESSION['regstaff_name']) || !isset($_SESSION['regstaff_pass'])) {
    header('location:regis-staff-1.php');
} else {
    $regstaff_name = $_SESSION['regstaff_name'];
    $regstaff_pass = $_SESSION['regstaff_pass'];
    $inputFName = mb_convert_encoding($_POST['inputFName'], "UTF-8");
    $inputLName = mb_convert_encoding($_POST['inputLName'], "UTF-8");
    $inputCitizen = $_POST['inputCitizen'];
    $inputAddr = mb_convert_encoding($_POST['inputAddr'], "UTF-8");
    $inputTel = $_POST['inputTel'];
    $eduSelect = mb_convert_encoding($_POST['eduSelect'], "UTF-8");
    $positionSelect = $conn->query("SELECT `ID_position` FROM `position` WHERE `Name_position`='".$_POST['positionSelect']."'")->fetch_array(MYSQLI_NUM);
}
if (isset($_POST['submit'])) {
    // if (strlen($inputCitizen)!=13 || is_numeric($inputCitizen)) {
    //     die('เลขบัตรประชาชนไม่ถูกต้อง!');
    // } else {
    //     $thid = explode('',$inputCitizen);
    //     print_r($thid);
    // }
    $sql = sprintf(
        "
        INSERT INTO `emp`
        (`emp_id`, `username`, `password`, `emp_name`, `emp_surname`, `citizen_id`, `address`, `tel`, `education`, `ID_position`)
        VALUES
        (NULL, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
        ",
        $conn->real_escape_string($regstaff_name),   // %s ตัวที่ 1
        $conn->real_escape_string(base64_encode($regstaff_pass)),   // %s ตัวที่ 2
        $conn->real_escape_string($inputFName), // %s ตัวที่ 3
        $conn->real_escape_string($inputLName),
        $conn->real_escape_string($inputCitizen),
        $conn->real_escape_string($inputAddr),
        $conn->real_escape_string($inputTel),
        $conn->real_escape_string($eduSelect),
        $positionSelect[0]
    );
    echo $sql;
    if (!mysqli_query($conn,$sql)) {
        echo("Error description: " . mysqli_error($conn));
    } else {
        unset($_SESSION['regstaff_name']);
        unset($_SESSION['regstaff_pass']);
        mysqli_close($conn);
        header('location:regis-success.php');
    }
}
ob_end_flush();
?>
<script>
    function checkID(id){
        if(id.length != 13) return false;
        for(i=0, sum=0; i < 12; i++)
        sum += parseFloat(id.charAt(i))*(13-i);
        if((11-sum%11)%10!=parseFloat(id.charAt(12))) return false;
        return true;
    }
    function checkForm(){
        if(!checkID(document.form1.txtID.value))
            alert('รหัสประชาชนไม่ถูกต้อง');
        else
            alert('รหัสประชาชนถูกต้อง เชิญผ่านได้');
    }
</script>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-secondary">
                        <form class="form" role="form" autocomplete="off" action="" method="post">
                            <div class="card-header">
                                <h4 class="mb-0 my-2">ลงทะเบียนพนักงาน 2/2</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group text-muted border border-danger"> <!-- user-pass label -->
                                    <div class="form-label disabled">
                                        <label>Username: <?php
                                        echo $_SESSION['regstaff_name'].' // for test only please comment this!';
                                        ?></label>
                                    </div>
                                    <div class="form-label">
                                        <label>Password: <?php
                                        echo $_SESSION['regstaff_pass'].'<br>Password Encoded -> ';
                                        echo base64_encode($_SESSION['regstaff_pass']);
                                         ?></label>
                                    </div>
                                </div>
                                <div class="form-group"> <!-- fname -->
                                    <label for="inputFName">ชื่อจริง</label>
                                    <input type="text" class="form-control" name="inputFName" placeholder="ชื่อจริง" required>
                                </div>
                                <div class="form-group"> <!-- lname -->
                                    <label for="inputLName">นามสกุล</label>
                                    <input type="text" class="form-control" name="inputLName" placeholder="นามสกุล" required>
                                </div>
                                <div class="form-group"> <!-- th_id -->
                                    <label for="inputCitizen">เลขบัตรประจำตัวประชาชน</label>
                                    <input type="text" class="form-control" name="inputCitizen" placeholder="เลขบัตรประจำตัวประชาชน" maxlength="13" required>
                                </div>
                                <div class="form-group"> <!-- address -->
                                    <label for="inputAddr">ที่อยู่</label>
                                    <textarea type="text" class="form-control" name="inputAddr" placeholder="ที่อยู่" rows="3" required></textarea>
                                </div>
                                <div class="form-group"> <!-- tel -->
                                    <label for="inputTel">เบอร์โทร</label>
                                    <input type="text" class="form-control" name="inputTel" placeholder="เบอร์โทร" required></input>
                                </div>
                                <div class="form-group"> <!-- academic -->
                                    <label for="eduSelect">วุฒิการศึกษา</label>
                                    <select class="form-control" name="eduSelect">
                                        <option>ม.6</option>
                                        <option>ป.ตรี</option>
                                        <option>ป.โท</option>
                                        <option>ป.เอก</option>
                                    </select>
                                </div>
                                <div class="form-group"> <!-- skill -->
                                    <label for="positionSelect">ตำแหน่งงาน</label>
                                    <select class="form-control" name="positionSelect">
                                        <?php
                                        $result = $conn->query("SELECT `Name_position` FROM `position`");
                                        while ($row = mysqli_fetch_assoc($result)) {
                                           echo "<option>".$row['Name_position']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="form-group d-flex justify-content-end my-auto">
                                    <button type="submit" name="submit" class="btn btn-success btn-lg">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
