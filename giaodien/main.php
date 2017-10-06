
<script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_html5_AdWords_SlideoTransitions = [
              [{b:-1,d:1,o:-1,rY:-120},{b:2600,d:500,o:1,rY:120,e:{rY:17}}],
              [{b:-1,d:1,o:-1},{b:1480,d:20,o:1},{b:1500,d:500,y:-20,e:{y:19}},{b:2300,d:300,x:-20,e:{x:19}},{b:3100,d:300,o:-1,sY:9}],
              [{b:-1,d:1,o:-1},{b:2300,d:300,x:20,o:1,e:{x:19}},{b:3100,d:300,o:-1,sY:9}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:0,d:1000,sX:2,sY:2,e:{sX:7,sY:7}},{b:1000,d:500,sX:-1,sY:-1,e:{sX:16,sY:16}},{b:1500,d:500,y:20,e:{y:19}}],
              [{b:1000,d:1000,r:-30},{b:2000,d:500,r:30,e:{r:2}},{b:2500,d:500,r:-30,e:{r:3}},{b:3000,d:3000,x:70,y:40,rY:-20,tZ:-20}],
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:-1,d:1,o:-1,r:30},{b:1000,d:1000,o:1}],
              [{b:-1,d:1,o:-1},{b:2780,d:20,o:1},{b:2800,d:500,y:-70,e:{y:3}},{b:3300,d:1000,y:180},{b:4300,d:500,y:-40,e:{y:3}},{b:5300,d:500,y:-40,e:{y:3}},{b:6300,d:500,y:-40,e:{y:3}},{b:7300,d:500,y:-40,e:{y:3}},{b:8300,d:400,y:-30}],
              [{b:-1,d:1,c:{y:200}},{b:4300,d:4400,c:{y:-200},e:{c:{y:1}}}],
              [{b:-1,d:1,o:-1},{b:4300,d:20,o:1}],
              [{b:-1,d:1,o:-1},{b:5300,d:20,o:1}],
              [{b:-1,d:1,o:-1},{b:6300,d:20,o:1}],
              [{b:-1,d:1,o:-1},{b:7300,d:20,o:1}],
              [{b:-1,d:1,o:-1},{b:8300,d:20,o:1}],
              [{b:2000,d:1000,o:-0.5,r:180,sX:4,sY:4,e:{r:5,sX:5,sY:5}},{b:3000,d:1000,o:-0.5,r:180,sX:-4,sY:-4,e:{r:6,sX:6,sY:6}}],
              [{b:-1,d:1,o:-1,c:{m:-35.0}},{b:0,d:1500,x:150,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1,c:{y:35.0}},{b:0,d:1500,x:-150,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1},{b:6500,d:2000,o:1}],
              [{b:-1,d:1,o:-1},{b:2000,d:1000,o:0.5,r:180,sX:4,sY:4,e:{r:5,sX:5,sY:5}},{b:3000,d:1000,o:0.5,r:180,sX:-4,sY:-4,e:{r:6,sX:6,sY:6}},{b:4500,d:1500,x:-45,y:60,e:{x:12,y:3}}],
              [{b:-1,d:1,o:-1},{b:4500,d:1500,o:1,e:{o:5}},{b:6500,d:2000,o:-1,r:10,rX:30,rY:20,e:{rY:6}}]
            ];

            var jssor_html5_AdWords_options = {
              $AutoPlay: 1,
              $Idle: 1600,
              $SlideDuration: 400,
              $SlideEasing: $Jease$.$InOutSine,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_html5_AdWords_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $ChanceToShow: 1
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $ActionMode: 2
              }
            };

            var jssor_html5_AdWords_slider = new $JssorSlider$("jssor_html5_AdWords", jssor_html5_AdWords_options);
        });		    </script>
</head>

<body>
<div id="main">
	<div id="content1">
        	<div id="left">
            <div id="list">
            <i class="fa fa-bars" aria-hidden="true"></i>
            DANH MỤC</div>
            <div id="list-sp">
            	<ul>
                <?php
				include('ketnoi/connectmuscle.php');
				$sql = "select * from loaisp";
				$kq = mysql_query($sql);
				while($d = mysql_fetch_array($kq)){
				 ?>
                <li>
                <a href="index.php?pid=7&idloai=<?php echo $d['idLoai'] ?>&tenloai=<?php echo $d['tenLoai'] ?>"><img src="img/iconmuscle.png" width="17px" height="17px" /><?php echo $d['tenLoai'] ?></a></li>
              	  <li>
                <?php }?>
                </ul>
                
            </div>
            	<div id="giohang">
                <div id="dem"><?php echo $_SESSION['somathang'] ?></div>
                <i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
					<div id="giohanghover">
                    <span>Bạn đã chọn <?php echo $_SESSION['somathang'] ?> sản phẩm</span>
                        <a href="index.php?pid=8&duongdan=1">Xem các sản phẩm vừa chọn</a>
                    </div>
				</div>
            </div>
            <div id="mid">
            <div id="jssor_html5_AdWords" style="position:relative;margin:0 auto;top:0px;left:0px;width:540px;height:540px;overflow:hidden;visibility:hidden;">
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:540px;height:540px;overflow:hidden;">
            <div data-p="68.75">
                <img data-u="image" src="img/hinhnen1.jpg"  />
                            </div>
            <div data-p="68.75" data-po="70% 50%">
                <img data-u="image" src="img/hinhnen3.jpg".jpg"  />
                <div data-u="caption" data-t="8" style="position:absolute;top:25px;left:30px;width:40px;height:200px;z-index:0;background-color:#006800;font-size:20px;"></div>
            </div>
            <div data-p="68.75">
                <img data-u="image" src="img/hinhnen4.jpg"  />
                <div data-u="caption" data-t="14" style="position:absolute;top:90px;left:75px;width:150px;height:70px;z-index:0;">
                    </div>
            </div>
        </div>
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>        
            </div>
            <div id="right">
            <a href="#"><img src="img/b_chuyennghiep.jpg" width="200" /></a><br /><br />
            <a href="#"><img src="img/b_sanpham.jpg"  width="200"/></a><br /><br />
            <a href="#"><img src="img/b_freeship.jpg" width="200"/></a><br /><br />
            <a href="#"><img src="img/b_antoan.jpg" width="200"/></a>
            </div>
        </div>
</div>