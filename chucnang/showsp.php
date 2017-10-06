<div id="formsapxep">
<form action="index.php?pid=9" method="post" name="formsapxep">
<span style="font-size:20px"> Sắp xếp theo loại:</span>
		<select name="loaisp">
        <option value="ALL">Tất cả</option>
        <?php
			include('ketnoi/connectmuscle.php');
			$truyxuat = "select * from chungloaisp";
			$nhankq = mysql_query($truyxuat) ;
			while($dong = mysql_fetch_array($nhankq))
			{
		 ?>
        <option value="" disabled="disabled"><?php echo $dong['tenCL'] ?></option>
        <?php
			$biencl = $dong['idCL'];
			$truyxuat1 = "select * from loaisp where idCL = '$biencl' ";
			$nhankq1 = mysql_query($truyxuat1);
			while($dong1 = mysql_fetch_array($nhankq1))
			{
		 ?> 
        <option value="<?php echo $dong1['idLoai'] ?>"><?php echo $dong1['tenLoai'] ?></option>
        <?php }}
		 ?>
    </select>&nbsp;&nbsp;&nbsp;
  <span style="font-size:20px">Sắp xếp theo giá:</span>
  		<select name="giasp">
        <option value="MIN">Giá Thấp Nhất</option>
        <option value="MAX">Giá Cao Nhất</option>
    </select>
    <input type="submit" name="timsp" value="Tìm Sản Phẩm" />
</form></div> 
<div style="clear:both"></div>
<div id="xulytimkiem">

<?php
include ('ketnoi/connectmuscle.php');
$sodong = 4;
if(!isset($_GET['p']))
{
	$p=1;
	}
else{
	$p = $_GET['p'];
	}
$x=  ($p - 1) * $sodong;
$sql = "select * from sanpham limit $x,$sodong ";
$kq = mysql_query($sql); 
	while($d = mysql_fetch_assoc($kq))
	{
	?>

	<div>
        <div id="spmoi">
            <div class="spmoi-hot">
                <div class="spmoi-hinh">
                    <a href="index.php?pid=14&idSP=<?php echo $d["idSP"] ?>&soluong=1"><img src="img/<?php echo $d["UrlHinh"]?>" width="216" height="216"/></a>
                </div>
                <div class="spmoi-tengia">
                    <a href="#"><?php echo $d["tenSP"] ?></a><br />
                    <span> <?php echo number_format($d["Gia"],'0',',','.')  ?> đ</span>
                </div>
                <div class="spmoi-ghang">
                    <a href="index.php?pid=10&soluong=1&masp=<?php echo $d['idSP'] ?>"><button class="btn-cart" type="button">
                            <i class="fa fa-shopping-cart fa-4x" aria-hidden="true">
                            </i>
                        </button></a>
                    <a href="imgbig/<?php echo $d['UrlHinh'] ?>" rel="gallery"  class="pirobox_gall" title="<?php echo $d['tenSP'] ?>">
                        <button class="btn-cart">
                            <i class="fa fa-search-plus fa-2x" aria-hidden="true"></i>
                        </button>
                    </a>
                </div>
            </div>
    <?php } ?>     
	</div>
    <div style="clear:both"></div>
  <div class="xulyphantrang">
    <?php
		$nhom =3;
		$dau = floor(($p -1 )/$nhom) * $nhom +1;
		$cuoi = $dau+$nhom -1 ;
		$sql2 = "select * from sanpham";
		$kq2 = mysql_query($sql2);
		$tongsotrang = ceil(mysql_num_rows($kq2)/$sodong);
		if($cuoi > $tongsotrang)
		{
			$cuoi = $tongsotrang;
		}
		if($p > 1)
		{
			?>
            <a href="index.php?pid=6&p=1" style="font-size:20px;">Về đầu</a>
            <a href="index.php?pid=6&p=<?php echo $p - 1  ?>"> <</a>
        <?php
		}
		for($i = $dau;$i <= $cuoi;$i++)
		{
			if($i == $p){echo $i;}
			else{
				?>
          <a  href="index.php?pid=6&p=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php  } }?>
          <?php
		  if($p < $tongsotrang)
		  {
		   ?>
           
            <a href="index.php?pid=6&p=<?php echo $p + 1 ?>"> > </a>
            <a href="index.php?pid=6&p=<?php echo $tongsotrang ?>" style="font-size:20px">Về cuối</a>
           <?php } ?>
			
</div>

