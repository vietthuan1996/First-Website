<table>
<?php
require('connect.php');
$sql = "select * from product";
$query = mysql_query($sql);

while($kq = mysql_fetch_assoc($query)){?>
	<tr>
    	<td>
        <a href="detail.php?id=<?php echo $kq['id'];?>"><?php echo $kq['name'];?></a>
        </td>
    </tr>	
<?php
}
?>
</table>