
<?php
include('../ketnoi/connectmuscle.php');
include('quantri.php');
 ?>
<?php
    $idSP = $_GET["idSP"];
    $row_sanpham = ChiTietSanPham($idSP);
?>
<?php
    $fileimgerr ="";
    if(isset($_POST["btnSua"]))
    {
        $tenSP = $_POST["tenSP"];
        $mota = $_POST["mota"];
        $gia = $_POST["gia"];
        $ngaycapnhat = $_POST["Ngaycapnhat"];
         $idLoai = $_POST["idLoai"];
        $fileimg = $_FILES["hinh"]["name"];
     	$hinhcu = $_POST["hinhcu"];
	
        if(strlen($_FILES["hinh"]["name"])> 0) {
			$kiemtra =1;
            if($_FILES["hinh"]["size"] > 1000000)
            {
                $fileimgerr = "Kích thước ảnh quá lớn";
                $kiemtra = 0;
            }
            if($_FILES["hinh"]["type"] != "image/jpg" && $_FILES["hinh"]["type"] != "image/png" && $_FILES["hinh"]["type"] != "image/jpeg"
                && $_FILES["hinh"]["type"] != "image/gif" )
            {
                $fileimgerr = "Vui lòng kiểm tra định dạng ảnh";
                $kiemtra = 0;
            }
            if($kiemtra ==1 )
            {
				$duongdan = "../img/".$hinhcu;
				unlink($duongdan);
                move_uploaded_file($_FILES["hinh"]["tmp_name"],'../img/'.$_FILES["hinh"]["name"]);
                $truyvanthemsanpham = "UPDATE sanpham SET
                                      tenSP = '$tenSP',
                                      Mota = '$mota',
                                      Gia = $gia,
                                      Ngaycapnhat = '$ngaycapnhat',
                                      idLoai = '$idLoai',
                                      UrlHinh = '$fileimg'
                                      WHERE idSP = '$idSP';
                                      ";
                mysql_query($truyvanthemsanpham);
                header("location:listsanpham.php");
            }
        }
        else{
            $truyvanthemsanpham = "UPDATE sanpham SET
                                      tenSP = '$tenSP',
                                      Mota = '$mota',
                                      Gia = $gia,
                                      Ngaycapnhat = '$ngaycapnhat',
                                      idLoai = '$idLoai'
                                      WHERE idSP = '$idSP';
                                      ";
                mysql_query($truyvanthemsanpham);
                //header("location:listsanpham.php");
        }
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="giaodien.css" rel="stylesheet" type="text/css" />
<script src="../ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="../ckeditor/samples/old/sample.css">
<script type="text/javascript" src="kt.js"></script>
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
    <td><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="989" border="1">
        <tr>
          <td colspan="2">Sửa Sản Phẩm</td>
          </tr>
        <tr>
          <td>Tên Sản Phẩm</td>
          <td><input type="text" name="tenSP" id="tenSP" value="<?php echo $row_sanpham["tenSP"] ?>" /></td>
        </tr>
        <tr>
          <td>Mô Tả</td>
          <td><label for="mota"></label>
            <textarea class="ckeditor" name="mota" id="mota" cols="45" rows="5" ></textarea></td>
        </tr>
        <tr>
          <td>Giá</td>
          <td><label for="gia"></label>
            <input onKeyUp="CheckNumber(this)" type="text" name="gia" id="gia" value="<?php echo $row_sanpham["Gia"] ?>" /></td>
        </tr>
        <tr>
          <td>Ngày Cập Nhật</td>
          <td><label for="Ngaycapnhat"></label>
            <input type="text" name="Ngaycapnhat" id="Ngaycapnhat" value="<?php echo date("Y-m-d") ?>" readonly /></td>
        </tr>
        <tr>
          <td>Hình</td>
          <td><label for="hinh"></label>
            <input type="file" name="hinh" id="hinh" /><br>
              <span>*<?php echo $fileimgerr ?></span>
              <input type="hidden" name="hinhcu" value="<?php echo $row_sanpham["UrlHinh"] ?>" />
          </td>
        </tr>
        <tr>
          <td>Mã Loại Sản Phẩm</td>
          <td><label for="idLoai"></label>
            <select name="idLoai" id="idLoai">
                <?php
                $chungloai = DanhSachChungLoai();
                while ($row_chungloai = mysql_fetch_array($chungloai))
                {
                ?>
                    <option disabled="disabled" ><?php echo $row_chungloai["tenCL"] ?> </option>

                    <?php
                    $nhancl = $row_chungloai["idCL"];
                    $nhanloaisp = $row_sanpham["idLoai"];
                    $truyvanloaisptheocl = "SELECT * FROM loaisp WHERE idCL = '$nhancl'";
                    $kqtruyvan = mysql_query($truyvanloaisptheocl);
                    while($row_loaisp = mysql_fetch_array($kqtruyvan))
                    {
                        ?>
                        <option value="<?php echo $row_loaisp["idLoai"] ?>" <?php if($row_loaisp["idLoai"] == $nhanloaisp) echo "selected"; ?>><?php echo $row_loaisp["tenLoai"] ?></option>
                    <?php }
                } ?>
            </select></td>
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
</body>
</html>