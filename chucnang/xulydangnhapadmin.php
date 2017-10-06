<?php
/**
 * Created by PhpStorm.
 * User: Thuan
 * Date: 6/3/2017
 * Time: 11:48 AM
 */
if(!isset($_SESSION)) {
    session_start();
}
?>
<?php
include ('../ketnoi/connectmuscle.php');
if(isset($_POST['userAd']))
{

    $userAd = $_POST['userAd'];
    $passAd = $_POST['passwordAd'];
    if($userAd == "" || $passAd == "")
    {
        echo "<script>alert('Xin vui lòng điền đầy đủ thông tin !!!')</script>";
        echo "<script>location.href='../admin/index.php'</script>";
    }
    $sql = "SELECT * FROM admin WHERE userAd = '$userAd' and passwordAd = '$passAd'";
    $kq = mysql_query($sql);
    if( mysql_num_rows($kq) == 1)
    {
        $nhanusername = mysql_fetch_array($kq);
        $_SESSION['userAd'] = $nhanusername['userAd'];
        echo "<script>alert('Đăng nhập thành công !!!')</script>";
        echo "<script>location.href='../admin/index.php'</script>";

    }
    else
    {
        echo "<script> alert('Tài khoản hoặc mật khẩu không chính xác !!!')</script>";
        echo "<script>location.href='../admin/index.php'</script>";

    }

}
?>
