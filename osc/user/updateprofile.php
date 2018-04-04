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

if ((isset($_POST["submit"])) && ($_POST["MM_update"] == "form")) {
	$txt_first_name=$_POST['txt_first_name'];
	$txt_last_name=$_POST['txt_last_name'];
	$txt_address_line1=$_POST['txt_address_line1'];
	$txt_address_line2=$_POST['txt_address_line2'];
	$txt_city=$_POST['txt_city'];
	$txt_state=$_POST['txt_state'];
	$txt_pincode=$_POST['txt_pincode'];
	$txt_email=$_POST['txt_email'];
	$txt_phone=$_POST['txt_phone'];
	$hiddenField=$_POST['hiddenField'];
  $updateSQL = "UPDATE user_profile SET first_name='$txt_first_name', last_name='$txt_last_name', address_line1='$txt_address_line1', address_line2='$txt_address_line2', city='$txt_city', `state`='$txt_state', pincode='$txt_pincode', email='$txt_email', phone='$txt_phone' WHERE username='$hiddenField'";
                      
  $Result1 = mysqli_query($osc,$updateSQL);

  $updateGoTo = "/osc/user/updateprofile.php";
  
  header("Location: $updateGoTo");
}

  $colname_rsupdate = $_SESSION['MM_Username'];

$query_rsupdate = "SELECT first_name, last_name, address_line1, address_line2, city, `state`, pincode, email, phone FROM user_profile WHERE username = '$colname_rsupdate'";
$rsupdate = mysqli_query($osc,$query_rsupdate);
$row_rsupdate = mysqli_fetch_assoc($rsupdate);
$totalRows_rsupdate = mysqli_num_rows($rsupdate);
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
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>
<body><div id="content"></div>

<div id="main_container">
	<div class="top_bar">
    	<div class="top_search">
        	<div class="search_text"><a href="#"> Search</a></div>
            <input type="text" class="search_input" name="search" />
            <input type="image" src="images/search.gif" class="search_bt"/>
        </div>
        
            
    </div>
	<div id="header">
        
        <div id="logo">
            <a href="index.html"><img src="images/logo.png" alt="" title="" border="0" width="237" height="140" /></a>
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
              <li><a href="/myaccount.php" class="nav6">My Account</a></li>
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
      <p>Navigation: <span class="current"><a href="index.html">Home</a>&lt;<a href="/osc/user/myaccount.php">My Account</a></p>
      <p>&nbsp;</p>
    </div>
    <div>
