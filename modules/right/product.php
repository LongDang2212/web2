
<?php
	
	$sql="select * from products ";
	$sanpham=mysql_query($sql);
?>
<p class="loai">Tất cả sản phẩm</p>
<ul>

<?php
while($row=mysql_fetch_array($sanpham)){
?>
             <li><a href="#">
                <?php
					echo '<img src="admincp/modules/sanpham/uploads/'.$row['product_image'].'" width="120" height="150"/>';
					?>
                    <p>Tên sản phẩm: <?php echo $row['product_title'] ?></p>
                    <p>Giá: <?php echo $row['product_price'] ?> VNĐ</p>
                    <p style="color:#900;margin-left:20px;margin-top:5px;"><a href="index.php?xem=chitiet&id=<?php echo $row['product_id'] ?>" style="color:#09C;">Chi tiết</p></a>
                 
                </a></li>
               
            <?php
}
			?>
            <div class="clear"></div>
           
            </ul>
          