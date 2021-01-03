<?php
	include('../config.php');
		$hieu=$_POST['hieu'];
		$id=$_GET['id'];
		
	if(isset($_POST['them'])){
		//them
		
		$sql="insert into hieu(tenhieu) value('$hieu')";
		mysql_query($sql);
		header('location:../../admin.php?quanly=hieu&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql="update hieu set tenhieu='$hieu' where product_brand='$id'";
		mysql_query($sql);
		header('location:../../admin.php?quanly=hieu&ac=sua&id='.$id);
	}else{
	//xóa
	$sql="delete from hieu where product_brand='$id'";
	mysql_query($sql);
	header('location:../../admin.php?quanly=hieu&ac=them');
	}