<div class="left_content">
        <div class="title_box">My Account</div>
        <ul class="left_menu">
          <li class="odd"><a href="myaccount.php">My Account</a></li>
          <li class="even"><a href="#">Edit Profile</a></li>
          <li class="odd"><a href="changepassword.php">Change Password</a></li>
          <li class="even"><a href="orders.php">Order History</a></li>
          <li class="even"></li>
          <li class="odd"></li>
          <li class="even"></li>
          <li class="odd"></li>
          <li class="even"></li>
          <li class="odd"></li>
          <li class="even"></li>
        </ul>
        <div class="banner_adds"></div>
      </div>
      <div class="center_prod_box" style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; width: 532px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Tahoma, 'Trebuchet MS', sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">
        <h6 style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(255, 255, 255); font-family: Tahoma, 'Trebuchet MS', Verdana, Arial, sans-serif; font-size: 12px; font-weight: bolder; height: 26px; line-height: 26px; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(128, 133, 140); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(128, 133, 140); text-indent: 15px; background-image: url(images/content_header_bg.png); background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(243, 243, 243); background-position: 0% 0%; background-repeat: repeat no-repeat; ">Update Profile</h6>
        <div class="content" style="margin-top: 0px; margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; background-color: rgb(243, 243, 243); border-top-width: 1px; border-top-style: solid; border-top-color: rgb(221, 221, 221); border-left-width: 1px; border-left-style: solid; border-left-color: rgb(221, 221, 221); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(221, 221, 221); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(139, 138, 138); ">
          <div style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; float: left; "><img src="images/my_account.png" border="0" alt="My Account" title="My Account" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; " /></div>
          <div class="contact_form">
           <form action="#" name="form" method="POST">
            <div class="form_row">
           
              <label class="contact"><strong>First Name:</strong></label>
              <span id="sprytextfield1">
              <input name="txt_first_name" type="text" class="contact_input" id="txt_first_name" value="<?php echo $row_rsupdate['first_name']; ?>" maxlength="25" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></div>
            <div class="form_row">
              <label class="contact"><strong>Last Name:</strong></label>
              <span id="sprytextfield2">
              <input name="txt_last_name" type="text" class="contact_input" id="txt_last_name" value="<?php echo $row_rsupdate['last_name']; ?>" maxlength="25" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></div>
            <div class="form_row">
              <label class="contact"><strong>Address:1</strong></label>
              <span id="sprytextfield3">
              <input name="txt_address_line1" type="text" class="contact_input" id="txt_address_line1" value="<?php echo $row_rsupdate['address_line1']; ?>" maxlength="30" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></div>
            <div class="form_row">
              <label class="contact"><strong>Address:2</strong>.</label>
              <span id="sprytextfield4">
              <input name="txt_address_line2" type="text" class="contact_input" id="txt_address_line2" value="<?php echo $row_rsupdate['address_line2']; ?>" maxlength="30" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></div>
            <div class="form_row">
              <label class="contact"><strong>City</strong>:</label>
              <span id="sprytextfield5">
              <input name="txt_city" type="text" class="contact_input" id="txt_city" value="<?php echo $row_rsupdate['city']; ?>" maxlength="30" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></div>
            <div class="form_row">
              <label class="contact"><strong>State:</strong></label>
              <span id="sprytextfield6">
              <input name="txt_state" type="text" class="contact_input" id="txt_state" value="<?php echo $row_rsupdate['state']; ?>" maxlength="30" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></div>
            <div class="form_row">
              <label class="contact"><strong>Pincode:</strong></label>
              <span id="sprytextfield7">
              <input name="txt_pincode" type="text" class="contact_input" id="txt_pincode" value="<?php echo $row_rsupdate['pincode']; ?>" maxlength="7" />
              <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div>
            <div class="form_row">
              <label class="contact"><strong>Email:</strong></label>
              <span id="sprytextfield8">
              <input name="txt_email" type="text" class="contact_input" id="txt_email" value="<?php echo $row_rsupdate['email']; ?>" />
              <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div>
            <div class="form_row">
              <label class="contact"><strong>Phone:</strong></label>
              <span id="sprytextfield9">
              <input name="txt_phone" type="text" class="contact_input" id="txt_phone" value="<?php echo $row_rsupdate['phone']; ?>" maxlength="12" />
              <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div>
            <div class="form_row">
              <input name="submit" type="submit" value="Update" />
             
              <input type="hidden" name="hiddenField" id="hiddenField" value=<?php echo $_SESSION['MM_Username'];?> />
            </div>
            <input type="hidden" name="MM_update" value="form" />
           </form>
          </div>
          <div style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; clear: both; "></div>
        </div>
      </div>
      <h1 style="margin-top: 5px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(51, 51, 51); font-family: Tahoma, 'Trebuchet MS', Verdana, Arial, sans-serif; font-size: 18px; font-weight: normal; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">&nbsp;</h1>
    </div>
    <!-- end of right content -->   
   
            
   </div>
<div align="center"><!-- end of main content -->
  
  
  
</div>
<div class="footer">
   

     <div class="left_footer"> 
       <div align="center"><a href="index.html"><img src="images/footer_logo.png" alt="" width="170" height="49" align="middle" title=""/></a>
       </div>
  </div>
        
     <div class="center_footer">
       <div align="center">Template name. All Rights Reserved 2017<br />
         <a href="http://csscreme.com"><img src="images/csscreme.jpg" alt="csscreme" title="csscreme" border="0" /></a><br />
       <img src="images/payment.gif" alt="" title="" />     </div>
     </div>
        
     <div class="right_footer">
       <div align="center"><a href="index.html">home</a>
         <a href="about us.html">about</a>
         <a href="details.html">sitemap</a><a href="contact.html">contact us</a>
       </div>
     </div>   
   
  </div>                 


</div>

<!-- end of main_container -->
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "integer");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "email");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "integer");
</script>
</body>
</html>
<?php
mysqli_free_result($rsupdate);
?>
