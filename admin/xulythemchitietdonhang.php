

<?php
include('../ketnoi/connectmuscle.php');
$tensp = $_GET["tenSP"];
 $p = $_GET["page"];
$iddonhang = $_GET["idDonHang"];
if(!isset($p))
{
    $p = 1;
}
else
{
    $p = $_GET["page"];
}
$sodong = 4;
$x = ($p - 1)*$sodong;
$truyvanchitietsp = "SELECT * FROM sanpham WHERE tenSP like'%$tensp%' LIMIT $x,$sodong";
$ketquachitiet = mysql_query($truyvanchitietsp);

while($row_chitiet = mysql_fetch_array($ketquachitiet))
{
 ?>
    <div>
        <img src="../img/<?php echo $row_chitiet["UrlHinh"] ?>" width="200px"><br>
        <span><?php echo $row_chitiet["tenSP"] ?></span><br>
        <span><?php echo $row_chitiet["Gia"] ?></span><br>
        <a ><input type="button" value="Chọn"></a>
    </div>
<?php } ?>
<?php
$nhom =3;
$dau = floor(($p - 1)/$nhom)*$nhom +1;
$cuoi = $dau + $nhom -1;
$truyvanchitietsp2 = "SELECT * FROM sanpham WHERE tenSP like'%$tensp%'";
$ketquachitiet2 = mysql_query($truyvanchitietsp2);
$tongsotrang = ceil(mysql_num_rows($ketquachitiet2)/$sodong);
if($cuoi > $tongsotrang)
{
    $cuoi = $tongsotrang;
}

for($i = $dau;$i <= $cuoi;$i++)
{
    if($i == $p)
    {
       ?>
       <button  onclick="showHint('<?php echo $tensp ?>',<?php  echo $i ?>)"  ><?php  echo $i ?></button>
       <?php
    }
    else
    {
     ?> 
            <button  onclick="showHint('<?php echo $tensp ?>',<?php  echo $i ?>)"  ><?php  echo $i ?></button>
    <?php
    }
}
?>

    <script>

		function showHint(str,page) {

			if (str.length == 0) { 
				document.getElementById("txtHint").innerHTML = "";
				return;
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("sanpham").innerHTML = this.responseText;
					}
				};
				xmlhttp.open("GET", "xulythemchitietdonhang.php?tenSP=" + str+"&page="+page, true);
				xmlhttp.send();
			}
	}


    </script>



   