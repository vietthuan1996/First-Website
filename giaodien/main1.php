<script type="text/javascript">
$(document).ready(function() {
	$().piroBox_ext({
	piro_speed : 700,
		bg_alpha : 0.5,
		piro_scroll : true // pirobox always positioned at the center of the page
	});
});
</script>
<div id="main1">
	<div id="newproduct">
    	<div id="dmspmoi">
        <i class="fa fa-bomb" aria-hidden="true"></i>
        SẢN PHẨM MỚI</div>
        <?php 
			include ("ketnoi/connectmuscle.php");
			$sql = "select * from sanpham limit 0,4";
			$kq = mysql_query($sql, $conn);
			while($d = mysql_fetch_assoc($kq)){
				
			?>
        <div id="spmoi">
        	<div class="spmoi-hot">
        <div class="spmoi-hinh">
        <a href="index.php?pid=14&idSP=<?php echo $d["idSP"] ?>&soluong=1"><img src="img/<?php echo $d["UrlHinh"]?>" width="216" height="216"/></a>
        </div>
        <div class="spmoi-tengia">
        	<a href="#"><?php echo $d["tenSP"] ?></a><br />
            <span><?php echo number_format($d["Gia"],'0',',','.')  ?> đ</span>
        </div>
        <div class="spmoi-ghang">
        <a href="index.php?pid=10&soluong=1&masp=<?php echo $d['idSP'] ?>">
        
        <button class="btn-cart" type="button">
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
    <div class="line"></div>
        <div id="commercial">
        <div class="commercial-l">
        <a href="#"><img src="img/qc1.jpg" width="250" height="117" /></a><br /><br />
        <a href="#"><img src="img/qc2.jpg" width="250" height="117"/></a>
        </div>
        <div class="commercial-m">
        <a href="#"><img src="img/qc3.jpg" width="330" height="353" /></a>
        </div>
        <div class="commercial-r">
        <a href="#"><img src="img/qc4.jpg" width="330" height="353" /></a>
        </div>
        </div>
		<div class="line"></div>
        <div id="product-pm">
        <div id="dmproduct-pm">
       	  <h2>PROTEIN - MASS GAINER</h2>
          <div id="TabbedPanels2" class="TabbedPanels">
              <ul class="TabbedPanelsTabGroup" style="float:right;margin-top:0px;margin-bottom:50px;">
                <li class="TabbedPanelsTab" tabindex="0">Whey Protein Hoàn Chỉnh</li>
                <li class="TabbedPanelsTab" tabindex="0">Whey - Casein Protein</li>
              </ul>
              <div class="TabbedPanelsContentGroup" style="clear:both;float:left; width:960px;background-color:#FFF;">
                <div class="TabbedPanelsContent">
                <?php 
				include ('ketnoi/connectmuscle.php');
				$sql = "select * from sanpham where idLoai = 'A001' limit 0,4";
				$kq = mysql_query($sql);
				while($d = mysql_fetch_assoc($kq)){;
				 ?>
                <div class="productpm-sp">
              	<div class="productpm-hinh">
                    <a href="index.php?pid=14&idSP=<?php echo $d["idSP"] ?>&soluong=1"><img src="img/<?php echo $d["UrlHinh"]?>" width="216" height="216"/></a>
                </div>
                <div class="productpm-tengia">
                <a href="#"><?php echo $d["tenSP"] ?></a><br />
                    <span><?php echo number_format($d["Gia"],'0',',','.')  ?> đ</span>
                </div>
                <div class="productpm-cart">
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
              <?php }?>
              </div>
                <div class="TabbedPanelsContent">
                <?php 
				include ('ketnoi/connectmuscle.php');
				$sql = "select * from sanpham where idLoai = 'A001' limit 5,4";
				$kq = mysql_query($sql);
				while($d = mysql_fetch_assoc($kq)){;
				 ?>
                <div class="producte-sp">
              	<div class="producte-hinh">
                    <a href="index.php?pid=14&idSP=<?php echo $d["idSP"] ?>&soluong=1"><img src="img/<?php echo $d["UrlHinh"]?>" width="216" height="216"/></a>
                </div>
                <div class="producte-tengia">
                <a href="#"><?php echo $d["tenSP"] ?></a><br />
                    <span><?php echo number_format($d["Gia"],'0',',','.')  ?> đ</span>
                </div>
                <div class="producte-cart">
                <a href="index.php?pid=10&soluong=1&masp=<?php echo $d['idSP'] ?>"><button class="btn-cart" type="button">
        <i class="fa fa-shopping-cart fa-4x" aria-hidden="true">
        </i>
        </button></a>        <a href="imgbig/<?php echo $d['UrlHinh'] ?>" rel="gallery"  class="pirobox_gall" title="<?php echo $d['tenSP'] ?>">
        <button class="btn-cart">
        <i class="fa fa-search-plus fa-2x" aria-hidden="true"></i>
        </button>
                   </a>
                </div>
              </div>
              <?php }?>
                </div>
              </div>
              </div>
          </div>
</div>
        <div class="line"></div>
  <div id="product-e">
        <div id="dmproduct-e">
		  <h2>NĂNG LƯỢNG - PHỤC HỒI</h2>
		  <div id="TabbedPanels1" class="TabbedPanels">
		    <ul class="TabbedPanelsTabGroup" style="float:right;margin-top:0px;margin-bottom:50px;">
		      <li class="TabbedPanelsTab" tabindex="0">Năng lương gym</li>
		      <li class="TabbedPanelsTab" tabindex="0">Phục hồi cơ thể</li>
	        </ul>
		    <div class="TabbedPanelsContentGroup" style="clear:both;float:left; width:960px;background-color:#FFF;">
		      <div class="TabbedPanelsContent">
              <?php
			  include ('ketnoi/connectmuscle.php');
			  $sql = "select * from sanpham where idLoai = 'A002' limit 0,4";
			  $kq = mysql_query($sql);
			  while($d = mysql_fetch_assoc($kq)){
			   ?>
              <div class="producte-sp">
              	<div class="producte-hinh">
                    <a href="index.php?pid=14&idSP=<?php echo $d["idSP"] ?>&soluong=1"><img src="img/<?php echo $d["UrlHinh"]?>" width="216" height="216"/></a>
                </div>
                <div class="producte-tengia">
                <a href="#"><?php echo $d["tenSP"] ?></a><br />
                    <span><?php echo number_format($d["Gia"],'0',',','.')  ?> đ</span>
                </div>
                <div class="producte-cart">
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
              
		      <div class="TabbedPanelsContent">
              <?php
			  include ('ketnoi/connectmuscle.php');
			  $sql = "select * from sanpham where idLoai = 'A002'";
			  $kq = mysql_query($sql);
			  while($d = mysql_fetch_assoc($kq)){
			   ?>

              <div class="producte-sp">
              	<div class="producte-hinh">
                    <a href="index.php?pid=14&idSP=<?php echo $d["idSP"] ?>&soluong=1"><img src="img/<?php echo $d["UrlHinh"]?>" width="216" height="216"/></a>
                </div>
                <div class="producte-tengia">
                <a href="#"><?php echo $d["tenSP"] ?></a><br />
                    <span><?php echo number_format($d["Gia"],'0',',','.')  ?> đ</span>
                </div>
                <div class="producte-cart">
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
            </div>
  		<div class="line"></div>
        <div id="product-forw">
  		<div id="dmproduct-forw">
       <i class="fa fa-female" aria-hidden="true"></i>
        PHỤ NỮ</div>
        <?php 
			include ('ketnoi/connectmuscle.php');
			$sql = "select * from sanpham where idLoai = 'A003' limit 0,4";
			$kq = mysql_query($sql);
			while ($d = mysql_fetch_assoc($kq)){
		 ?>
        <div id="forwspmoi">
        	<div class="spmoi-hot">
        <div class="spmoi-hinh">
            <a href="index.php?pid=14&idSP=<?php echo $d["idSP"] ?>&soluong=1"><img src="img/<?php echo $d["UrlHinh"]?>" width="216" height="216"/></a>
        </div>
        <div class="spmoi-tengia">
        	<a href="#"><?php echo $d["tenSP"] ?></a><br />
            <span><?php echo number_format($d["Gia"],'0',',','.')  ?> đ</span>
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
        <?php }?>
        <div class="line"></div>
        <div id="commercial2">
        <div id="commercial2-l" >
        <a href="#"><img src="img/freeship-toanquoc.jpg" width="450" height="117" /></a><br />
        <a href="#"><img src="img/PhuNuThanhCong.jpg" width="450" height="350"/></a>
        </div>
        <div id="commercial2-m" >
        <a href="#"><img src="img/manhMeTrongGym.jpg" width="450" height="350" /></a>
        <a href="#"><img src="img/km-nhieu-mat-hang.jpg" width="450" height="117" /></a>
        </div>
        </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
</script>