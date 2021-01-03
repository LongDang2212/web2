<?php
	$sql="select * from customers ";
	$run_cart=mysql_query($sql);
?>
<table width="100%" border="1" >
  <tr>
    <td colspan="8"><div align="center">Liệt kê tài khoản</div></td>
  </tr>
  <tr>
    <td>STT</td>
    <td>Tên khách hàng</td>
    <td>Email</td>
    <td>Password</td>
    <td>SĐT</td>
    <td>Địa chỉ</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  	$i=1;
  	while($dong_cart=mysql_fetch_array($run_cart)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong_cart['customer_name'] ?></td>
    <td><?php  echo $dong_cart['customer_email'];?></td>
    <td><?php  echo $dong_cart['customer_pass']?></td>
    <td><?php  echo $dong_cart['customer_contact']?></td>
    <td><?php  echo $dong_cart['customer_address']?></td>
    <td><a href="admin.php?quanly=taikhoankh&ac=sua&id=<?php echo $dong_cart['customer_id'] ?>">Sửa</a></td>
    <td><a href="modules/taikhoankh/xuly.php?id=<?php echo $dong_cart['customer_id'] ?>">Xóa</a></td>
  </tr>
  <?php
  $i++;
	}
  ?>
</table>