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
            <a href="index.php"><img src="images/logo.png" alt="" title="" border="0" width="237" height="140" /></a>
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
    Navigation: <span class="current"><a href="index.php">Home</a>&lt;Admin</div>
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
    <!-- end of left content -->
   
   
   <div class="center_content">
   
   	<div class="center_title_bar">EDIT CATEGORY</div>
    <div id="new_books">
      <form id="form1" name="form1" method="post" action="update_category.php"> 
        <p>&nbsp;</p>
        <h4>
          <label></label>
        </h4>
        <div id="Layer2">
          <table width="311" height="127" border="0" align="left">
		   <?php require_once('../Connections/osc.php'); ?>
          <?php
		  $id=$_GET['id'];		
		 include_once('..\class\category.php');
         $qry="select * from category_details where category_id='$id'";
		 $res=mysqli_query($osc,$qry);
		 $r=mysqli_fetch_array($res);
?>
            <tr>
              <td width="160" height="60"><h3><span class="style6">Category Name</span></h3></td><input type="hidden" name="h" value="<?php echo $r[0]; ?>" />
              <td width="144"><input name="category_name" type="text" value="<?php echo $r[1]; ?>"id="txtcat" /></td>
            </tr>
            <tr>
              <td height="61" colspan="2"><h3>
                <label></label>
              </h3>
                <h3 align="center">
                  <input name="submit" type="submit" id="UPDATE" value="UPDATE" />
                </h3></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>
      </form>
</div>
   </div><!-- end of center content --><!-- end of right content -->   
   
            
   </div><!-- end of main content -->
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