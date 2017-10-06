<div id="xulydangky">
<?php
	include ('ketnoi/connectmuscle.php');
	if(isset($_POST['username']) != "")
	{
		$user = $_POST['username'];
		$email = $_POST['email'];
		$gt = $_POST['gioitinh'];
		$pass = $_POST['password'];
		$prepass = $_POST['prepassword']; 
		if(!$user || !$email || !$gt || !$pass){
			echo "Xin vui long nhap day du thong tin . <a href='index.php?pid=1'>Về lại đăng ký</a>" ;
			exit;
			}
		if(mysql_num_rows(mysql_query("select userName from user where userName = '$user'"))){
			echo "Tên đăng nhập đã được sử dụng .<a href='index.php?pid=1'>Về lại đăng ký</a>";
			exit;
		}
		
		$sql = "insert into user(userName,password,email,gioiTinh) values ('$user','$pass','$email','$gt')";
		$kq = mysql_query($sql);
		if($kq){
			?>
			<script>
			alert("Dang ky thanh cong");
            </script>
         <?php
		}
		 else{ 
		  ?>
          <script>
			alert("Dang ky khong thanh cong");
            </script>

		<?php }}?>
</div>        
	