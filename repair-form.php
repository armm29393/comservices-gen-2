<?php
    include_once('template.php');
    function addbut(){
        echo '<td><button type="button" class="btn btn-outline-success btn-sm fas fa-edit"></button></td>'
        ,'<td><button type="button" class="btn btn-outline-danger btn-sm fas fa-trash-alt"></button></td>';
    }
?>
<style>
    th {
        white-space: nowrap;
    }
</style>
<br>
<h2 class="text-info text-center thfont">แบบฟอร์มการซ่อม</h2>
<div class="col-12 mx-auto">
    <table class="table table-sm table-responsive">
      <thead>
        <tr>
          <th scope="col">Wk_ID</th>
          <th scope="col">รหัสพนักงาน</th>
          <th scope="col">รหัสลูกค้า</th>
          <th scope="col">รหัสอุปกรณ์</th>
          <th scope="col">อาการชำรุด</th>
          <th scope="col">วันที่รับซ่อม</th>
          <th scope="col">วันที่ส่งคืน</th>
          <th scope="col">สถานะการซ่อม</th>
          <th scope="col">ราคาการซ่อม</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>0011</td>
          <td>cXXX</td>
          <td>dXXX</td>
          <td>HDD เสีย</td>
          <td>25/04/2018</td>
          <td>07/05/2018</td>
          <td>อยู่ในระหว่างการซ่อม</td>
          <td>1,500</td>
          <?php addbut(); ?>
        </tr>
        <!-- CODE HERE! -->
        <tr>
          <th scope="row">2</th>
          <td>0030</td>
          <td>cXXX</td>
          <td>dXXX</td>
          <td>ลง Windows</td>
          <td>25/05/2018</td>
          <td>05/05/2018</td>
          <td>เรียบร้อย!</td>
          <td>300</td>
          <?php addbut(); ?>
        </tr>
      </tbody>
    </table>
</div>
