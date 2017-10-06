<?php
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
	<table width="1000px" border="1">
  <tr>
    <td id="tieude">Trang Quản Trị</td>
  </tr>
  <tr>
    <td id="menu"><?php include('menu.php') ?></td>
  </tr>
  <tr>
    <td><table width="990" border="1">
      <tr>
        <td colspan="8">Chi Tiết Đơn Hàng</td>
        </tr>
      <tr>
        <td>Mã Đơn Hàng</td>
        <td>Ngày Đặt Hàng</td>
        <td>Ngày Giao Hàng</td>
        <td>Tên Khách Hàng</td>
        <td>Ghi Chú</td>
        <td>Địa Chỉ</td>
        <td>Email</td>
        <td>Tình Trạng</td>

      </tr>
      <?php 
	  $donhang = DanhSachDonHang();
	  while($row_donhang = mysql_fetch_array($donhang))
      {
	    ob_start();
	  ?>
      <tr>
        <td height="28">{idDonHang}</td>
        <td>{ngayDH}</td>
        <td>{ngayGH}</td>
        <td>{tenKH}</td>
        <td>{ghiChu}</td>
        <td>{diaChi}</td>
        <td>{email}</td>
          <td>
              {TinhTrang}
              </td>
        <td> <a href="chitietdonhang.php?idDonHang={idDonHang}">Chi Tiet</a> - <a href="capNhatDonHang.php?idDonHang={idDonHang}">Cập Nhật</a>   </td>
      </tr>
          <?php
          $chua = ob_get_clean();
          $chua = str_replace("{idDonHang}",$row_donhang["idDonHang"],$chua);
          $chua = str_replace("{ngayDH}",$row_donhang["ngayDH"],$chua);
          $chua = str_replace("{ngayGH}",$row_donhang["ngayGH"],$chua);
          $chua = str_replace("{tenKH}",$row_donhang["tenKH"],$chua);
          $chua = str_replace("{ghiChu}",$row_donhang["ghiChu"],$chua);
          $chua = str_replace("{diaChi}",$row_donhang["diaChi"],$chua);
          $chua = str_replace("{email}",$row_donhang["email"],$chua);
          $chua = str_replace("{TinhTrang}",$row_donhang["TinhTrang"],$chua);
          echo $chua;
      } ?>
    </table></td>
  </tr>
</table>
    <a href="dangxuatadmin.php">Click vào đây để đăng xuất</a>
</div>
</body>
</html>
