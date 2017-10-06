<div id="formsapxep">
<form action="" method="post" name="formsapxep">
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
<div style="margin-left:400px;">
<?php 
	include('ketnoi/connectmuscle.php');
	if(isset($_POST['loaisp']))
	{
		$nhanloaisp = $_POST['loaisp'];
		$nhangiasp = $_POST['giasp'];
	}
	else
	{
		$nhanloaisp = $_GET['loaisp'];
		$nhangiasp = $_GET['giasp'];
	}
	if(!isset($_GET['p']))
	{
		$p = 1;
	}
	else
	{
		$p = $_GET['p'];
	}
	$sodong = 4;
	$nhom = 3;
	$x = ($p - 1)*$sodong;
	if($nhanloaisp == "ALL")
	{
		$sql = "select * from sanpham";
	}
	else
	{	
		$sql = "select * from sanpham where idLoai = '$nhanloaisp'";
	}
	if($nhangiasp == "MIN")
	{
	 	$sql = $sql." order by Gia ";	
	}
	 if($nhangiasp == "MAX")
	{
	 	$sql = $sql." order by Gia desc ";
	}
	  $sql = $sql." limit $x,$sodong";
	$kq = mysql_query($sql);
	while($d = mysql_fetch_array($kq))
	{
?>
	<div >
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
<div style="clear:both;"></div>
<div style="float:left;margin-top:20px;margin-left:0px">
<?php 
		$nhom =3;
		$dau = floor(($p -1 )/$nhom) * $nhom +1;
		$cuoi = $dau+$nhom -1 ;
		if($nhanloaisp == "ALL")
	{
		$sql = "select * from sanpham";
	}
	else
	{	
		$sql = "select * from sanpham where idLoai = '$nhanloaisp'";
	}
	if($nhangiasp == "MIN")
	{
	 	$sql = $sql." order by Gia ";	
	}
	 if($nhangiasp == "MAX")
	{
	 	$sql = $sql." order by Gia desc ";
	}
	$kq = mysql_query($sql);
	$tongsotrang = ceil(mysql_num_rows($kq)/$sodong);
	if($cuoi > $tongsotrang)
	{
		$cuoi = $tongsotrang;
	}
	if($p > 1)
	{
?>
	<a href="index.php?pid=9&p=1&loaisp=<?php echo $nhanloaisp ?>&giasp=<?php echo $nhangiasp ?>">Về đầu</a>
    <a href="index.php?pid=9&p=<?php echo $p - 1  ?>&loaisp=<?php echo $nhanloaisp ?>&giasp=<?php echo $nhangiasp ?>"> < </a>
<?php }
	for($i =$dau; $i <= $cuoi; $i++)
	{
		if($p == $i)
		{	
			 echo $i;
		}
		else
		{
		?>
        <a href="index.php?pid=9&p=<?php echo $i ?>&loaisp=<?php echo $nhanloaisp ?>&giasp=<?php echo $nhangiasp ?>"><?php echo $i ?></a>
       <?php
		}
	}
	if($p < $tongsotrang)
	{
		?>
        <a href="index.php?pid=9&p=<?php echo $p + 1 ?>&loaisp=<?php echo $nhanloaisp ?>&giasp=<?php echo $nhangiasp ?>"> > </a>
        <a href="index.php?pid=9&p=<?php echo $tongsotrang ?>&loaisp=<?php echo $nhanloaisp ?>&giasp=<?php echo $nhangiasp ?>">Về cuối</a>
    <?php 
	}
	?>
	</div>
    </div>