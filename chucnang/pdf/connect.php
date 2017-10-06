<?php
$server="localhost";
$user="root";
$pass="";
$db="banquanao";
mysql_connect($server, $user, $pass) or die("khong the ket noi");
mysql_select_db($db);
mysql_query("SET NAMES 'utf8'");
?>