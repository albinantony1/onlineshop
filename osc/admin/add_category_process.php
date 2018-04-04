<?php require_once('../Connections/osc.php'); ?>
<?php
include_once('..\class\category.php');
$a=$_POST['txtcat'];
$sql="insert into category_details(category_name) values('$a')";
$res=mysqli_query($osc,$sql);
?>

<script language="javascript">
		window.location='catogory.php';
		</script>
