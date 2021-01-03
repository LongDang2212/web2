<?php
	$tenmaychu="localhost";
	$tentaikhoan="root";
	$pass="";
	$csdl="banhang1";
	$con=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl)or die('cant connect');
	mysql_select_db($csdl,$con);
	mysql_query("set names 'utf8'");
?>