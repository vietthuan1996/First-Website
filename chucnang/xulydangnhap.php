
<?php
	if(!isset($_SESSION)){
	session_start();
	}?>
<div id="xulydangnhap"><?php 
		include ('ketnoi/connectmuscle.php');
		if(isset($_POST['username']))
		{
			
			$user = $_POST['username'];
			$pass = $_POST['password'];
			if($user == "" || $pass == "")
			{
				echo "<script>alert('Xin vui lòng điền đầy đủ thông tin !!!')</script>";
				echo "<script>location.href='index.php?pid=2'</script>";
			}
			$sql = "select * from user where username = '$user' and password = '$pass'";
			$kq = mysql_query($sql);
			if( mysql_num_rows($kq) == 1)
			{
				$nhanusername = mysql_fetch_array($kq);
				$_SESSION['username'] = $nhanusername['username'];
				echo "<script>alert('Đăng nhập thành công !!!')</script>";
				echo "<script>location.href='index.php'</script>";
					
			}
				else
				{
					echo "<script> alert('Tài khoản hoặc mật khẩu không chính xác !!!')</script>";
					echo "<script>location.href='index.php?pid=2'</script>";

				}
				
			}
	 ?>
</div>