<?php require_once('../Connections/osc.php'); ?>
<?php
include_once('..\class\category.php');
$id=$_GET['id'];
$sql="delete from category_details where category_id=$id";
$res=mysqli_query($osc,$sql);
?>
<script language="javascript">
window.location='catogory.php';
</script>