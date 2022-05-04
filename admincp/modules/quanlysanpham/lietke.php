<?php
	$sql_lietke = " SELECT * FROM products";
	$query_lietke= mysqli_query($conn,$sql_lietke);
?>



<p>Liệt kê danh mục</p>
<table border="1" width="50%" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên </th>
    <th>Giá</th>
    <th>Hình ảnh</th>
    <th>Id danh muc </th>
    <th>Thao tác</th>
  </tr>
<?php
	$i=0;
	while($row= mysqli_fetch_array($query_lietke)){
		$i++;
?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['Name'] ?></td>
    <td><?php echo $row['Price'] ?></td>
    <td><img src="modules/quanlysanpham/hinhanh/<?php echo $row['Image'] ?>"></td>
    <td><?php echo $row['menuId'] ?></td>
    <td>
    		<a href="modules/quanlysanpham/xuly.php?iddanhmuc=<?php echo $row['Id']?>">Xóa</a>|
    		<a href="?act=quanlysanpham&query=sua&iddanhmuc=<?php echo $row['Id']?>">Sửa</a>
    </td>
  </tr>
  <?php
}
?>
</table>