<?php require_once('../Connections/osc.php'); ?>

<?php
if (!isset($_SESSION)) {
  session_start();
}

?>
<?php
$uid=$_SESSION['MM_Username'];
$query_rscheck = "SELECT cart.cart_id, cart.quantity, product_details.title, product_details.price FROM cart, product_details WHERE cart.username='$uid' And cart.product_id= product_details.product_id";
$rscheck = mysqli_query($osc,$query_rscheck);
$row_rscheck = mysqli_fetch_assoc($rscheck);
$totalRows_rscheck = mysqli_num_rows($rscheck);
$pay=$_POST['RadioGroup1'];
?>

<?php   $amt=0;
$qt=0;
$count=1;
$d=date('d-m-y');
	   do{ 
       
$qt=$qt + $row_rscheck['quantity']; 
$cart_id=$row_rscheck['cart_id'];
echo $pd=$pd." ".$count.". ".$row_rscheck['title']; 
$dt=$row_rscheck['price'] * $row_rscheck['quantity']; 
              
$amt=$amt+$dt;         
$deleteSQL = "DELETE FROM cart WHERE cart_id=$cart_id";

  
  $Result1 = mysqli_query($osc,$deleteSQL);
$count++;
		 }while ($row_rscheck = mysqli_fetch_assoc($rscheck)); 
 if($pay=="Other")
 {
	 $stat="Pending Payment";
 }
 else
 {
 $stat="Processing";
 }
echo $sql="insert into order_details(product,quantity,amount,username,payment,status,date) values('$pd','$qt','$amt','$uid','$pay','$stat','$d')";

$Result1 = mysqli_query($osc,$sql);

	?>      

<script language="javascript">
		window.location='confirm.php';
		</script>


        <?php
mysqli_free_result($rscheck);
?>
