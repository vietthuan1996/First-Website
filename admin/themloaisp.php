<?php
include('../ketnoi/connectmuscle.php');
include('quantri.php');
 ?>
 <?php
 	if(isset($_POST["btnThem"]))
	{
		$idloai = $_POST["idLoai"];
		$tenloai = $_POST["tenLoai"];
		$thutu = $_POST["ThuTu"];
		settype($thutu,"int");
		$anhien = $_POST["AnHien"];
		settype($anhien,"int");
		$tenchungloai = $_POST["tenCL"];
		 $themloaisp = "INSERT INTO loaisp
		 VALUES('$idloai','$tenloai','$tenchungloai','$thutu','$anhien')";
		mysql_query($themloaisp);
		header("location:listloaisp.php");
	}
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="giaodien.css" rel="stylesheet" type="text/css" /></head>
<body>
<div id="container">
<div >
	<table width="1000px" border="1">
  <tr>
    <td id="tieude">Trang Quản Trị</td>
  </tr>
  <tr>
    <td id="menu"><?php include('menu.php') ?></td>
  </tr>
  <tr>
    <td><form id="formthemloaisp" name="formthemloaisp" method="post" action="">
      <table width="990" border="1">
        <tr>
          <td colspan="2">Thêm Loại Sản Phẩm</td>
        </tr>
        <tr>
          <td>Mã Loại Sản Phẩm</td>
          <td><label for="idLoai"></label>
            <input type="text" name="idLoai" id="idLoai" /></td>
        </tr>
        <tr>
          <td>Tên Loại Sản Phẩm</td>
          <td><label for="tenLoai"></label>
            <input type="text" name="tenLoai" id="tenLoai" /></td>
        </tr>
        <tr>
          <td>Thứ Tự</td>
          <td><label for="ThuTu"></label>
            <input type="text" name="ThuTu" id="ThuTu" /></td>
        </tr>
        <tr>
          <td>Ẩn Hiện</td>
          <td><p>
            <label>
              <input type="radio" name="AnHien" value="1" id="AnHien_0" />
              Hiện</label>
            <br />
            <label>
              <input type="radio" name="AnHien" value="0" id="AnHien_1" />
              Ẩn</label>
            <br />
          </p></td>
        </tr>
        <tr>
          <td>Mã Chủng Loại</td>
          <td><label for="tenCL"></label>
            <select name="tenCL" id="tenCL">
              <?php
		  	$chungloai =  DanhSachChungLoai();
			while($row_chungloai = mysql_fetch_array($chungloai))
			{
		   ?>
              <option value="<?php echo $row_chungloai["idCL"] ?>"><?php echo $row_chungloai["tenCL"] ?></option>
              <?php } ?>
            </select></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="btnThem" id="btnThem" value="Thêm" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
    <a href="dangxuatadmin.php">Click vào đây để đăng xuất</a>
</div>
</div>
</body>
</html>
