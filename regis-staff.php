<?php
    include_once('template.php');
?>
<script language="javascript">
function CheckNum(){
	if (event.keyCode < 48 || event.keyCode > 57){
        event.returnValue = false;
    }
}
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
function autoTab(obj,typeCheck){
    /* กำหนดรูปแบบข้อความโดยให้ _ แทนค่าอะไรก็ได้ แล้วตามด้วยเครื่องหมาย
    หรือสัญลักษณ์ที่ใช้แบ่ง เช่นกำหนดเป็น  รูปแบบเลขที่บัตรประชาชน
    4-2215-54125-6-12 ก็สามารถกำหนดเป็น  _-____-_____-_-__
    รูปแบบเบอร์โทรศัพท์ 08-4521-6521 กำหนดเป็น __-____-____
    หรือกำหนดเวลาเช่น 12:45:30 กำหนดเป็น __:__:__
    ตัวอย่างข้างล่างเป็นการกำหนดรูปแบบเลขบัตรประชาชน
    */
        if(typeCheck==1){
            var pattern=new String("_-____-_____-_-__"); // กำหนดรูปแบบในนี้
            var pattern_ex=new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
        }else{
            var pattern=new String("___-___-____"); // กำหนดรูปแบบในนี้
            var pattern_ex=new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
        }
        var returnText=new String("");
        var obj_l=obj.value.length;
        var obj_l2=obj_l-1;
        for(i=0;i<pattern.length;i++){
            if(obj_l2==i && pattern.charAt(i+1)==pattern_ex){
                returnText+=obj.value+pattern_ex;
                obj.value=returnText;
            }
        }
        if(obj_l>=pattern.length){
            obj.value=obj.value.substr(0,pattern.length);
        }
}
</script>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-secondary">
                        <div class="card-header">
                            <h4 class="mb-0 my-2">ลงทะเบียนพนักงาน</h4>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="inputFName">ชื่อจริง</label>
                                    <input type="text" class="form-control" id="inputFName" placeholder="ชื่อจริง">
                                </div>
                                <div class="form-group">
                                    <label for="inputLName">นามสกุล</label>
                                    <input type="text" class="form-control" id="inputLName" placeholder="นามสกุล">
                                </div>
                                <div class="form-group">
                                    <label for="inputCitizen">เลขบัตรประจำตัวประชาชน</label>
                                    <input type="text" class="form-control" id="inputCitizen" placeholder="เลขบัตรประจำตัวประชาชน" maxlength="13" onkeypress="CheckNum()" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddr">ที่อยู่</label>
                                    <textarea type="text" class="form-control" id="inputAddr" placeholder="ที่อยู่" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputTel">เบอร์โทร</label>
                                    <input type="text" class="form-control" id="inputTel" placeholder="เบอร์โทร" onkeyup="autoTab(this,2)" required></input>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right">Register</button>
                                </div>
                            </form>
                        </div>
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
