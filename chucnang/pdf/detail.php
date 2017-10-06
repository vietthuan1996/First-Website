<?php
require('connect.php');

$id = $_GET['id'];
$sql = "select * from product where id=$id";
$query = mysql_query($sql);
if($data = mysql_fetch_assoc($query)){?>
	<table>
    	<tr>
        	<td><img src='<?php echo 'images/'.$data['image'];?>' width="120" /></td>
            <td><?php echo $data['name'].'<br />'.$data['price'];?> <a href="viewpdf.php?id=<?php echo $data['id'];?>"><input type="button" value="View pdf" /></a></td>
        </tr>
        <tr>
        	<td colspan="2">
            	<?php echo $data['des'];?>
            </td>
        </tr>
    </table>
<?php
}
?>