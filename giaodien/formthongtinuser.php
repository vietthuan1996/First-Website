<?php
/**
 * Created by PhpStorm.
 * User: Thuan
 * Date: 6/2/2017
 * Time: 11:26 AM
 */
if(isset($_GET["username"]))
{

    $username = $_GET["username"];
    $truyvanthongtin = "SELECT * FROM  user WHERE username = '$username'";
     $ketqua = mysql_query($truyvanthongtin);
    $row_thongtin = mysql_fetch_array($ketqua);
    ?>
    <div id="formthaydoi">
    <h1>Xin chào <?php echo $username ?></h1>
    <form action="../Laptrinhweb/chucnang/thaydoithongtin.php" method="post" name="formthaydoithongtin" >
        Tên tài khoản :<input type="text" name="username" readonly value="<?php echo $row_thongtin["username"] ?>"><br><br>
        Mật khẩu hiện tại :<input name="mkhientai" id="mkhientai" type="password"><br><br>
        Mật khẩu cần đổi:<input name="mkthaydoi" id="mkthaydoi" type="password"><br><br>
        Chứng thực mật khẩu:<input name="mkchungthuc" id="mkchungthuc" type="password"><br><br>
        Email:<input readonly type="text" name="email" value="<?php echo $row_thongtin["email"] ?>" ><br><br>
        Giới Tính:<input type="text" name="gioitinh" id="gioitinh" value="<?php echo $row_thongtin["gioitinh"] ?>" ><br><br>
        <input type="submit" name="btnThayDoi" id="btnThayDoi" value="Thay Đổi">

    </form>
    </div>
<?php
}
?>