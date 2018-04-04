<?php virtual('/osc/Connections/osc.php'); ?>
<?php
$d=$_GET['id'];
if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
	
  $deleteSQL = "DELETE FROM order_details WHERE order_id='$d'";
  $Result1 = mysqli_query($osc,$deleteSQL);

}
?>
<script language="javascript">
window.location="orders.php";
</script>