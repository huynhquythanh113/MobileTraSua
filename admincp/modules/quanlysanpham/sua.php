<?php
	$sql_sua = " SELECT * FROM products where Id='$_GET[iddanhmuc]' LIMIT 1";
	$query_sua= mysqli_query($conn,$sql_sua);
?>
<p>Sửa danh mục</p>
<table border="1" width="50%" style="border-collapse: collapse;">
  <form method="POST" action="modules/quanlysanpham/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" enctype="multipart/form-data">
  	<?php
  	while($dong=mysqli_fetch_array($query_sua) ){
  	?>
  <tr>
    <th>Tên danh mục</th>
    <th>Giá danh mục</th>
    <th>Thao tác </th>
  </tr>
  <tr>
    <td ><input   type="text" name="ten" value="<?php echo $dong['Name'] ?>"></td>
    <td><input   type="text" name="gia" value="<?php echo $dong['Price'] ?>"></td>
    <td><input   type="file" name="hinhanh" value="<?php echo $dong['Image'] ?>"></td>
    <td><input   type="text" name="iddanhmuc" value="<?php echo $dong['menuId'] ?>"></td>
    <td><input type="submit" name="suadanhmuc" value="Sửa"></td>
  </tr>
<?php }
?>
 </form>
</table>