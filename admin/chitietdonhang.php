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
    <td><table width="991" border="1">
      <tr>
        <td colspan="5">Chi Tiết Đơn Hàng</td>
        </tr>

      <tr>
        <td>Mã Sản Phẩm</td>
        <td>Tên Sản Phẩm</td>
        <td>Số Lượng</td>
        <td>Giá</td>
        <td></td>
      </tr>
            <?php
            $idDonHang = $_GET["idDonHang"];
            $chitietdonhang = ChiTietDonHang($idDonHang);
            while ($row_chitiet = mysql_fetch_array($chitietdonhang))
            {
                ob_start();
            ?>
      <tr>
        <td>{idSP}</td>
        <td>{tenSP}</td>
        <td>{slDat}</td>
        <td>{Gia}</td>
        <td> <a href="listdonhang.php">Quay Lại</a></td>
      </tr>
            <?php
                    $chua = ob_get_clean();
                    $chua = str_replace("{idSP}",$row_chitiet["idSP"],$chua);
                    $chua = str_replace("{tenSP}",$row_chitiet["tenSP"],$chua);
                    $chua = str_replace("{slDat}",$row_chitiet["slDat"],$chua);
                    $chua = str_replace("{Gia}",$row_chitiet["Gia"],$chua);
                    $chua = str_replace("{idDonHang}",$row_chitiet["idDonHang"],$chua);
                    echo $chua;
            } ?>
    </table></td>
  </tr>
</table>
    <a href="dangxuatadmin.php">Click vào đây để đăng xuất</a>
</div>
</body>
</html>

