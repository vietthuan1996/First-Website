<?php
include("../ketnoi/connectmuscle.php");
include("quantri.php");
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
        <td colspan="8">Danh Mục Sản Phẩm</td>
        </tr>
      <tr>
        <td>Mã Sản Phẩm</td>
        <td>Mã Loại</td>
        <td>Mã Chủng Loại</td>
        <td>Tên Sản Phẩm</td>
        <td>Giá </td>
        <td>Ngày Cập Nhật</td>
        <td>Hình</td>
        <td><a href="themSanPham.php">Thêm</a></td>
      </tr>
      <tr>
      <?php
	  	$sanpham = DanhSachSanPham();
		$sodong = 4;
		if(!isset($_GET["p"]))
		{
			$p =1;
		}
		else
		{
			$p = $_GET["p"];
		}
		$x = ($p -1)*$sodong;
		$sanpham = $sanpham." limit $x,$sodong";
		$kqsanpham = mysql_query($sanpham);
		while($row_sanpham = mysql_fetch_array($kqsanpham))
      {
      ob_start();
      ?>
          <td>{idSP}</td>
          <td>{tenLoai}</td>
          <td>{tenCL}</td>
          <td>{tenSP}</td>
          <td>{Gia}</td>
          <td>{Ngaycapnhat}</td>
          <td><img src="../img/{UrlHinh}" width="200" height="200"/></td>
          <td><a href="suaSanPham.php?idSP={idSP}">Sửa </a>
              - <a href="xoaSanPham.php?idSP={idSP}" onclick="return confirm('Bạn có muốn xóa không ?? ')">Xóa</a></td>
      </tr>
            <?php
            $chua = ob_get_clean();
            $chua = str_replace("{idSP}", $row_sanpham["idSP"], $chua);
            $chua = str_replace("{tenLoai}", $row_sanpham["tenLoai"], $chua);
            $chua = str_replace("{tenCL}", $row_sanpham["tenCL"], $chua);
            $chua = str_replace("{tenSP}", $row_sanpham["tenSP"], $chua);
            $chua = str_replace("{Gia}", $row_sanpham["Gia"], $chua);
            $chua = str_replace("{Ngaycapnhat}", $row_sanpham["Ngaycapnhat"], $chua);
            $chua = str_replace("{UrlHinh}", $row_sanpham["UrlHinh"], $chua);
            echo $chua;
            }
	   ?>
    </table>
        <div style="clear: both;float: left;margin-left: 400px">
            <?php
            $nhom =3;
            $dau = floor(($p -1 )/$nhom) * $nhom +1;
            $cuoi = $dau+$nhom -1 ;
            $sanpham2 = DanhSachSanPham();
            $kqsanpham2 = mysql_query($sanpham2);
            $tongsotrang = ceil(mysql_num_rows($kqsanpham2)/$sodong);
            if($cuoi > $tongsotrang)
            {
                $cuoi = $tongsotrang;
            }
            if($p > 1)
            {
                ?>
                <a style="text-decoration: none" href="listsanpham.php?p=1" style="font-size:20px;">Về đầu</a>
                <a style="text-decoration: none" href="listsanpham.php?p=<?php echo $p - 1  ?>"> <  </a>
                <?php
            }
            for($i = $dau;$i <= $cuoi;$i++)
            {
                if($i == $p){echo $i;}
                else{
                    ?>

                        <a style="text-decoration: none" href="listsanpham.php?p=<?php echo $i; ?>"><?php echo $i; ?></a>

                <?php  } }?>
            <?php
            if($p < $tongsotrang)
            {
                ?>

                <a style="text-decoration: none" href="listsanpham.php?p=<?php echo $p + 1 ?>"> > </a>
                <a style="text-decoration: none" href="listsanpham.php?p=<?php echo $tongsotrang ?>" style="font-size:20px">Về cuối</a>
            <?php } ?>
        </div>
    </td>
  </tr>
</table>
    <a href="dangxuatadmin.php">Click vào đây để đăng xuất</a>
</div>

</body>
</html>