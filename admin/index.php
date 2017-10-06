<?php
session_start();
ob_start();
include('../ketnoi/connectmuscle.php');
include('quantri.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Muscle Shop</title>
<link href="giaodien.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
<?php
    if(!isset($_SESSION["userAd"]))
    {
		include("formdangnhapad.php");
    }
    else{
?>
<div >
	<table width="1000px" border="1">
  <tr>
    <td id="tieude">Trang Quản Trị
        <h2>Chào mừng <?php echo $_SESSION["userAd"] ?> đến với trang quản trị</h2>

    </td>

  </tr>
  <tr>
    <td id="menu"><?php include('menu.php') ?></td>
  </tr>
  <tr>
    <td>
        <?php
        /*if(!isset($_GET["pid"]))
        {
            include ("index.php");
        }
        else
        {
            $pid = $_GET["pid"];
            $pid = intval($pid);
            switch ($pid)
            {
                case 1: include ("quantrichungloai.php");
            }
        }*/
        ?>

    </td>
  </tr>
</table>
    <a href="dangxuatadmin.php">Click vào đây để đăng xuất</a>
</div>
<?php }?>
</div>
</body>
</html>
