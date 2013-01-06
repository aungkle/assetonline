<form>
 <fieldset>
    <legend>การขายครุภัณฑ์</legend>

  <label>วันที่ขาย</label>
 
 
<div class="input-append date" id="dp3" data-date="" data-date-format="dd-mm-yyyy">
  <input class="span2" size="16" type="text" value="">
  <span class="add-on"><i class="icon-th"></i></span>
  </div>
<script>
  $("#dateInput").datepicker();  
</script>
  <br>   
  <label>ราคาขาย</label>
  <input type="text" placeholder="Type something">
  <br>
  <label>ชื่อผู้ซื้อ</label>
  <input type="text" placeholder="Type something">
  <br>
  <label>เลขที่ใบเสร็จ</label>
  <input type="text" placeholder="Type something"> 
  <br>
  <label>หมายเหตุ</label>
  <textarea rows="3"></textarea>

  <br>
  <button type="submit" class="btn">Save</button>
  <button type="reset" class="btn">Clear</button>
  <button type="reset" class="btn">Cancel</button>
 </fieldset>
  </form>
