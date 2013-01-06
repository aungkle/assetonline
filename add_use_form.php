<?php include("./_header.php"); ?>

<script>
  $(function(){
    $('#dp3').datepicker();         
  });
</script>

<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="inputText">สถานที่ใช้งาน</label>
    <div class="controls">
      <select></select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputText">ลักษณะการใช้งาน</label>
    <div class="controls">
      <select>
        <option>ใช้งานภายในสำนักคอมพิวเตอร์และเครือข่าย</option>
        <option>ใช้ในการให้บริการการสอน/งานวิชาการ</option>
        <option>ใช้ในการสนับสนุนการบริหารจัดการภายในมหาวิทยาลัย</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputText">วันที่เริ่มใช้งาน</label>
    <div class="controls">
      <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
        <input type="text" value="12-02-2012" readonly>
        <span class="add-on"><i class="icon-th"></i></span>
      </div>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputText">วันที่สิ้นสุดการใช้งาน</label>
    <div class="controls">
      <input type="text" id="datepicker">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputText">ผู้รับผิดชอบดูแล</label>
    <div class="controls">
      <input type="text" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputText">หมายเหตุ</label>
    <div class="controls">
      <textarea rows="3"></textarea>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">บันทึก</button>
    </div>
  </div>
</form>

<?php include("./_footer.php"); ?>
