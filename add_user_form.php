<?php include("./_header.php"); ?>

<form>
 <fieldset>
    <legend>เพิ่มผู้ใช้</legend>

  <label>email</label>
  <input type="text" placeholder="Type something">
<br>   
   <label>password</label>
  <input type="text" placeholder="Type something">
   <br>
  <label>ชื่อ</label>
  <input type="text" placeholder="Type something">
   <br>
  <label>นามสกุล</label>
  <input type="text" placeholder="Type something"> 
<br>
  <label>หมายเลขโทรศัพท์</label>
    <input type="text" placeholder="Type something"> 
  <br>
<label>ตำแหน่ง</label>
  <select>
  <option>เจ้าหน้าที่ฝ่ายครุภัณฑ์</option>
  <option>เจ้าหน้าที่ฝ่ายซ่อมบำรุง</option>
  <option>คณะกรรมการตรวจสอบครุภัณฑ์</option>
  <option>หัวหน้าฝ่ายครุภัณฑ์</option>
 </select>
      <br>
  <button type="submit" class="btn">Save</button>
  <button type="reset" class="btn">Clear</button>
  <button type="reset" class="btn">Cancel</button>
 </fieldset>
  </form>

<?php include("./_footer.php"); ?>