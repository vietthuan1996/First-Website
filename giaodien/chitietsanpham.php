<?php 
$idSP = $_GET["idSP"];
$soluong = $_GET["soluong"];
$solanxem = "UPDATE sanpham SET SoLanXem = SoLanXem + 1
              WHERE idSP = '$idSP'";
mysql_query($solanxem);
$truyvansanpham = "SELECT * FROM sanpham WHERE idSP = '$idSP'";
$kqtruyvan = mysql_query($truyvansanpham);
while($row_sanpham = mysql_fetch_array($kqtruyvan))
{
?>
<div id="chitietsanpham">
    <h1>Thông Tin Sản Phẩm</h1><br>
    <div id="ctsphinh">
        <img src="img/<?php echo $row_sanpham["UrlHinh"] ?>" width="200"  />
    </div>
    <h3 style="font-family:'Trebuchet MS', sans-serif "> <?php echo $row_sanpham["tenSP"] ?> </h3><br><br>
    <div style="font-weight: bold " >Giá : <span><?php echo  number_format($row_sanpham["Gia"],'0',',','.')  ?> đ</span></div><br>
<form name="form1" method="post" action="index.php?pid=10">
    <input type="hidden" value="<?php echo $row_sanpham["idSP"] ?>" name="masp"  />

   <div style="font-weight: bold ">Số Lượng : <input style="width:50px;font-weight: bold " type="number" value="<?php echo $soluong ?>" name="soluong" id="soluong" /></div><br>
    <input style="width: 100px" type="submit" name="btnChon" id="btnChon" value="Mua Hàng"/>
</form><br>
    <div style="clear: both;margin-top: 50px;">
        <h3>So lan xem : <?php echo $row_sanpham["SoLanXem"] ?></h3>
       <h2> Chi Tiết Sản Phẩm</h2>
    <p>
    <?php echo $row_sanpham["Mota"] ?>
    </p>
    </div>
</div>
<?php  } ?>