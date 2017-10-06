<?php
include('../ketnoi/connectmuscle.php');
include('quantri.php')
?>
<?php
$idSP = $_GET['idSP'];
$sql = "DELETE FROM sanpham where idSP = '$idSP'";
mysql_query($sql);
header("location:listsanpham.php");
?>