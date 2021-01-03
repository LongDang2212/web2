<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css.css" />
<title>Trang quản trị LaptopBK</title>
<style>
.accordion {
  cursor: pointer;
  padding: 18px;
  width: 100%;
  height: au;
  border: none;
  text-align: left;
  outline: none;
  font-size: 14px;
  transition: 0.4s;
}
.active, .accordion:hover {
  background-color: #ccc;
}
.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
</head>
<?php
	session_start();
?>
<body>
	<p align="right" style="color:#063;font-size:18px;text-decoration:underline;" >Xin chào: <?php
	
	if(isset($_SESSION['username'])){
	echo $_SESSION['username'];
}

?> !</p>
	<p align="right" style="color:#063;font-size:18px;text-decoration:underline;" >Quyền quản trị: <?php
	
	if($_SESSION['user_level']==1)
	{
		echo "Admin";
	}
	else
	{
		echo "Stamp";
	}

?> !</p>
	
<div class="wrapper">
	<?php
		include('modules/config.php');
		include('modules/header.php');
		include('modules/menu.php');
		include('modules/content.php');
		include('modules/footer.php');
	?>
   
  
     
   
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>
</html>