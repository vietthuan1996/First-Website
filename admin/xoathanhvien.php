<?php
/**
 * Created by PhpStorm.
 * User: Thuan
 * Date: 7/5/2017
 * Time: 8:27 PM
 */
include('../ketnoi/connectmuscle.php');
include('quantri.php');

    $iduser = $_GET["iduser"];
    $xoathanhvien = "DELETE FROM user WHERE iduser = '$iduser'";
    mysql_query($xoathanhvien);
    header("location:listthanhvien.php");

?>