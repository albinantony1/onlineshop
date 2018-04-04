<?php require_once('../Connections/osc.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
include_once("class/dbase.php");
if(isset($_POST['button']))
{
$pid=$_POST['pid2'];
$qty1=$_POST['textfield'];

$sql1="SELECT * FROM `product_details` WHERE `product_id`='$pid'";
	$res1=mysqli_query($osc,$sql1);
		$row=mysqli_fetch_array($res1);
		$qty=$row['quantity'];
		if($qty>=$qty1)
		{
		$sql2="UPDATE `cart` SET `quantity`='$qty1' WHERE `product_id`='$pid'";
	    $res2=mysqli_query($osc,$sql2);
		}
		else
		{
		
		?>
		
			<script language="javascript">
			alert('no item available');
		window.location='cart.php';
		</script>
		<?php
		}
}?>	


<?php
$uid=$_SESSION['MM_Username'];
$query_rscart = "SELECT `product_details`.`product_id`,cart.cart_id, cart.quantity, product_details.title, product_details.price FROM cart, product_details WHERE cart.username='$uid' And cart.product_id= product_details.product_id";
$rscart = mysqli_query($osc,$query_rscart);
$row_rscart = mysqli_fetch_assoc($rscart);
if($row_rscart ==0)
	  	   {
		  header("location:cart_empty.php");
		   }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Electronix Store</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>


<title>JavaScript Cookies - Read Multiple Cookies</title>

<script language="JavaScript">

var items = new Array();

if (document.cookie && document.cookie !=""){process_cookie()}

function process_cookie(){
var whole_cookie = unescape(document.cookie);
var sans_name = whole_cookie.split("=");
if (sans_name[1] != null){
items = sans_name[1].split("xxx");
}//ends IF
}//ends process cookie () function

function remove(){
var new_cookie_stuff = "drop this";
if (document.orderform.stuff){


for (i = 0; i < document.orderform.stuff.length; i++){
if (document.orderform.stuff[i].checked == true){
new_cookie_stuff = new_cookie_stuff + document.orderform.stuff[i].value + "xxx";
}//ends if
}//endsFOR
}//ends IF

//clean up new cookie string
var clean_cookie_string_1 = new_cookie_stuff.split("drop this");

var clean_cookie_string = clean_cookie_string_1[1];

//write new cookie
if (clean_cookie_string != ""){
document.cookie = "stuff=" + escape(clean_cookie_string);
}//ends IF

if(clean_cookie_string == ""){kill_cookies()}

window.location = "samp174.htm";
}//ends remove()

function kill_cookies(){
var kill_date = new Date("January 1, 1970");
document.cookie = "stuff=stub;expires=" + kill_date.toGMTString();
}//ends kill cookies()

</script>

</head>
<body><div id="content"></div>

<div id="main_container">
	<div class="top_bar"></div>
	<div id="header">
        
        <div id="logo">
            <a href="index.php"><img src="images/logo.png" alt="" title="" border="0" width="237" height="140" /></a>
	    </div><!-- end of oferte_content-->
        

    </div>
    
   <div id="main_content"> 
   
            <div id="menu_tab">
            <div class="left_menu_corner"></div>
            <ul class="menu">
              <li><a href="index.php" class="nav1"> Home </a></li>
              <li class="divider"></li>
              <li></li>
              <li class="divider"></li>
              <li></li>
              <li class="divider"></li>
              <li></li>
              <li><a href="shipping.php" class="nav5">Shipping </a></li>
              <li class="divider"></li>
              <li><a href="about us.php" class="nav6">About Us</a></li>
              <li class="divider"></li>
              <li></li>
              <li><a href="contact.php" class="nav6">Contact Us</a></li>
              <li class="divider"></li>
              <li><a href="/osc/user/myaccount.php" class="nav6">My Account</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo $logoutAction ?>" class="nav6">Log Out</a>
                <?php 
if(isset($_SESSION['MM_Username'])) 
{
echo "<div id='User'>Welcome: " . $_SESSION['MM_Username'] . "</div>";
} 
else
{
echo "<div id='Guest'>Welcome: Guest </div>";
}
?>
              </li>
            </ul>
            <div class="right_menu_corner"></div>
            </div><!-- end of menu tab -->
            
    <div class="crumb_navigation">
    Navigation: <span class="current"><a href="index.php">Home</a></span>
    
    </div><!-- end of left content -->
   
   
   <div>
     <div class="center_title_bar">Your shopping Cart</div>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
      <table width="991" height="94" border="1">
       <tr>
         <th width="481" scope="col">Product Name</th>
         <th width="69" scope="col">Quantity</th>
         <th width="89" scope="col">Price</th>
         <th width="111" scope="col">Amount</th>
         <th width="123" scope="col">Update</th>
         <th width="78" scope="col">Remove</th>
        </tr>
       <?php 
	   $amt=0;
	   do{ ?>
       
         <tr>
           <td>&nbsp;&nbsp;<?php echo $row_rscart['title']; ?></td>
           <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form name="form" action="#" method="post">
       <input name="textfield" type="text" id="textfield" value="<?php echo $row_rscart['quantity']; ?>" size="2" maxlength="1" />
		   <input type="hidden" name="h" value="<?php echo $row_rscart['cart_id'];?>" /> 
           <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_rscart['price']; ?>
           <th><?php $dt=$row_rscart['price'] * $row_rscart['quantity']; 
		   echo $dt; ?></th>
           <input type="hidden" name="pid2" value="<?php echo $row_rscart['product_id'];?>">
                      <th><input type="submit" name="button" id="button" value="Update" />
                       
                     <th><a href="/osc/user/cart_delete.php?id=<?php echo $row_rscart['cart_id'];?>">X
                     </a>
              </form>
                     
          
         </tr>
         
         <?php 
		 $amt=$amt+$dt;
		 }while ($row_rscart = mysqli_fetch_assoc($rscart)); ?>
         <tr>
           <td colspan="2">&nbsp;           </td>
           <th>Total:</th>
           <th><?php echo $amt; ?></th>
           <td colspan="3">&nbsp;         </td>
         </tr>
     </table>
     <h4> <a href="index.php"><img src="images/continueshopingbutton.gif" alt="" width="137" height="25" border="0" title="" onmouseover="Tip('Please Click Here to Continue the Shopping')" onmouseout="UnTip()" /></a>      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/osc/user/check_out.php"><img src="images/checkoutbutton.gif" alt="" width="97" height="25" border="0" onclick="checking()" onmouseover="Tip('Please Tick Any One of the Above Checkbox &lt;br /&gt;then Click the Checkout Button')" onmouseout="UnTip()" /></a>&nbsp;&nbsp;&nbsp;</h4>
<p>&nbsp;</p>
     
   </div>
   <!-- end of center content --><!-- end of right content -->   
   
            
   </div><!-- end of main content -->
   
   
   
   <div class="footer">
   

        <div class="left_footer"> <a href="index.php"><img src="images/footer_logo.png" alt="" title="" width="170" height="49"/></a>
     </div>
        
        <div class="center_footer">
        Template name. All Rights Reserved 2017<br />
        <a href="http://csscreme.com"><img src="images/csscreme.jpg" alt="csscreme" title="csscreme" border="0" /></a><br />
        <img src="images/payment.gif" alt="" title="" />
        </div>
        
        <div class="right_footer">
        <a href="index.php">home</a>
        <a href="about us.php">about</a>
        <a href="details.php">sitemap</a><a href="contact.php">contact us</a>
        </div>   
   
   </div>                 


</div>
<!-- end of main_container -->

</body>
</html>
<?php
mysqli_free_result($rscart);
?>

	   