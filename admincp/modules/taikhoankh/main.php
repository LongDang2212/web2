<div class="content">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
			}
			if($tam=='lietke'){
				include('modules/taikhoankh/lietke.php');
			}
		else if($tam=='sua'){
			include('modules/taikhoankh/sua.php');
		}
			
	?>
</div>