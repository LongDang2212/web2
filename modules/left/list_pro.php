<?php
$sgl1 = "select * from loai";
$run_loai = mysql_query($sgl1);
?>
<p class="loai">Loại</p>
<ul>
	<?php
	while ($dong = mysql_fetch_array($run_loai)) {
	?>
		<li><a href="index.php?xem=product_cat&id=<?php echo $dong['product_cat'] ?>"><?php echo $dong['tenloai'] ?></a></li>
	<?php
	}
	?>
</ul>
<?php
$sgl2 = "select * from hieu";
$run_hieu = mysql_query($sgl2);
?>
<p class="loai">Hiệu</p>
<ul>
	<?php
	while ($dong = mysql_fetch_array($run_hieu)) {
	?>
		<li><a href="index.php?xem=product_brand&id=<?php echo $dong['product_brand'] ?>"><?php echo $dong['tenhieu'] ?></a></li>

	<?php
	}
	?>
</ul>