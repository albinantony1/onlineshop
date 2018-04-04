<?php require_once('../Connections/osc.php'); ?>
<?php
include_once('../class/category.php');
$id=$_POST['h'];
$category_name=$_POST['category_name'];
$qry="update category_details set category_name='$category_name' where category_id=$id";
$res=mysqli_query($osc,$qry);
?>
<script language="javascript">
window.location='catogory.php';
</script>