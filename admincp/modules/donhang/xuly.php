<?php
	include('../config.php'); 
	$id = $_GET['id'];
	$act = $_GET['act'];
	$num = 1;
	if($act == "done")
	{
		$query = "update cart set cart.cart_status = '$num' where cart.id = '$id'";
		$q = "select product_id, quantity from cart_detail where cart_detail.cart_id = '$id'";
		$q2 = mysql_query($q);
		while($q1 = mysql_fetch_array($q2))
		{
			$temp1 = $q1['product_id'];
			$temp2 = $q1['quantity'];
			$num_inventory = mysql_fetch_array(mysql_query("select product_inventory from products where products.product_id = '$temp1'"));
			$q3 = $num_inventory['product_inventory'] - $temp2;
			mysql_query("update products set products.product_inventory = '$q3' where products.product_id = '$temp1'");
		}

	}
	else
	{
		$query = "delete from cart where cart.id = '$id'";
	}
	mysql_query($query);
	header('location:../../admin.php?quanly=donhang&ac=lietke');
?>