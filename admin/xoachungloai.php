<?php
ob_start();
session_start();
include('../ketnoi/connectmuscle.php');
include('quantri.php')
 ?>
<?php
	$idCL = $_GET['idCL'];
	$sql = "DELETE FROM chungloaisp where idCL = '$idCL'";
	mysql_query($sql);
	header("location:listchungloai.php");
 ?>