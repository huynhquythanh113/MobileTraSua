<?php
include("../../../config.php");
$tensp = $_POST['ten'];
$giasp = $_POST['gia'];
$menuid = $_POST['iddanhmuc'];
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
$hinhanh= time().'_'.$hinhanh;
if (isset($_POST['themdanhmuc'])){
	$sql_them = "INSERT INTO `products` (`Id`, `Name`, `Price`, `Image`, `menuId`) VALUES (NULL, '".$tensp."', '".$giasp."', '".$hinhanh."', '".$menuid."')";
	mysqli_query($conn,$sql_them);
	move_uploaded_file($hinhanh_tmp,'hinhanh/'.$hinhanh);
	header("location:../../index.php?act=danhmucsanpham&query=them");
}else if (isset($_POST['suadanhmuc'])){
	$sql_sua= "UPDATE `products` SET `Name`='".$tensp."',`Price`='".$giasp."',`Image`='".$hinhanh."',`menuId`='".$menuid."' WHERE Id='$_GET[iddanhmuc]'";
	if(mysqli_query($conn,$sql_sua)){
		move_uploaded_file($hinhanh_tmp,'hinhanh/'.$hinhanh);
		header("location:../../index.php?act=danhmucsanpham&query=them");
	}
	else {
		echo "asdasd";
	}

}


else {
	$id=$_GET['iddanhmuc'];
	$sql_xoa=" DELETE FROM products where Id='".$id."'";
	mysqli_query($conn,$sql_xoa);
header("location:../../index.php?act=danhmucsanpham&query=them");
}




?>