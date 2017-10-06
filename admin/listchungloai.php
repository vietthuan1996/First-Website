 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="giaodien.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="container">
<table width="500px" border="1">
  <tr>
    <td id="tieude">Trang Quản Trị</td>
  </tr>
  <tr>
    <td id="menu"><?php include('menu.php') ?></td>
  </tr>
  <tr>
    <td><table width="960" border="1">
      <tr>
        <td colspan="3">Danh sách chủng loại</td>
      </tr>
      <tr>
        <td width="199">Mã Chủng Loại</td>
        <td width="156">Tên Chủng Loại</td>
        <td width="141">Thứ Tự</td>
        <td width="223">Ẩn Hiện</td>
        <td width="207"><a href="themchungloai.php">Thêm</a></td>
      </tr>
      <?php
	  	include('quantri.php');
	  	$chungloai = DanhSachChungLoai();
		while($row_chungloai = mysql_fetch_array($chungloai))
		{
			ob_start();
	   ?>
      <tr>
        <td>{idCL}</td>
        <td>{tenCL}</td>
        <td>{ThuTu}</td>
        <td>{AnHien}</td>
        <td><a href="suachungloai.php?idCL={idCL}">Sửa</a>
        -<a onclick="return confirm('Bạn có muốn xóa không ?? ')" href="xoachungloai.php?idCL={idCL}">Xóa</a></td>
      </tr>
      <?php 
	  		$chua = ob_get_clean();
			$chua = str_replace("{idCL}",$row_chungloai['idCL'],$chua);
			$chua = str_replace("{tenCL}",$row_chungloai['tenCL'],$chua);
			$chua = str_replace("{ThuTu}",$row_chungloai['ThuTu'],$chua);
			$chua = str_replace("{AnHien}",$row_chungloai['AnHien'],$chua);
			echo $chua;
		}
		
	  ?>
    </table></td>
  </tr>
</table>
    <a href="dangxuatadmin.php">Click vào đây để đăng xuất</a>
</div>
</body>
</html>
