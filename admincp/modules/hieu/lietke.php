<?php
	
	$sql="select * from hieu order by product_brand asc ";
	$loai=mysql_query($sql);
?>
<table width="268" height="124" border="1">
  <tr>
    <td colspan="4"><div align="center">Liệt kê Hiệu</div></td>
  </tr>
  <tr>
    <td width="60">ID</td>
    <td width="56">Tên Hiệu</td>
    <td colspan="2">Quản lý</td>
  </tr>
    <?php
   	$i=0;
  	while($dong=mysql_fetch_array($loai)){
  ?>
  <tr>

    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenhieu'] ?> </td>
    <td width="25"><a href="admin.php?quanly=hieu&ac=sua&id=<?php echo $dong['product_brand'] ?>">Sửa</a></td>
    <td width="170"><a href="modules/hieu/xuly.php?id=<?php echo $dong['product_brand'] ?>">Xóa</a></td>
  </tr>
  <?php
  $i++;
	}
  ?>
</table>

