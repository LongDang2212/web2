<?php
	
	$sql="select loai.tenloai,hieu.tenhieu,product_id,product_inventory,product_historical_cost,products.product_cat,products.product_brand,product_title,product_price,product_desc,product_image,product_keywords from products,loai,hieu where products.product_cat=loai.product_cat and products.product_brand=hieu.product_brand ";
	$loai=mysql_query($sql);
?>
<table width="300" height="124" border="1">
  <tr>
    <td colspan="12"><div align="center">Liệt kê sản phẩm</div></td>
  </tr>
  <tr>
    <td width="30">ID</td>
    <td width="56">Tên sản phẩm</td>
    <td width ="56">Tồn kho</td>
    <td width="56">Hình </td>
    <td width="56">Historical cost</td>
    <td width="56">Price</td>
    <td width="56">Cat</td>
    <td width="56">Brand</td>
    <td width="56">Desc</td>
    <td width="56">Keywords</td>
    <td colspan="2">Quản lý</td>
  </tr>
    <?php
   	$i=0;
  	while($dong=mysql_fetch_array($loai)){
  ?>
  <tr>

    <td><?php echo $i; ?></td>
    <td><?php echo $dong['product_title'] ?> </td>
    <td><?php echo $dong['product_inventory'] ?> </td>
    <td><img src="modules/sanpham/uploads/<?php echo $dong['product_image'] ?>" width="40" height="40" /></td>
    <td><?php echo $dong['product_historical_cost'] ?></td>
    <td><?php echo $dong['product_price'] ?></td>
    <td><?php echo $dong['tenloai'] ?></td>
    <td><?php echo $dong['tenhieu'] ?></td>
    <td><button class="accordion">Click để hiện mô tả</button>
<div class="panel">
<?php echo $dong['product_desc'] ?>
</div></td>
    <td><?php echo $dong['product_keywords'] ?></td>
    <td width="25"><a href="admin.php?quanly=sanpham&ac=sua&id=<?php echo $dong['product_id'] ?>">Sửa</a></td>
    <td width="170"><a href="modules/sanpham/xuly.php?id=<?php echo $dong['product_id'] ?>">Xóa</a></td>
  </tr>
  <?php
  $i++;
	}
  ?>
</table>

