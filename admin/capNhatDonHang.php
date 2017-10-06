<?php
include('../ketnoi/connectmuscle.php');
include('quantri.php');
 ?>
<?php
if(isset($_POST["btnCapNhat"])) {
    $TinhTrang = $_POST["TinhTrang"];
    $idDonHang = $_POST["idDonHang"];
    echo $capnhat = "UPDATE donhang SET TinhTrang = '$TinhTrang' WHERE idDonHang = '$idDonHang'";
    mysql_query($capnhat);
   header("location:listdonhang.php");
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
<div id="container">
	<table width="1000px" border="1">
  <tr>
    <td id="tieude">Trang Quản Trị</td>
  </tr>
  <tr>
    <td id="menu"><?php include('menu.php') ?></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="981" border="1">
        <tr>
          <td colspan="2">Cập Nhật Tình Trạng</td>
          </tr>
        <tr>
          <td width="403">Mã Đơn Hàng</td>
          <td width="562"><input name="idDonHang" value="<?php echo $_GET["idDonHang"] ?>"/></td>
        </tr>
        <tr>
          <td>Tình Trạng</td>
          <td><label for="TinhTrang"></label>
            <select name="TinhTrang" id="TinhTrang">
            <option>Chưa Giao</option>
            <option>Đã Giao</option>
            <option>Hủy</option>
            </select></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="btnCapNhat" id="btnCapNhat" value="Cập Nhật" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
</table>
    <a href="dangxuatadmin.php">Click vào đây để đăng xuất</a>
</div>
</body>
</html>
