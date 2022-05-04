<?php
	include "../../../config.php";
	$e = $_GET['iddanhmuc'];
	$a= "Hủy đơn hàng";
	$sql="UPDATE bill SET oStatus ='".$a."' WHERE idbill='".$e."'";
	$query= mysqli_query($conn,$sql);
	header("location:http://localhost/AppShopTraSua/admincp/index.php?act=danhmucsanpham&query=hoadon");

?>