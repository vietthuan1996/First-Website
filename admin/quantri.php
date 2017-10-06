<?php
	include('../ketnoi/connectmuscle.php');
	function DanhSachChungLoai()
	{
		$sql = "select * from chungloaisp";
		return mysql_query($sql);
	}
	function ChiTietChungLoai($idCL)
	{
		$sql = "select * from chungloaisp where idCL = '$idCL'";
		$row = mysql_query($sql);
		return mysql_fetch_array($row);
	}
	function DanhSachLoaiSP()
	{
		$truyvanloaisp = "select * from chungloaisp,loaisp where chungloaisp.idCL = loaisp.idCL";
		return mysql_query($truyvanloaisp);
	}
	function ChiTietLoaiSP($idLoai)
	{
		$truyvanchitietloaisp = "select * from chungloaisp,loaisp
		 where chungloaisp.idCL = loaisp.idCL and loaisp.idLoai = '$idLoai'";
		 $row_loaisp = mysql_query($truyvanchitietloaisp);
		 return mysql_fetch_array($row_loaisp);
		
	}
	function DanhSachSanPham()
	{
		$truyvansanpham = "select * from chungloaisp,loaisp,sanpham
							 where chungloaisp.idCL = loaisp.idCL 
							 and loaisp.idLoai = sanpham.idLoai ";
		return $truyvansanpham;
	}
	function ChiTietSanPham($idSP)
		
	{
		$truyvanchitietsp = "select * from chungloaisp,loaisp,sanpham
							 where chungloaisp.idCL = loaisp.idCL 
							 and loaisp.idLoai = sanpham.idLoai
							 and sanpham.idSP = '$idSP' ";
		$ketquatruyvansanpham = mysql_query($truyvanchitietsp);
		return mysql_fetch_array($ketquatruyvansanpham);
	}
	function DanhSachDonHang()
	{
		$truyvandonhang = "select * from donhang";
		return mysql_query($truyvandonhang);
	}
	function ChiTietDonHang($idDonHang)
    {
        $truyvanchitietdonhang = "select * from chitietdonhang where idDonHang = '$idDonHang'";
        return mysql_query($truyvanchitietdonhang);

    }
	function ThanhVien()
	{
		$truyvanthanhvien = "select * from user ";
		return mysql_query($truyvanthanhvien);
	}
 ?>