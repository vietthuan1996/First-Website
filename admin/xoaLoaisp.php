<?php 
include('../ketnoi/connectmuscle.php');
include('quantri.php')
?>
<?php
	$idLoai = $_GET['idLoai'];
	$sql = "DELETE FROM loaisp where idLoai = '$idLoai'";
	mysql_query($sql);
	header("location:listloaisp.php");
 ?>