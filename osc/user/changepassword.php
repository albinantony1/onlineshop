<?php require_once('../Connections/osc.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **

?>
<?php
if (!isset($_SESSION)) {
  session_start();
}

?>
<?php

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form")) {
	$txt_email=$_POST['txt_email'];
	$hiddenField=$_POST['hiddenField'];
  $updateSQL = "UPDATE user_profile SET password='$txt_email' WHERE username='$hiddenField'";                      
  $Result1 = mysqli_query($osc,$updateSQL);

  header("Location: /osc/user/changepassword.php");
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
<script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
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
      <p>Navigation: <span class="current"><a href="index.html">Home</a>&lt;<a href="/osc/user/myaccount.php">My Account</a></p>
      <p>&nbsp;</p>
    </div>
    <div>
<div class="left_content">
        <div class="title_box">My Account</div>
        <ul class="left_menu">
          <li class="odd"><a href="myaccount.php">My Account</a></li>
          <li class="even"><a href="updateprofile.php">Edit Profile</a></li>
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
        <div class="banner_adds">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>
      </div>
      <div class="center_prod_box" style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; width: 532px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Tahoma, 'Trebuchet MS', sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">
        <h6 style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(255, 255, 255); font-family: Tahoma, 'Trebuchet MS', Verdana, Arial, sans-serif; font-size: 12px; font-weight: bolder; height: 26px; line-height: 26px; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(128, 133, 140); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(128, 133, 140); text-indent: 15px; background-image: url(images/content_header_bg.png); background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(243, 243, 243); background-position: 0% 0%; background-repeat: repeat no-repeat; ">Change Password</h6>
        <div class="content" style="margin-top: 0px; margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; background-color: rgb(243, 243, 243); border-top-width: 1px; border-top-style: solid; border-top-color: rgb(221, 221, 221); border-left-width: 1px; border-left-style: solid; border-left-color: rgb(221, 221, 221); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(221, 221, 221); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(139, 138, 138); ">
          <div style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; float: left; "><img src="images/my_account.png" border="0" alt="My Account" title="My Account" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; " /></div>
          <div class="contact_form">
          <form name="form" action="#" method="POST">
            <div class="form_row">
              <label class="contact"><strong>Password:</strong></label>
              <span id="sprytextfield1">
              <input name="txt_pincode" type="password" class="contact_input" id="txt_pincode" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></div>
            <div class="form_row">
              <label class="contact"><strong>New:</strong></label>
              <span id="sprypassword1">
              <input name="txt_email" type="password" class="contact_input" id="txt_email" />
              <span class="passwordRequiredMsg">A value is required.</span></span></div>
            <div class="form_row">
              <label class="contact"><strong>Confirm:</strong></label>
              <span id="spryconfirm1">
              <input name="txt_phone" type="password" class="contact_input" id="txt_phone" />
              <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></div>
            <div class="form_row">
              <input name="submit" type="submit" value="Update" />
              <input type="hidden" name="hiddenField" id="hiddenField" value="<?php echo $_SESSION['MM_Username'];?>" />
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
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "txt_email");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>