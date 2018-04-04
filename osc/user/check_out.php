<?php

include 'gtrans.php';
?>
<?php require_once('../Connections/osc.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<?php

$uid=$_SESSION['MM_Username'];
$query_rscart = "SELECT user_profile.first_name, user_profile.last_name, user_profile.address_line1, user_profile.address_line2, user_profile.city, user_profile.`state`, user_profile.pincode, user_profile.phone FROM cart, user_profile  WHERE user_profile.username= '$uid'";
$rscart = mysqli_query($osc,$query_rscart);
$row_rscart = mysqli_fetch_assoc($rscart);
$totalRows_rscart = mysqli_num_rows($rscart);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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

<style type="text/css">
body {
	background-color: #FFF;
}
</style>
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
     <div class="center_title_bar">Check Out</div>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
     <form id="form1" name="form1" method="post" action="checkout_process.php">
       <table width="455" height="371" border="1">
         <tr>
           <th height="36" colspan="2" scope="row">Shipping Address</th>
          </tr>
         <tr>
           <th width="110" height="29" scope="row">Name:</th>
           <td width="329"><?php echo $row_rscart['first_name']; ?>&nbsp;&nbsp;<?php echo $row_rscart['last_name']; ?></td>
         </tr>
         <tr>
           <th height="62" scope="row">Address:</th>
           <td><p><?php echo $row_rscart['address_line1']; ?></p>
            <p><?php echo $row_rscart['address_line2']; ?></p></td>
         </tr>
         <tr>
           <th height="34" scope="row">City:</th>
           <td><?php echo $row_rscart['city']; ?></td>
         </tr>
         <tr>
           <th height="34" scope="row">State:</th>
           <td><?php echo $row_rscart['state']; ?></td>
         </tr>
         <tr>
           <th height="34" scope="row">Pin:</th>
           <td><?php echo $row_rscart['pincode']; ?></td>
         </tr>
         <tr>
           <th height="35" scope="row">Phone:</th>
           <td><?php echo $row_rscart['phone']; ?></td>
         </tr>
         <tr>
           <th height="42" scope="row">Payment Method:</th>
           <td><p>
             <label>
               <input name="RadioGroup1" type="radio" id="RadioGroup1_0" value="BillDesk" checked="checked" />
               Netbanking / Credit Card</label>
             / Debit Card<br />
             <label>
               <input type="radio" name="RadioGroup1" value="COD" id="RadioGroup1_1" />
               Cash On Delivery</label>
             <br />
             <label>
               <input type="radio" name="RadioGroup1" value="Other" id="RadioGroup1_2" />
               Cheque / DD</label>
             / Money order<br />
           </p></td>
         </tr>
         <tr>
           <th height="43" colspan="2" scope="row"><input type="submit" name="button" id="button" value="Submit" /></th>
          </tr>
       </table>
     </form>
     <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
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
