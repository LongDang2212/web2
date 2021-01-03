<?php 
	$sql="select * from customers where customer_id=$_GET[id]"; 
	$hieu=mysql_query($sql);
	$dong=mysql_fetch_array($hieu);
?>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<form action="modules/taikhoankh/xuly.php?id=<?php echo $dong['customer_id'] ?>" method="post">
<table width="auto" border="1">
  <tr>
    <td colspan="2" align="center">Sửa tài khoản</td>
  </tr>
  <tr>
    <td>Tên khách hàng</td>
    <td>
    <input type="text" name="name" id="name" value="<?php echo $dong['customer_name'] ?>"></td>
    </tr>
    <tr>
      <td>Email</td>
    <td>
    <input type="text" name="email" id="email" value="<?php echo $dong['customer_email'] ?>"></td>
    </tr>
    <tr>
      <td>Password</td>
    <td>
    <input type="text" name="pass" id="pass" value="<?php echo $dong['customer_pass'] ?>"></td>
    </tr>
    <tr>
      <td>Số điện thoại</td>
    <td>
    <input type="text" name="sdt" id="sdt" value="<?php echo $dong['customer_contact'] ?>"></td>
    </tr>
    <tr>
      <td>Địa chỉ</td>
    <td>
    <input type="text" name="address" id="address" value="<?php echo $dong['customer_address'] ?>"></td>
    </tr>
  <tr>
    <td colspan="2">
    <input type="submit" name="sua" value="Sửa">    </td>
  </tr>
</table>
</form>