<?php virtual('/osc/Connections/osc.php'); ?>
<?php

if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
	$id=$_GET['id'];
  $deleteSQL = "DELETE FROM cart WHERE cart_id='$id'";
  $Result1 = mysqli_query($osc,$deleteSQL);
 
}
?>

<script language="javascript">
window.location="cart.php"
</script>
