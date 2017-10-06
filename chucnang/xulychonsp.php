<?php
	if(isset($_POST["soluong"]))
	{
		$soluong = $_POST["soluong"];
	}
	else
	{
		$soluong = $_GET["soluong"];
	}
	if($soluong <= 0)
	{
		$soluong = 1;
	}
	else
	{
		$soluong = $soluong;
	}
	if(isset($_POST["masp"]))
	{
		$masp = $_POST["masp"];
	}
	else
	{
		$masp = $_GET["masp"];
	}
	
	include('ketnoi/connectmuscle.php');
	if(isset($masp))
	{
		$kiemtra = 0;
		for($i = 1;$i <= $_SESSION['somathang'];$i++)
		{
			if($masp == $_SESSION['masp'.$i])
			{
				$_SESSION['soluong'.$i] += $soluong;
				$kiemtra = 1;
				break;
			}
		}
		
	if($kiemtra == 0)
	{
		$mahang = $masp;
		$sql = "select * from sanpham where idSP = '$mahang'";
		$kq = mysql_query($sql);
		if(mysql_num_rows($kq) > 0)
		{
			$row = mysql_fetch_array($kq);
			$_SESSION['somathang']++;
			$i = $_SESSION['somathang'];
			$_SESSION['tensp'.$i] = $row['tenSP'];
			$_SESSION['gia'.$i] = $row['Gia'];
			$_SESSION['mota'.$i] = $row['Mota'];
			$_SESSION['hinh'.$i] = $row['UrlHinh'];
			$_SESSION['masp'.$i] = $row['idSP'];
			$_SESSION['soluong'.$i] = $soluong;
		}
	}
	
     }
	 header("location:index.php")
	 ?>