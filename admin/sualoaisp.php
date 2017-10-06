<?php
include('../ketnoi/connectmuscle.php');
include('quantri.php');
 ?>
 <?php 
 $idLoai = $_GET["idLoai"];
 $row_loaisp = ChiTietLoaiSP($idLoai);
 ?>
 <?php
 	if(isset($_POST["btnSua"]))
	{
		$tenLoai = $_POST["tenLoai"];
		$ThuTu = $_POST["ThuTu"];
		settype($ThuTu,"int");
		$AnHien = $_POST["AnHien"];
		settype($AnHien,"int");
		$idCL= $_POST["idCL"];
		$truyvansualoaisp = "UPDATE loaisp SET 
							tenLoai = '$tenLoai',
							ThuTu = $ThuTu,
							AnHien = $AnHien,
							idCL = '$idCL'
							WHERE idLoai = '$idLoai'
							
		";
		mysql_query($truyvansualoaisp);
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
<div >
	<table width="1000px" border="1">
  <tr>
    <td id="tieude">Trang Quản Trị</td>
  </tr>
  <tr>
    <td id="menu"><?php include('menu.php') ?></td>
  </tr>
  <tr>
    <td><form id="formsualoaisp" name="formsualoaisp" method="post" action="">
      <table width="987" border="1">
        <tr>
          <td colspan="2">Sửa Loại Sản Phẩm</td>
          </tr>
        <tr>
          <td>Tên Loại Sản Phẩm</td>
          <td><label for="tenLoai"></label>
            <input type="text" name="tenLoai" id="tenLoai" value="<?php echo $row_loaisp["tenLoai"] ?>" /></td>
        </tr>
        <tr>
          <td>Thứ Tự</td>
          <td><label for="ThuTu"></label>
            <input type="text" name="ThuTu" id="ThuTu" value="<?php echo $row_loaisp["ThuTu"] ?>" /></td>
        </tr>
        <tr>
          <td>Ẩn Hiện</td>
          <td><p>
            <label>
              <input <?php if($row_loaisp['AnHien'] == 1)
										{
											echo "checked = 'checked'";
										}					  
				   ?> type="radio" name="AnHien" value="1" id="AnHien_0" />
              Hiện</label>
            <br />
            <label>
              <input  <?php if($row_loaisp['AnHien'] == 0)
										{
											echo "checked = 'checked'";
										}					  
				   ?>type="radio" name="AnHien" value="0" id="AnHien_1" />
              Ẩn</label>
            <br />
          </p></td>
        </tr>
        <tr>
          <td>Mã Chủng Loại</td>
          <td><label for="idCL"></label>
            <label for="idCL"></label>
            <select name="idCL" id="idCL">
            	<?php
				$chungloai = $row_loaisp["idCL"];
				$truyvanchungloai = DanhSachChungLoai();
				while($row_chungloai = mysql_fetch_array($truyvanchungloai))
				{
				 ?>
                <option value="<?php $row_chungloai["idCL"] ?>" <?php if($row_chungloai["idCL"] == $chungloai) echo "selected"; ?>><?php echo $row_chungloai["tenCL"] ?></option>
               <?php } ?>
            </select>
             
            </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="btnSua" id="btnSua" value="Sửa" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
    <a href="dangxuatadmin.php">Click vào đây để đăng xuất</a>
</div>
</div>
