<?php
	$sql="select * from tintuc where id_baiviet='$_GET[id]' limit 1";
	$run_tintuc=mysql_query($sql);
	$row_tintuc=mysql_fetch_array($run_tintuc);
	echo $row_tintuc['noidung'];
?>