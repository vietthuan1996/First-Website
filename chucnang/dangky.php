
<?php
	include ('ketnoi/connectmuscle.php');
	$usererr = $emailerr =$gterr = $passerr = $prepasserr = "";
	$user = $email = $gt = $pass = $prepass = $captchaerr=   "";
	$kiemtra = 1;
	if(isset($_POST['dangky']))
	{
	if(empty($_POST['username']) && empty($_POST['email'])&& empty($_POST['password']) && empty($_POST['prepass']) && empty($_POST['macaptcha']))
	{
		$usererr = "Vui lòng nhập tài khoản";
		$emailerr = "Vui lòng nhập email";
		$passerr = "Vui lòng nhập tài khoản";
		$prepasserr = "Vui lòng nhập tài khoản";
		$gterr = "Vui lòng nhập giới tính";
		$captchaerr = "Vui lòng nhập mã captcha";
	}
	else
	{
		$user = $_POST['username'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$prepass = $_POST['prepassword'];
		$gt = $_POST['gioitinh'];
		//kiem tra tai khoan da dc su dung hay chưa
		$sql = "select * from user where username = '$user' ";
		$kq = mysql_query($sql);
		if(mysql_num_rows($kq) > 0)
		{	
			$usererr = "Tài khoản đã được sử dụng";
			$kiemtra = 0;
		}
		$sql = "select * from user where email = '$email' ";
		$kq = mysql_query($sql);
        $partten = "/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(\.[a-zA-Z]{2,12})+$/";
        $subject = $email;
        if(!preg_match($partten ,$subject, $matchs)) {
            $emailerr = "Mail bạn vừa nhập không đúng định dạng ";
            $kiemtra = 0;
        }
        if(mysql_num_rows($kq) > 0)
		{	
			$emailerr = "Email đã được sử dụng";
            $kiemtra = 0;
		}
		if($pass != $prepass)
		{
			$prepasserr = "Xác nhận mật khẩu không đúng";
            $kiemtra = 0;
			
		}
		if ($_SESSION['captcha'] !=$_POST['macaptcha'])
		{
			$captchaerr = "Mã captcha không đúng, xin vui lòng nhập lại";
            $kiemtra = 0;
		}
		if($kiemtra == 1)
		{
			$sql2 = "insert into user(username,password,email,gioitinh) values ('$user','$pass','$email','$gt') ";
			$kq2 = mysql_query($sql2);
			if($kq == true)
			{
			    $_SESSION["username"] = $user;
				echo "<script>alert('Đăng ký thành công !!!')</script>";
				echo "<script>location.href='index.php?pid=1'</script>";

			}

		}
	}
	}
 ?>

<div id="dangky">
<h2>ĐĂNG KÝ TÀI KHOẢN</h2>
<div id="dangky2">
<form id="form1" name="form1" method="post" action="">
  <p>Tài Khoản</p>
  <p>
    <label for="username"></label>
    <input type="text" name="username" id="username" /><br>
    <span class="error">*<?php echo $usererr ?> </span>
  </p>
  <p>Email</p>
  <p>
    <label for="email"></label>
    <input type="text" name="email" id="email" /><br>
    <span class="error">*<?php echo $emailerr ?> </span>
  </p>
  <p>Giới Tính</p>
  <p><select name="gioitinh">
  		<option value=""></option>
        <option value="nam">Nam</option>
        <option value="nu">Nữ</option>
  </select>
  <p>
  <span class="error">*<?php echo $gterr ?> </span>
  </p>
  </p>
  <p>Mật khẩu  </p>
  <p>
    <label for="email"></label>
    <input type="password" name="password" id="password" /><br>
    <span class="error">*<?php echo $passerr ?> </span>
  </p>
  <p>Nhập lại mật khẩu</p>
  <p>
    <label for="prepassword"></label>
    <input type="password" name="prepassword" id="prepassword" /><br>
    <span class="error">*<?php echo $prepasserr ?> </span>
  </p>
  <p>
  <span id="captcha1"><a href="#" onClick="
            document.getElementById('captcha').src='captcha/captcha.php?'+Math.random();
            document.getElementById('captcha-form').focus();"
            id="change-image"><img src="img/return.png"  style="margin-left:15px" width="30px" height="30px">Tôi không thể nhìn thấy!!</a></span>
               
          <img src="captcha/captcha.php" id="captcha" align="center" />
                     
  </p>
 <p>Nhập mã captcha</p>
  <p>
    <input type="text" name="macaptcha" id="macaptcha" /><br>
    <span class="error">*<?php echo $captchaerr ?> </span>
  </p>
 
  <p>
    <input type="submit" name="dangky" id="dangky" value="Đăng Ký" />
  </p>
  <p>&nbsp;</p></form>
</div>
</div>