 
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
        <td colspan="3">Danh sách thành viên</td>
      </tr>
      <tr>
      <td width="199">Id Thành Viên</td>
        <td width="199">Tài khoản thành viên</td>
       
        <td width="141">Email</td>
        <td width="223">Giới tính</td>
      </tr>
      <?php
	  	include('quantri.php');
	  	$thanhvien = ThanhVien();
		while($row_chungloai = mysql_fetch_array($thanhvien))
		{
			ob_start();
	   ?>
      <tr>
      <td>{iduser}</td>
        <td>{username}</td>
        <td>{email}</td>
        <td>{gioitinh}</td>
        
        <td>
        <a onclick="return confirm('Bạn có muốn xóa không ?? ')" href="xoathanhvien.php?iduser={iduser}">Xóa</a></td>
      </tr>
      <?php 
	  		$chua = ob_get_clean();
			$chua = str_replace("{iduser}",$row_chungloai['iduser'],$chua);
			$chua = str_replace("{username}",$row_chungloai['username'],$chua);
			$chua = str_replace("{email}",$row_chungloai['email'],$chua);
			$chua = str_replace("{gioitinh}",$row_chungloai['gioitinh'],$chua);
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
