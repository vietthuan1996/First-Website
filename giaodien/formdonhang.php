<?php
	if(!isset($_SESSION['username']))
	{
 ?>
 	<script>
		alert("Bạn cần đăng nhập để mua hàng");
		location.href="index.php?pid=2";
    </script>
 <?php }
 ?>
<div id="formthongtindonhang">
 <h1>Thông Tin Khách Hàng</h1>
 <form action="index.php?pid=12" method="post">
 	<table width="500" border="1">
  <tr>
    <td>Ngày Đặt Hàng</td>
    <td><label for="ngaydh"></label>
      <input type="text" readonly name="ngaydh" id="ngaydh" value="<?php echo date("Y-m-d") ?>"></td>
  </tr>
  <tr>
    <td>Ngày Giao Hàng</td>
    <td><label for="ngaygh"></label>
      <input type="text" readonly name="ngaygh" id="ngaygh" value="<?php echo date("Y-m-d",mktime(0,0,0,date('m'),date('d')+5,date('Y'))) ?>"></td>
  </tr>
  <tr>
    <td>Tên Khách Hàng</td>
    <td><label for="tenkh"></label>
      <input type="text" name="tenkh" id="tenkh"></td>
  </tr>
  <tr>
    <td>Địa Chỉ</td>
    <td><label for="diachikh"></label>
      <input type="text" name="diachikh" id="diachikh"></td>
  </tr>
  <tr>
    <td>Ghi Chú</td>
    <td><label for="ghichu"></label>
      <label for="ghichu"></label>
      <textarea name="ghichu" id="ghichu" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Địa chỉ Email</td>
    <td><label for="emailkh"></label>
      <input type="text" name="emailkh" id="emailkh" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btnDat" id="btnDat" value="Đặt Hàng">
      <input type="submit" name="btnReset" id="btnReset" value="Làm Lại"></td>
  </tr>
   </table>

 </form>
</div>