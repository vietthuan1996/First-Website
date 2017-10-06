<?php
include('../ketnoi/connectmuscle.php');
include('quantri.php');
 ?>
 <?php 
 	if(isset($_POST['btnthem']))
	{
	    $idCL = $_POST["idCL"];
		$tenCL = $_POST['tenCL'];
		$ThuTu = $_POST['ThuTu'];
		settype($ThuTu,"int");
		$AnHien = $_POST['AnHien'];
		settype($AnHien,"int");
		$sql = "insert into chungloaisp values('$idCL','$tenCL','$ThuTu','$AnHien')";
		mysql_query($sql);
		header("location:listchungloai.php");
	}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="giaodien.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<table style="margin:auto" width="500px" border="1">
  <tr>
    <td id="tieude">Trang Quản Trị</td>
  </tr>
  <tr>
    <td id="menu"><?php include('menu.php') ?></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="957" border="1">
        <tr>
          <td colspan="2">Thêm Chủng Loại</td>
          </tr>
          <tr>
              <td width="382">Mã Chủng Loại</td>
              <td width="559"><label for="idCL"></label>
                  <input type="text" name="idCL" id="idCL" /></td>
          </tr>
        <tr>
          <td>Tên Chủng Loại</td>
          <td><label for="tenCL"></label>
            <input type="text" name="tenCL" id="tenCL" /></td>
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
              Hien</label>
            <br />
            <label>
              <input type="radio" name="AnHien" value="0" id="AnHien_1" />
              An</label>
            <br />
          </p></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="btnthem" id="btnthem" value="Thêm" /></td>
          </tr>
        </table>
    </form></td>
  </tr>
</table>
    <a href="dangxuatadmin.php">Click vào đây để đăng xuất</a>
</body>
</html>
