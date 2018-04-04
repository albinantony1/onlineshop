<?php
if (!isset($_SESSION)) {
  session_start();
}
if(!isset($_SESSION['MM_Username']))
{
	header("location:../index.php");
}
?>
<?php
require_once('../Connections/osc.php');
//include_once("class/dbase.php");
$pid=$_GET['id'];
$uid=$_SESSION['MM_Username'];
$sql1="SELECT * FROM `product_details` WHERE `product_id`='$pid'";

		$res1=mysqli_query($osc,$sql1);
		$row=mysqli_fetch_array($res1);
		$qty=$row['quantity'];
		if($qty<1)
		{
			?>
			<script language="javascript">
			alert('no item available');
		window.location='index.php';
		</script>
			<?php
		}
		else
		{
			$qt=$qty-1;
			
		$sql2="UPDATE `product_details` SET `quantity`='$qt' WHERE `product_id`='$pid'";
	    $res2=mysqli_query($osc,$sql2);
		
		$sql="insert into cart(username,product_id,quantity) values('$uid','$pid','1')";
	    $res=mysqli_query($osc,$sql);
			?>
			<script language="javascript">
		window.location='cart.php';
		</script>
			<?php
		}
?>




        