
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
.table&amp;amp;gt;tbody&amp;amp;gt;tr&amp;amp;gt;td, .table&amp;amp;gt;tfoot&amp;amp;gt;tr&amp;amp;gt;td {  
vertical-align: middle;
}

#giaodiengiohang{
	width:960px;
	margin:auto;
	}
@media screen and (max-width: 600px) { 
table#cart tbody td .form-control { 
width:20%; 
display: inline !important;
} 

#capnhat{
	float:left;
	}
.actions .btn { 
width:36%; 
margin:1.5em 0;
} 
 
.actions .btn-info { 
float:left;
} 
 
.actions .btn-danger { 
float:right;
} 
 
table#cart thead {
display: none;
} 
 
table#cart tbody td {
display: block;
padding: .6rem;
min-width:320px;
} 
 
table#cart tbody tr td:first-child {
background: #333;
color: #fff;
} 
 
table#cart tbody td:before { 
content: attr(data-th);
font-weight: bold; 
display: inline-block;
width: 8rem;
} 
 
table#cart tfoot td {
display:block;
} 
table#cart tfoot td .btn {
display:block;

}
}
</style>
</head>

<body>
<?php

	include('ketnoi/connectmuscle.php');
	if(isset($_GET['masp']))
	{
		$kiemtra = 0;
		for($i = 1;$i <= $_SESSION['somathang'];$i++)
		{
			if($_GET['masp'] == $_SESSION['masp'.$i])
			{
				$_SESSION['soluong'.$i] += $_GET['soluong'];
				$kiemtra = 1;
				break;
			}
		}
		
	if($kiemtra == 0)
	{
		$mahang = $_GET['masp'];
		$sql = "select * from sanpham where idSP = '$mahang'";
		$kq = mysql_query($sql);
		if(mysql_num_rows($kq) > 0)
		{
			$row = mysql_fetch_array($kq);
			$_SESSION['somathang']++;
			$i = $_SESSION['somathang'];
			$_SESSION['tensp'.$i] = $row['tenSP'];
			$_SESSION['gia'.$i] = $row['Gia'];
			$_SESSION['mota'.$i] = $row['Mota'];
			$_SESSION['hinh'.$i] = $row['UrlHinh'];
			$_SESSION['masp'.$i] = $row['idSP'];
			$_SESSION['soluong'.$i] = $_GET['soluong'];
		}
	}
	
     }
	if(isset($_SESSION['somathang']) && $_SESSION['somathang'] > 0 )
	{
 ?>
  <form name="formcapnhat" method="post" action="..\Laptrinhweb\chucnang\capnhatgiohang.php">
<div id="giaodiengiohang"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:50%">Tên sản phẩm</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:8%">Số lượng</th> 
    <th style="width:22%" class="text-center">Thành tiền</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
  <tbody>
  <?php
  	$tong = 0;
	for($i = 1;$i <= $_SESSION['somathang'];$i++){
   ?>
  <tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="img/<?php echo $_SESSION['hinh'.$i] ?>"  class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin"><?php echo $_SESSION['tensp'.$i] ?></h4> 
      <p><?php echo $_SESSION['mota'.$i] ?></p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price"><?php echo number_format($_SESSION['gia'.$i],'0',',','.')  ?> đ</td>
   <td data-th="Quantity"><input class="form-control text-center" name="C<?php echo $i ?>" value="<?php echo $_SESSION['soluong'.$i] ?>" type="number">
   </td> 
   <td data-th="Subtotal" class="text-center"><?php echo number_format($_SESSION['gia'.$i]*$_SESSION['soluong'.$i],'0',',','.')  ?> đ</td>
   <td class="actions" data-th="">
    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
    </button> 
    <a href="../Laptrinhweb/chucnang/xoasp.php?vitri=<?php echo $i ?>"><button  type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
    </button></a>
    
   </td> 
  </tr>
  <?php 
  	$tong += $_SESSION['gia'.$i]*$_SESSION['soluong'.$i];
	}
   ?>  
  </tbody><tfoot> 
   <tr>
  
    <td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
    </td> 
    <td><button type="submit" name="capnhat" class="btn btn-warning" ><i class="fa fa-pencil" aria-hidden="true"></i>Cập nhật mua hàng</button> </td>
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong>Tổng tiền <?php echo number_format($tong,0,',','.') ?> đ</strong>
    </td> 
    <td><a href="index.php?pid=11" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
  </tfoot> 
 </table>
</div>
</form>
<?php }
if($_SESSION['somathang'] == 0)
{
?>
<script>
	alert("Bạn đã xóa hết sản phẩm, xin vui lòng chọn sản phẩm");
	location.href="index.php";
</script>
<?php }
	?>

</body>
</html>
