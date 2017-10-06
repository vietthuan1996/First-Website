<?php
session_start();

include('../ketnoi/connectmuscle.php');
include('quantri.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="giaodien.css" rel="stylesheet" type="text/css" />
</head>
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
    <td><form id="form1" name="form1" method="post" action="">
      <table width="991" border="1">
        <tr>
          <td colspan="6">Danh Sách Loại Sản Phẩm</td>
          </tr>
        <tr>
          <td>Mã Loại</td>
          <td>Tên Loại</td>
          <td>Thứ Tự</td>
          <td>Ẩn Hiện</td>
          <td>Mã Chủng Loại</td>
          <td><a href="themLoaisp.php">Thêm</a></td>
        </tr>
        <tr>
        <?php
		$loaisp = DanhSachLoaiSP();
		while($row_loaisp = mysql_fetch_array($loaisp) )
		{
			ob_start();
			
		 ?>
          <td>{idLoai}</td>
          <td>{tenLoai}</td>
          <td>{ThuTu}</td>
          <td>{AnHien}</td>
          <td>{tenCL}</td>
          <td><a href="suaLoaisp.php?idLoai={idLoai}">Sửa </a>
          - <a href="xoaLoaisp.php?idLoai={idLoai}" onclick="return confirm('Bạn có muốn xóa không ?? ')">Xóa </a></td>
          
        </tr>
        <?php
		   $chua = ob_get_clean();
		   $chua = str_replace("{idLoai}",$row_loaisp["idLoai"],$chua);
		   $chua = str_replace("{tenLoai}",$row_loaisp["tenLoai"],$chua);
		   $chua = str_replace("{ThuTu}",$row_loaisp["ThuTu"],$chua);
		   $chua = str_replace("{AnHien}",$row_loaisp["AnHien"],$chua);
		   $chua = str_replace("{tenCL}",$row_loaisp["tenCL"],$chua);
		   echo $chua;
		}
		   ?>
      </table>
    </form></td>
  </tr>
</table>
    <a href="dangxuatadmin.php">Click vào đây để đăng xuất</a>
</div>
</div>
</body>
</html>
