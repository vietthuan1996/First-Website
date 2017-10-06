<?php
require('connect.php');
require('library/mpdf.php');
$id = $_GET['id'];
$sql = "select * from product where id=$id";
$query = mysql_query($sql);
if($data = mysql_fetch_assoc($query)){
	$str = "<table>
    	<tr>
        	<td><img src='images/$data[image]' width='120' /></td>
            <td>$data[name]<br />$data[price]</td>
        </tr>
        <tr>
        	<td colspan='2'>$data[des]</td>
        </tr>
    </table>";

$mpdf=new mPDF(); 

$mpdf->WriteHTML($str);
$mpdf->Output();
exit;

}

?>