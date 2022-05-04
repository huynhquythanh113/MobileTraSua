<?php

$sql="SELECT * FROM bill";
$query= mysqli_query($conn,$sql);

?>
<p>Liệt kê danh mục</p>
<table border="1" width="50%" style="border-collapse: collapse;">
  <tr>
  <th>Id</th>
    <th>Tên</th>
    <th>Sdt </th>
    <th>Địa chỉ</th>
    <th>List order</th>
    <th>Comment</th>
    <th>Tổng tiền</th>
    <th>Date</th>
    <th>Status</th>
  </tr>
<?php
	$i=0;
	while($row= mysqli_fetch_array($query)){
		$i++;
?>
  <tr>
  <td><?php echo $row['idbill'] ?></td>
    <td><?php echo $row['oName'] ?></td>
    <td><?php echo $row['oPhone'] ?></td>
    <td><?php echo $row['oAddress'] ?></td>
    <td><?php echo $row['oDetail'] ?></td>
    <td><?php echo $row['oCmt'] ?></td>
    <td><?php echo $row['oTongtien'] ?></td>
    <td><?php echo $row['oDate'] ?></td>
    <td><?php echo $row['oStatus'] ?></td>
    <td>
    	<?php if($row['oStatus']=='Chua xac nhan'){ ?>
    		<a href="modules/quanlysanpham/xoa.php?iddanhmuc=<?php echo $row['idbill']?>">Hủy</a>
    		<a href="modules/quanlysanpham/xacnhan.php?iddanhmuc=<?php echo $row['idbill']?>">Xác nhận</a>
    	<?php 
    			}
   			else if($row['oStatus'] == 'Đã xác nhận') {
    	?>
    		<a href="modules/quanlysanpham/xoa.php?iddanhmuc=<?php echo $row['idbill']?>">Hủy</a>
    		<a href="modules/quanlysanpham/dalayhang.php?iddanhmuc=<?php echo $row['idbill']?>">Đã lấy hàng</a>
    	<?php }else if($row['oStatus'] == 'Đã lấy hàng') { ?>
        <a href="modules/quanlysanpham/xoa.php?iddanhmuc=<?php echo $row['idbill']?>">Hủy</a>
    		<a href="modules/quanlysanpham/giaothanhcong.php?iddanhmuc=<?php echo $row['idbill']?>">Giao thành công</a>
        <?php }else if($row['oStatus'] == 'Giao thành công') { ?>
            Hoàn tất
          <?php } else { ?>
              Thất bại
            <?php } ?>
    </td>
  </tr>
  <?php
}
?>
</table>