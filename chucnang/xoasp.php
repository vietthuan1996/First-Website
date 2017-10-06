<?php
session_start();
for($i = $_GET['vitri'];$i < $_SESSION['somathang'];$i++)
{
	$j = $i + 1;
	$_SESSION['tensp'.$i] = $_SESSION['tensp'.$j];
	$_SESSION['gia'.$i] = $_SESSION['gia'.$j];
	$_SESSION['soluong'.$i] = $_SESSION['soluong'.$j];
	$_SESSION['mota'.$i] = $_SESSION['mota'.$j];
	$_SESSION['hinh'.$i] = $_SESSION['hinh'.$j];
	$_SESSION['masp'.$i] = $_SESSION['masp'.$j];
	}
	$k = $_SESSION['somathang'];
	unset($_SESSION['tensp'.$k]);
	unset($_SESSION['gia'.$k]);
	unset($_SESSION['soluong'.$k]);
	unset($_SESSION['mota'.$k]);
	unset($_SESSION['hinh'.$k]);
	unset($_SESSION['masp'.$k]);
	$_SESSION['somathang']--;
	echo "<script language='javascript'>location.href='../index.php?pid=8&duongdan=1'</script>";

 ?>