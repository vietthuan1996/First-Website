<?php
	session_start();
	for($i = 1; $i <= $_SESSION['somathang'];$i++)
	{
		if($_POST['C'.$i] =="" || $_POST['C'.$i] <= 0)
		{
			$_SESSION['soluong'.$i] = 1;
			}
			else{
				$_SESSION['soluong'.$i] = $_POST['C'.$i];
				}
		}
		echo "<script language='javascript' >location.href='../index.php?pid=8&duongdan=1';</script>";
 ?>