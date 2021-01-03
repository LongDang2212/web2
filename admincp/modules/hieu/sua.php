<?php
	$sql="select * from hieu where product_brand=$_GET[id]"; 
	$hieu=mysql_query($sql);
	$dong=mysql_fetch_array($hieu);
?>
<form action="modules/hieu/xuly.php?id=<?php echo $dong['product_brand'] ?>" method="post">
<table width="200" border="1">
  <tr>
    <td colspan="2">Sửa Hiệu</td>
  </tr>
  <tr>
    <td>Hiệu</td>
    <td>
    <input type="text" name="hieu" id="hieu" value="<?php echo $dong['tenhieu'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2">
    <input type="submit" name="sua" value="Sửa">    </td>
  </tr>
</table>
</form>



