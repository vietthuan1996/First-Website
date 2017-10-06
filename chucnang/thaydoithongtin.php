<?php
/**
 * Created by PhpStorm.
 * User: Thuan
 * Date: 6/2/2017
 * Time: 11:22 AM
 */
include ("../ketnoi/connectmuscle.php");
if(isset($_POST["btnThayDoi"]))
{
    $username = $_POST["username"];
    $matkhauht = $_POST["mkhientai"];
    $matkhaucd = $_POST["mkthaydoi"];
    $matkhauct = $_POST["mkchungthuc"];
    $gioitinh  = $_POST["gioitinh"];

    if(empty($matkhauht) ||empty($matkhauct)||empty($matkhaucd)||empty($gioitinh))
    {
        ?>
        <script>
            alert("Không được để trống dữ liệu !!");
            location.href="../index.php?pid=13&username=<?php echo $username ?>";
        </script>
        <?php

    }


    $kiemtramkht = "SELECT * FROM user WHERE password = '$matkhauht' AND username = '$username'";
    $ketquamkht = mysql_query($kiemtramkht);
    if(mysql_num_rows($ketquamkht)== 0) {
        ?>
        <script>
            alert("Vui lòng kiểm tra mật khẩu hiện tại !!");
            location.href="../index.php?pid=13&username=<?php echo $username ?>";
        </script>
        <?php
    }

     if($matkhaucd != $matkhauct) {
        ?>
        <script>
            alert("Xác thực mật khẩu không đúng !!");
            location.href="../index.php?pid=13&username=<?php echo $username ?>";
        </script>
        <?php
    }
        if($matkhauct == $matkhaucd && mysql_num_rows($ketquamkht) == 1) {
            $thaydoithongtin = "UPDATE user SET
                            password = '$matkhaucd',
                            gioitinh = '$gioitinh'
                            WHERE username = '$username'
        ";
            $ketquathaydoi = mysql_query($thaydoithongtin);
            if ($ketquathaydoi == 1) {
                ?>
                <script>
                    alert("Thay đổi thành công !!");
                    location.href = "../index.php?pid=13&username=<?php echo $username ?>";
                </script>
                <?php
            }
        }



}
?>