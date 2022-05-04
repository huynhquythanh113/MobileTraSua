<?php 
include "../../../config.php";
$m= "Đã xác nhận";
$e = $_GET['iddanhmuc'];
	$sql= "UPDATE `bill` SET `oStatus` = '".$m."' WHERE `idbill` ='".$e."'";
	$query= mysqli_query($conn,$sql);
	header("location:http://localhost/AppShopTraSua/admincp/index.php?act=danhmucsanpham&query=hoadon");

?>