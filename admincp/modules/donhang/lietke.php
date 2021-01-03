<?php
$sql = "select cart.id,cart.cart_status,products.product_id,cart_detail.product_id,product_title, fullname,date,cart_id,quantity,price from cart,cart_detail,products where products.product_id=cart_detail.product_id and cart_detail.cart_id=cart.id";
?>
<table width="100%" border="1">
  <tr>
    <td colspan="7">
      <div style="text-align: center; font-size: 24px"  >Liệt kê đơn hàng</div>
    </td>
  </tr>
  <tr>
    <td colspan="7">
      <div style="text-align: center; font-size: 20px">Đơn hàng chưa duyệt</div>
    </td>
  </tr>
 
  <tr>
    <td>Mã đơn hàng</td>
    <td>Tên người mua</td>
    <td>Sản phẫm</td>
    <td>Số lượng</td>
    <td>Giá</td>
    <td>Ngày đặt</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $run_cart1 = mysql_query($sql);
  while ($dong_cart = mysql_fetch_array($run_cart1)){
    $i = 1;
  if ($dong_cart['cart_status']==0) {
  ?>
    <tr>
      <td align="center">don_hang_<?php echo $dong_cart['id'] ?></td>
      <td><?php echo $dong_cart['fullname'] ?></td>
      <td><?php echo $dong_cart['product_title']; ?></td>
      <td><?php echo $dong_cart['quantity'] ?></td>
      <td><?php echo $dong_cart['price'] ?></td>
      <td><?php echo $dong_cart['date'] ?></td>
      <td><a href="modules/donhang/xuly.php?act=done&id=<?php echo $dong_cart['id'] ?>">Duyệt</a></td>
      <td><a href="modules/donhang/xuly.php?act=del&id=<?php echo $dong_cart['id'] ?>">Xóa</a></td>
    </tr>
  <?php
    
  }
  }?>
  <tr>
    <td colspan="7">
      <div style="text-align: center; font-size: 20px">Đơn hàng đã duyệt</div>
    </td>
  </tr>
  <tr>
    <td>Mã đơn hàng</td>
    <td>Tên người mua</td>
    <td>Sản phẫm</td>
    <td>Số lượng</td>
    <td>Giá</td>
    <td>Ngày đặt</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $run_cart2 = mysql_query($sql);
  while ($dong_cart = mysql_fetch_array($run_cart2)){
  if ($dong_cart['cart_status']==1) {
    ?>
    <tr>
    <td align="center">don_hang_<?php echo $dong_cart['id'] ?></td>
      <td><?php echo $dong_cart['fullname'] ?></td>
      <td><?php echo $dong_cart['product_title']; ?></td>
      <td><?php echo $dong_cart['quantity'] ?></td>
      <td><?php echo $dong_cart['price'] ?></td>
      <td><?php echo $dong_cart['date'] ?></td>
      <td><a href="modules/donhang/xuly.php?act=del&id=<?php echo $dong_cart['id'] ?>">Xóa</a></td>
    </tr>
  <?php
  }
}
  ?>

</table>