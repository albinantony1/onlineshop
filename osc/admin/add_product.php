<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "../index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
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
<body>  
<div id="content"></div>

<div id="main_container">
	<div class="top_bar"></div>
	<div id="header">
        
        <div id="logo">
            <a href="index.html"><img src="images/logo.png" alt="" title="" border="0" width="237" height="140" /></a>
	    </div><!-- end of oferte_content-->
        

    </div>
    
  <div id="main_content"> 
   
            <div id="menu_tab">
            <div class="left_menu_corner"></div>
            <ul class="menu">
              <li></li>
              <li class="divider"></li>
              <li></li>
              <li class="divider"></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li><a href="admin.php" class="nav6">Admin</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo $logoutAction ?>" class="nav6">Log Out</a></li>
            </ul>
            <div class="right_menu_corner"></div>
            </div><!-- end of menu tab -->
            
    <div class="crumb_navigation">
      <p>Navigation: <span class="current"><a href="index.html">Home</a>&lt;Admin</p>
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
      <div class="center_content">
        <div class="center_title_bar">
          <p>ADD NEW ITEMS</p>
          <p>&nbsp; </p>
        </div>
        <form action="add_process.php" method="post"  enctype="multipart/form-data">
          <div class="center_content">
            <table width="533" border="1">
              <tr>
                <td><table width="533" border="1">
                  <tr>
                    <td width="193" height="44">Category ID</td>
                    <td width="324"><label for="select3"></label>
                      <select name="category_id" id="select3">
                        <?php
	  include_once('../class/category.php');
	  $obj=new category();
  		$res=$obj->viewall();
		while($r=mysql_fetch_array($res))
		{
		?>
                        <option><?php echo $r[1];?></option>
                        <?php
		}
		?>
                      </select></td>
                  </tr>
                  <tr>
                    <td height="44">Title</td>
                    <td><label for="textfield"></label>
                      <input type="text" name="txt_title" id="textfield" /></td>
                  </tr>
                  <tr>
                    <td height="44">Brand</td>
                    <td><label for="textfield2"></label>
                      <input type="text" name="txt_brand" id="textfield2" /></td>
                  </tr>
                  <tr>
                    <td height="44">Price</td>
                    <td><span id="sprytextfield1">
                      <input type="text" name="txt_price" id="textfield3" />
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td height="44">Quantity</td>
                    <td><input type="text" name="txt_quantity" id="textfield4" /></td>
                  </tr>
                  <tr>
                    <td height="44">Image</td>
                    <td><input type="file" name="image" id="fileField" /></td>
                  </tr>
                  <tr>
                    <td height="44">Description</td>
                    <td><textarea name="description" id="description" cols="45" rows="8"></textarea></td>
                  </tr>
                  <tr>
                    <td height="44" colspan="2" align="center"><input type="submit" name="button" id="button" value="Submit" /></td>
                  </tr>
                </table></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div>
        </form>
      </div>
      <h1 style="margin-top: 5px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(51, 51, 51); font-family: Tahoma, 'Trebuchet MS', Verdana, Arial, sans-serif; font-size: 18px; font-weight: normal; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">&nbsp;</h1>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
     <p>&nbsp;</p>
    </div>
 <!-- end of right content -->   
   
            
  </div>
<div align="center"><!-- end of main content -->
  
  
  
</div>
<div class="footer">
  <div class="left_footer">
    <div align="center"><a href="index.html"><img src="images/footer_logo.png" alt="" width="170" height="49" align="middle" title=""/></a> </div>
  </div>
  <div class="center_footer">
    <div align="center">electronix.com All Rights Reserved 2017<br />
      <br />
      <img src="images/payment.gif" alt="" title="" /></div>
  </div>
  <div class="right_footer">
    <div align="center"></div>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</div>
</div>
<!-- end of main_container -->
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>