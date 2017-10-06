<?php session_start();
if(! isset($_SESSION['somathang']))
{
	$_SESSION['somathang'] = 0;
	
	}
	include('ketnoi/connectmuscle.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Muscle Shop</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css"/>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/jssor.slider-23.0.0.mini.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="css_pirobox/style_1/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="content/css/default.css"/>
<link rel="stylesheet" type="text/css" href="css/sansation/stylesheet.css"/> 
<script type="text/javascript" src="js2/jquery.min.js"></script>
<script type="text/javascript" src="js2/jquery-ui-1.8.2.custom.min.js"></script>
<script type="text/javascript" src="js2/pirobox_extended.js"></script>
</head>

<body>

	<div id="container">
	<div id="header">
	<?php include ('giaodien/header.php'); ?></div>
    </div>
    <div id="container2">
    <?php
		if(! isset($_GET['pid']))
		{
			include ('giaodien/main.php');
			include ('giaodien/clear.php');
			include ('giaodien/main1.php');
			}
		else
		{
			$id = intval($_GET['pid']);
			switch($id)
			{
				case 1: include ('chucnang/dangky.php');break;
				case 2:
						if(isset($_SESSION['username']))
						{	
							header("location:index.php");
						}
						else
						{
							include ('giaodien/dangnhap.php');break;			
						}
				case 3: include ('chucnang/xulytimkiem.php');break;
				case 4: include ('chucnang/xulydangky.php');break;
				case 5: include ('chucnang/xulydangnhap.php');break;
				case 6: include ('chucnang/showsp.php');break;
				case 7: include ('chucnang/sptheoloai.php');break;
				case 8: include ('chucnang/xulydatsp.php');break;
				case 9: include ('chucnang/xulytimnc.php');break;
				case 10 : include('chucnang/xulychonsp.php');break;
				case 11 : include('giaodien/formdonhang.php');break;
				case 12:include('chucnang/xulydonhang.php');break;
                case 13:include ('giaodien/formthongtinuser.php');break;
				case 14:include ('giaodien/chitietsanpham.php');break;
				case 15 :include('giaodien/formquenmatkhau.php');break;
				case 16 :include('chucnang/xulyquenmatkhau.php');break;
				}
			}
		
	 ?>
        </div>
    <div style="clear: both"></div>
    <div id="footer" style="margin-top: 10px"><?php include ("giaodien/foot.php")?></div>
</body>
</html>