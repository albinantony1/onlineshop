<?php
include_once('..\class\product_details.php');
$id=$_GET['id'];
$obj=new product_details();
$res=$obj->delete($id);
?>
<script language="javascript">
window.location='product.php';
</script>