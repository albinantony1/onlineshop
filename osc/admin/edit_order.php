<?php virtual('/osc/Connections/osc.php'); ?>
<?php

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form")) {
	$textfield=$_POST['textfield'];
	$textfield2=$_POST['textfield2'];
	$textfield3=$_POST['textfield3'];
	$textfield4=$_POST['textfield4'];
	$hiddenField=$_POST['hiddenField'];
  $updateSQL ="UPDATE order_details SET product='$textfield', quantity='$textfield2', amount='$textfield3', status='$textfield4' WHERE order_id='$hiddenField'";

  $Result1 = mysqli_query($osc,$updateSQL);

  ?>
  
  <script language="javascript">
//window.location="orders.php";
</script>
<?php 
}

$colname_Recordset1 = "-1";
if (isset($_GET['id'])) {
  $colname_Recordset1 = $_GET['id'];
}
$query_Recordset1 = "SELECT * FROM order_details WHERE order_id = '$colname_Recordset1'";
$Recordset1 = mysqli_query($osc,$query_Recordset1);
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
$id=$_GET['id'];
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
<body><div id="content"></div>

<div id="main_container">
	<div class="top_bar"></div>
	<div id="header">
        
        <div id="logo">
            <a href="index.html"><img src="images/logo.png" alt="" title="" border="0" width="237" height="140" /></a>
	    </div><!-- end of oferte_content-->
        

    </div>
    
  <div id="main_content">
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
    <!-- end of menu tab -->
            
    <div class="crumb_navigation">
      <p>Navigation: <span class="current"><a href="index.html">Home</a>&lt; <span class="current">Admin</span>      </p>
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
      <div class="center_prod_box" style="margin-top: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; width: 800px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Tahoma, 'Trebuchet MS', sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">
        <h6 style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(255, 255, 255); font-family: Tahoma, 'Trebuchet MS', Verdana, Arial, sans-serif; font-size: 12px; font-weight: bolder; height: 26px; line-height: 26px; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(128, 133, 140); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(128, 133, 140); text-indent: 15px; background-image: url(http://localhost/tcart/templates/glass_gray/images/content_header_bg.png); background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(243, 243, 243); background-position: 0% 0%; background-repeat: repeat no-repeat; ">Orders</h6>
       <div class="content" style="margin-top: 0px; margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; background-color: rgb(243, 243, 243); border-top-width: 1px; border-top-style: solid; border-top-color: rgb(221, 221, 221); border-left-width: 1px; border-left-style: solid; border-left-color: rgb(221, 221, 221); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(221, 221, 221); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(139, 138, 138); ">
         <div style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; float: left; "><img src="http://localhost/tcart/templates/glass_gray/images/my_account.png" border="0" alt="My Account" title="My Account" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; " /></div>
         
         <div>
         <form name="form" action="#" method="POST">
           <table width="732" border="1">
             <tr>
               <th width="50" height="47" scope="col">Order id</th>
               <th width="66" scope="col">Username</th>
               <th width="60" scope="col">Order Date</th>
               <th width="251" scope="col">Product</th>
               <th width="45" scope="col">Quantity</th>
               <th width="50" scope="col">Amount</th>
               <th width="68" scope="col">Status</th>
              </tr>
             <?php if ($totalRows_Recordset1 > 0) { // Show if recordset not empty ?>
  <tr>
    <td height="47"><?php echo $row_Recordset1['order_id']; ?></td>
    <td><?php echo $row_Recordset1['username']; ?></td>
    <td><?php echo $row_Recordset1['date']; ?></td>
    <td><label for="textfield"></label>
      <input name="textfield" type="text" id="textfield" value="<?php echo $row_Recordset1['product']; ?>" /></td>
    <td><label for="textfield2"></label>
      <input name="textfield2" type="text" id="textfield2" value="<?php echo $row_Recordset1['quantity']; ?>" size="5" /></td>
    <td><label for="textfield3"></label>
      <input name="textfield3" type="text" id="textfield3" value="<?php echo $row_Recordset1['amount']; ?>" size="10" /></td>
    <td><label for="textfield4"></label>
      <input name="textfield4" type="text" id="textfield4" value="<?php echo $row_Recordset1['status']; ?>" size="15" /></td>
  </tr>
  <?php } // Show if recordset not empty ?>
           </table>
           
           <p>&nbsp;</p>
           <p>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="hidden" name="hiddenField" id="hiddenField" value="<?php echo $id ?>" />
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="submit" name="button" id="button" value="Update" />
             <input type="hidden" name="MM_update" value="form" />
           </form>
           </p>
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

<!-- end of main_container -->
</body>
</html>
<?php
mysqli_free_result($Recordset1);
?>
