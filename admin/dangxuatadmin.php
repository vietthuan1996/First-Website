<?php session_start(); ?>
<div>
    <?php
    if(isset($_SESSION['userAd']))
    {
        unset($_SESSION['userAd']);
        unset($_SESSION['passwordAd']);
    }
    echo "<script>alert('Đăng xuất thành công !!!')</script>";
    echo "<script>location.href='index.php'</script>";
    ?>
</div>
