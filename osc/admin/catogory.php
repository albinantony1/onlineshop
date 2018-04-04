<?php require_once('../Connections/osc.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}


?>
<?php

$maxRows_rscatogory = 10;
$pageNum_rscatogory = 0;
if (isset($_GET['pageNum_rscatogory'])) {
  $pageNum_rscatogory = $_GET['pageNum_rscatogory'];
}
$startRow_rscatogory = $pageNum_rscatogory * $maxRows_rscatogory;
$query_rscatogory = "SELECT category_id, category_name FROM category_details";
$rscatogory = mysqli_query($osc,$query_rscatogory);
$row_rscatogory = mysqli_fetch_assoc($rscatogory);

if (isset($_GET['totalRows_rscatogory'])) {
  $totalRows_rscatogory = $_GET['totalRows_rscatogory'];
} else {
  $all_rscatogory = mysqli_query($osc,$query_rscatogory);
  $totalRows_rscatogory = mysqli_num_rows($all_rscatogory);
}
$totalPages_rscatogory = ($totalRows_rscatogory/$maxRows_rscatogory)-1;
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
   
            div id="menu_tab">
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
            </div>
            
    <div class="crumb_navigation">
      <p>Navigation: <span class="current"><a href="index.html">Home</a>&lt;Admin<span class="current"><a href="products.html"></a></span>      </p>
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
        <h6 style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; color: rgb(255, 255, 255); font-family: Tahoma, 'Trebuchet MS', Verdana, Arial, sans-serif; font-size: 12px; font-weight: bolder; height: 26px; line-height: 26px; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(128, 133, 140); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(128, 133, 140); text-indent: 15px; background-image: url(http://localhost/tcart/templates/glass_gray/images/content_header_bg.png); background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(243, 243, 243); background-position: 0% 0%; background-repeat: repeat no-repeat; ">Catogory</h6>
       <div class="content" style="margin-top: 0px; margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; background-color: rgb(243, 243, 243); border-top-width: 1px; border-top-style: solid; border-top-color: rgb(221, 221, 221); border-left-width: 1px; border-left-style: solid; border-left-color: rgb(221, 221, 221); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(221, 221, 221); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(139, 138, 138); ">
         <div style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; float: left; "><img src="http://localhost/tcart/templates/glass_gray/images/my_account.png" border="0" alt="My Account" title="My Account" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; " /></div>
         <div>
           <table width="459" border="1">
             <tr>
               <th width="121" height="49" scope="col">Catogory ID</th>
               <th width="203" scope="col">Catogory Name</th>
               <th width="48" scope="col">Edit</th>
               <th width="59" scope="col">Delete</th>
             </tr>
             <?php do { ?>
                 <?php if ($totalRows_rscatogory > 0) { // Show if recordset not empty ?>
  <tr>
    <td height="50"><?php echo $row_rscatogory['category_id']; ?></td>
    <td><?php echo $row_rscatogory['category_name']; ?></td>
    <td>&nbsp;&nbsp;&nbsp;<a href="edit_category.php?id=<?php echo $row_rscatogory['category_id']; ?>">Edit</a></td>
    <td>&nbsp;&nbsp;&nbsp;<a href="delete_category.php?id=<?php echo $row_rscatogory['category_id']; ?>">Delete</a></td>
  </tr>
  <?php } // Show if recordset not empty ?>
<?php } while ($row_rscatogory = mysqli_fetch_assoc($rscatogory)); ?>
           </table>
           <p><span class="form_row"><a href="add_category.php" class="contact">Add Catorgory</a></span></p>
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
</body>
</html>
<?php
mysqli_free_result($rscatogory);
?>
