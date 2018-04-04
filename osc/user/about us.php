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
	
  $logoutGoTo = "/osc/index.php";
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
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

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
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "../login.php";
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
</head>
<body>

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
    Navigation: <a href="index.php">Home</a> &lt; <span class="current">About Us</a></span>
    
    </div>
    <?php include('includes/sidebar.php'); ?>
    <!-- end of left content -->
  

   
   <div class="center_content">
   	<div class="center_title_bar">About Us </div>
    
    	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
              	<div class="contact_form">
              	  <p>&nbsp;</p>
              	  <p>We aims to be one of the largest Internet retailers of branded computer   technology and digital lifestyle products with more than 5000 products   from top international and domestic brands.</p>
<p>Our business philosophy is simple: offer consumers and businesses what they want, when they want it.</p>
                  <h2>Products</h2>
                  <p>We offer our customers over 5000 quality products, and   our list of product categories and product offerings is growing every   day.Our customers know they're getting the best prices and exclusive   offers on a huge range of computer technology products like desktops,   notebooks, printers, mobile phones, networking, digital cameras,  software, storage and more. Plus, we offer other interesting products   such as LCD TVs, MP3 players, gaming and home electronics.</p>
                  <p>Our direct association with all the major brands means our   customers will always find special deals on great products from the   biggest names in the industry. And to help our customers choose the   right products, we make it easy to find availability, pricing, reviews   and ratings.</p>
                  <h2>Services</h2>
                  <p>Our focus has always been on helping   customers save time and money. This is why we've invested in building a   website that allows them to securely manage their accounts without   intervention. It&rsquo;s the empowering, 24/7 self service approach that   ensures we keep our customers satisfied, and our prices competitive.                  </p>
                  <p>&nbsp;</p>
              	  <p>&nbsp;</p>
                           
                    
                    
              </div> 
                
                                     
            </div>
            <div class="bottom_prod_box_big"></div>                                
        </div>
       
    
   
   </div>
   <p><!-- end of center content -->
     
   </p>
   <div class="right_content">
    <div class="shopping_cart">
       <div class="cart_title"><a href="/osc/user/cart.php">Shopping cart</a></div>
       <div class="cart_icon"><a href="cart.php" title="header=[Checkout] body=[&nbsp;] fade=[on]">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/shoppingcart.png" alt="" title="" width="48" height="48" border="0" /></a></div>
     </div>
     <div class="right_content">
	    <div class="title_box">Manufacturers</div>
	    <ul class="left_menu">
	      <li class="odd"><a href="#">Intel</a></li>
	      <li class="even"><a href="#">Samsung</a></li>
	      <li class="odd"><a href="#">Seagate</a></li>
	      <li class="even"><a href="#">AMD</a></li>
	      <li class="odd"><a href="#">Western Digital</a></li>
	      <li class="even"><a href="#">Asus</a></li>
	      <li class="odd"><a href="#">Giagabyte</a></li>
	      <li class="even"><a href="#">HP</a></li>
        </ul>
	    <div class="banner_adds"></div>
      </div>
<div class="banner_adds"></div>        
     
   </div><!-- end of right content -->   
   
            
   </div><!-- end of main content -->
   
   
   
   <?php include('includes/footer.php'); ?>                 


</div>
<!-- end of main_container -->
</body>
</html>