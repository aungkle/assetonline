<?php include("./_header.php"); ?>

<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="inputText">email</label>
    <div class="controls">
      <input type="text" id="inputText" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputText">password</label>
    <div class="controls">
      <input type="text" id="inputText" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputText">ชื่อ</label>
    <div class="controls">
      <input type="text" id="inputText" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputText">นามสกุล</label>
    <div class="controls">
      <input type="text" id="inputText" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputText">หมายเลขโทรศัพท์</label>
    <div class="controls">
      <input type="text" id="inputText" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputText">ตำแหน่ง</label>
    <div class="controls">
      <select>
        <option>เจ้าหน้าที่ฝ่ายครุภัณฑ์</option>
        <option>เจ้าหน้าที่ฝ่ายซ่อมบำรุง</option>
        <option>คณะกรรมการตรวจสอบครุภัณฑ์</option>
        <option>หัวหน้าฝ่ายครุภัณฑ์</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">บันทึก</button>
      <button type="reset" class="btn">ล้างข้อมูล</button>
      <button type="reset" class="btn">ยกเลิก</button>
    </div>
  </div>
</form>

<?php include("./_footer.php"); ?>