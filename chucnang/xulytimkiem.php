<div id="xulytimkiem">

<?php
$sodong = 4;
if(!isset($_GET['p']))
{
	$p=1;
	}
else{
	$p = $_GET['p'];
	}
$x=  ($p - 1) * $sodong;
$timkq = $_GET['tim'];
$sql = "select * from sanpham where tenSP like '%$timkq%' limit $x,$sodong ";
$kq = mysql_query($sql);
if(mysql_num_rows($kq) > 0)
{	?>
	<div>
    <?php 
	while($d = mysql_fetch_assoc($kq))
	{
	?>
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
    <div class="xulyphantrang">
    <?php
        $nhom  =3;
        $dau = floor(($p -1)/$nhom)*$nhom +1;
        $cuoi = $dau + $nhom -1;
		$sql2 = "select * from sanpham where tenSP like '%$timkq%'";
		$kq2 = mysql_query($sql2);
		$tongsotrang = ceil(mysql_num_rows($kq2)/$sodong);
    if($cuoi > $tongsotrang)
    {
        $cuoi = $tongsotrang;
    }
    if($p > 1)
    {
        ?>
        <a  href="index.php?pid=3&p=1&tim=<?php echo $timkq; ?>">Về đầu</a>
        <a  href="index.php?pid=3&p=<?php echo $p - 1 ?>&tim=<?php echo $timkq; ?>"> < </a>
        <?php
    }
		for($i = $dau;$i <= $cuoi;$i++)
		{
			if($i == $p){echo $i;}
			else{
				?>
          <a href="index.php?pid=3&p=<?php echo $i; ?>&tim=<?php echo $timkq; ?>"><?php echo $i; ?></a>      
                <?php  }}
    if($p < $tongsotrang)
    {
        ?>
        <a  href="index.php?pid=3&p=<?php echo $p + 1 ?>&tim=<?php echo $timkq; ?>"> > </a>
        <a  href="index.php?pid=3&p=<?php echo $tongsotrang ?>&tim=<?php echo $timkq; ?>"> Về Cuối </a>
        <?php
    }
                ?>
			
    <?php }
	else
	{
		echo "Khong tim thay ket qua";
		}
	 ?>
	
</div>
</div>
