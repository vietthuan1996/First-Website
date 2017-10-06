
<div id="banner"><img src="img/banner.jpg" width="300" height="100" />
<div id="sreach">
	<form action="index.php" method="get">
    <input type="hidden" name="pid" value="3" />
    <input onclick="this.value='';" name="tim" type="text" id="tim" value="Xin mời tìm kiếm sản phẩm" />
    <input type="submit" value="Tìm"  />
    </form>
    
  </div>
  <div class="signup-login">
  	<a href="index.php?pid=1">Đăng ký</a>
    
    	<?php
			if(!isset($_SESSION['username']))
			{
				 ?>
				<a href="index.php?pid=2">Đăng nhập
				
				<?php 
			}else
				{
					echo "Xin Chào "  .$_SESSION['username']."<br>";
					?>
					<a href="..\Laptrinhweb\chucnang\logout.php">Click vào đây để đăng xuất</a><br>
                    <a href="index.php?pid=13&username=<?php echo $_SESSION["username"] ?>">Chỉnh sửa thông tin cá nhân</a>
                   <?php
					}
		 ?>
    </a>
  </div>
</div>
<div id="menu">
	<ul>
    	<li><a href="index.php">HOME</a></li>
    	<li><a href="#">GIỚI THIỆU</a></li>
        <li><a href="#">LIÊN HỆ</a></li>
        <li><a href="index.php?pid=6">MUSCLESHOP</a></li>
        <li><a href="#">MUSCLE EVENT</a></li>
    </ul>
</div>