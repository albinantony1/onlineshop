<?php virtual('/osc/Connections/osc.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "admin";
$MM_donotCheckaccess = "false";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && false) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "/osc/admin/login.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form")) {
  $updateSQL = sprintf("UPDATE user_profile SET first_name=%s, last_name=%s, address_line1=%s, address_line2=%s, city=%s, `state`=%s, pincode=%s, email=%s, phone=%s WHERE username=%s",
                       GetSQLValueString($_POST['txt_first_name'], "text"),
                       GetSQLValueString($_POST['txt_last_name'], "text"),
                       GetSQLValueString($_POST['txt_address_line1'], "text"),
                       GetSQLValueString($_POST['txt_address_line2'], "text"),
                       GetSQLValueString($_POST['txt_city'], "text"),
                       GetSQLValueString($_POST['txt_state'], "text"),
                       GetSQLValueString($_POST['txt_pincode'], "int"),
                       GetSQLValueString($_POST['txt_email'], "text"),
                       GetSQLValueString($_POST['txt_phone'], "text"),
                       GetSQLValueString($_POST['hiddenField'], "text"));

  mysql_select_db($database_osc, $osc);
  $Result1 = mysql_query($updateSQL, $osc) or die(mysql_error());

  $updateGoTo = "/osc/admin/update_profile.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_Recordset1 = $_SESSION['MM_Username'];
}
mysql_select_db($database_osc, $osc);
$query_Recordset1 = sprintf("SELECT * FROM user_profile WHERE username = %s", GetSQLValueString($colname_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $osc) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
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
</head>
<body>  
<div id="content"></div>

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
	    </div>
        
        <div class="oferte_content">
        	<div class="top_divider"><img src="images/header_divider.png" alt="" title="" width="1" height="164" /></div>
        	<div class="oferta">
            
           		<div class="oferta_content">
                	<img src="images/laptop.png" width="94" height="92" border="0" class="oferta_img" />
                	
                    <div class="oferta_details">
                            <div class="oferta_title">Samsung GX 2004 LM</div>
                            <div class="oferta_text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            </div>
                            <a href="details.html" class="details">details</a>
                    </div>
                </div>
                <div class="oferta_pagination">
                
                     <span class="current">1</span>
                     <a href="#?page=2">2</a>
                     <a href="#?page=3">3</a>
                     <a href="#?page=3">4</a>
                     <a href="#?page=3">5</a>  
                             
                </div>        

            </div>
            <div class="top_divider"><img src="images/header_divider.png" alt="" title="" width="1" height="164" /></div>
        	
        </div> <!-- end of oferte_content-->
        

    </div>
    
  <div id="main_content"> 
   
            <div id="menu_tab">
            <div class="left_menu_corner"></div>
                    <ul class="menu">
                         <li><a href="index.php" class="nav1">  Home </a></li>
                         <li class="divider"></li>
                         <li><a href="products.php" class="nav2">Products</a></li>
                         <li class="divider"></li>
                         <li><a href="specials.php" class="nav3">Specials</a></li><li class="divider"></li>                         
                         <li><a href="shipping.php" class="nav5">Shipping </a></li>
                         <li class="divider"></li>
                         <li><a href="about us.php" class="nav6">About Us</a></li>
                         <li class="divider"></li>
                         <li><a href="contact.php" class="nav6">Contact Us</a></li>
                         <li class="divider"></li>
                         <li><a href="admin.php" class="nav6">Admin</a></li>
                         <li class="divider"></li>
                         <li><a href="../index.php" class="nav6">Log Out</a></li>
                    </ul>

             <div class="right_menu_corner"></div>
            </div><!-- end of menu tab -->
            
    <div class="crumb_navigation">
      <p>Navigation: <span class="current"><a href="index.html">Home</a>&lt; <span class="current"><a href="products.html">Products</a></span>      </p>
      <p>&nbsp;</p>
    </div>
    <p>&nbsp; </p>
    <div>
      <div class="left_content">
       <div class="title_box">Settings</div>
       <ul class="left_menu">
         <li class="odd"><a href="admin.php">My Account</a><a href="product.php">Products</a></li>
         <li class="odd"><a href="catogory.php">Catogories</a><a href="users.php">Users</a></li>
         <li class="odd"><a href="orders.php">Orders</a></li>
         <li class="odd"><a href="updateprofile.php">Edit Profile </a></li>
         <li class="odd"><a href="changepassword.php">Change Password</a></li>
         <li class="odd"></li>
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
         <p>&nbsp;</p>
       </div>
   </div>
      <div class="center_prod_box" style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; width: 532px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Tahoma, 'Trebuchet MS', sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">
        <h6 style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(255, 255, 255); font-family: Tahoma, 'Trebuchet MS', Verdana, Arial, sans-serif; font-size: 12px; font-weight: bolder; height: 26px; line-height: 26px; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(128, 133, 140); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(128, 133, 140); text-indent: 15px; background-image: url(images/content_header_bg.png); background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(243, 243, 243); background-position: 0% 0%; background-repeat: repeat no-repeat; ">Update Profile</h6>
        <div class="content" style="margin-top: 0px; margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; background-color: rgb(243, 243, 243); border-top-width: 1px; border-top-style: solid; border-top-color: rgb(221, 221, 221); border-left-width: 1px; border-left-style: solid; border-left-color: rgb(221, 221, 221); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(221, 221, 221); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(139, 138, 138); ">
          <div style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; float: left; "><img src="images/my_account.png" border="0" alt="My Account" title="My Account" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; " /></div>
          <div class="contact_form">
            <form action="<?php echo $editFormAction; ?>" method="POST" name="form" id="form">
              <div class="form_row">
                <label class="contact"><strong>First Name:</strong></label>
                <input name="txt_first_name" type="text" class="contact_input" id="txt_first_name" value="<?php echo $row_Recordset1['first_name']; ?>" />
              </div>
              <div class="form_row">
                <label class="contact"><strong>Last Name:</strong></label>
                <input name="txt_last_name" type="text" class="contact_input" id="txt_last_name" value="<?php echo $row_Recordset1['last_name']; ?>" />
              </div>
              <div class="form_row">
                <label class="contact"><strong>Address:1</strong></label>
                <input name="txt_address_line1" type="text" class="contact_input" id="txt_address_line1" value="<?php echo $row_Recordset1['address_line1']; ?>" />
              </div>
              <div class="form_row">
                <label class="contact"><strong>Address:2</strong>.</label>
                <input name="txt_address_line2" type="text" class="contact_input" id="txt_address_line2" value="<?php echo $row_Recordset1['address_line2']; ?>" />
              </div>
              <div class="form_row">
                <label class="contact"><strong>City</strong>:</label>
                <input name="txt_city" type="text" class="contact_input" id="txt_city" value="<?php echo $row_Recordset1['city']; ?>" />
              </div>
              <div class="form_row">
                <label class="contact"><strong>State:</strong></label>
                <input name="txt_state" type="text" class="contact_input" id="txt_state" value="<?php echo $row_Recordset1['state']; ?>" />
              </div>
              <div class="form_row">
                <label class="contact"><strong>Pincode:</strong></label>
                <input name="txt_pincode" type="text" class="contact_input" id="txt_pincode" value="<?php echo $row_Recordset1['pincode']; ?>" />
              </div>
              <div class="form_row">
                <label class="contact"><strong>Email:</strong></label>
                <input name="txt_email" type="text" class="contact_input" id="txt_email" value="<?php echo $row_Recordset1['email']; ?>" />
              </div>
              <div class="form_row">
                <label class="contact"><strong>Phone:</strong></label>
                <input name="txt_phone" type="text" class="contact_input" id="txt_phone" value="<?php echo $row_Recordset1['phone']; ?>" />
              </div>
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
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
    </div>
  </div><!-- end of right content -->   
   
            
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>                 


</div>

<!-- end of main_container -->
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
