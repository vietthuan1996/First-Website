
<?php
include('../ketnoi/connectmuscle.php');	
include('quantri.php');
 ?>
 <?php
 $idCL = $_GET['idCL'];
 $row_chungloai  = ChiTietChungLoai($idCL);
  ?>
 <?php
	if(isset($_POST['btnsua']))
	{

 	$tenCL = $_POST['tenCL'];
	$ThuTu = $_POST['ThuTu'];
	settype($ThuTu,"int");
	$anhien = $_POST["AnHien"];
	settype($anhien,"int");
  	$sql = "UPDATE chungloaisp SET
			tenCL = '$tenCL',
			ThuTu = '$ThuTu',
			AnHien = '$anhien'
			WHERE idCL = '$idCL'";
		mysql_query($sql);
	//header("location:listchungloai.php");
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
    <td><form id="form2" name="form2" method="post" action="">
      <table width="959" border="1">
        <tr>
          <td colspan="2">Sửa Chủng Loại</td>
          </tr>
        <tr>
          <td width="484">Tên Chủng Loại</td>
          <td width="459"><label for="tenCL"></label>
            <input value="<?php echo $row_chungloai['tenCL'] ?>" type="text" name="tenCL" id="tenCL" /></td>
        </tr>
        <tr>
          <td>Thứ Tự</td>
          <td><label for="ThuTu"></label>
            <input value="<?php echo $row_chungloai['ThuTu'] ?>" type="text" name="ThuTu" id="ThuTu" /></td>
        </tr>
        <tr>
          <td>Ẩn Hiện</td>
          <td><p>
            <label>
              <input type="radio" <?php if($row_chungloai['AnHien'] == 1)
										{
											echo "checked = 'checked'";
										}					  
				   ?> name="AnHien" value="1" id="AnHien_0" />
              Hien</label>
            <br />
            <label>
              <input type="radio" <?php if($row_chungloai['AnHien'] == 0)
										{
											echo "checked = 'checked'";
										}					  
				   ?> name="AnHien" value="0" id="AnHien_1" />
              An</label>
            <br />
          </p></td>
        </tr>
           <tr>
          <td colspan="2"><input type="submit" name="btnsua" id="btnsua" value="Sửa" /></td>
          </tr>
        </table>
    </form></td>
  </tr>
</table>
    <a href="dangxuatadmin.php">Click vào đây để đăng xuất</a>
</body>
</html>
