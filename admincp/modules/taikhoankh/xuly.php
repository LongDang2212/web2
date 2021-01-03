<?php
	include('../config.php');
	$id=$_GET['id'];
	$customer_name=$_POST['name'];
	$customer_email=$_POST['email'];
	$customer_pass=$_POST['pass'];
	$customer_contact=$_POST['sdt'];
	$customer_address=$_POST['address'];
	
if(isset($_POST['sua'])){
	//sua
	
	$sql="update customers set customer_name = '$customer_name', customer_email = '$customer_email',customer_pass = '$customer_pass',customer_contact = '$customer_contact', customer_address = '$customer_address'  where customer_id='$id'";
	
	mysql_query($sql);
	header('location:../../admin.php?quanly=taikhoankh&ac=lietke');
}else{
//xóa
$sql="delete from customers where customer_id='$id'";
mysql_query($sql);
header('location:../../admin.php?quanly=taikhoankh&ac=lietke');
}
?>