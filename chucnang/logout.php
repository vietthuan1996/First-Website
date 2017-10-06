<?php session_start(); ?>
<div>
	<?php	
	 if(isset($_SESSION['username']))
{
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	}
	echo "<script>alert('Đăng xuất thành công !!!')</script>";
	echo "<script>location.href='../index.php'</script>";
	 ?>
</div>
