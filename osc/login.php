<?php

include 'gtrans.php';
?>
<?php require_once('Connections/osc.php'); ?>


<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF']; 
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['txt_username'])) {
	$secret = '6LcTW0EUAAAAAE2ebuEWSFyE0U77ADy4fGivtdKD';
 $response =$_POST['g-recaptcha-response'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response);
$response = json_decode($response, true);
//if($response["success"] === true){
  $loginUsername=$_POST['txt_username'];
  $password=$_POST['txt_password'];
  $MM_fldUserAuthorization = "role";
  $MM_redirectLoginSuccess = "user/index.php";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
 
  
  $LoginRS__query="SELECT username, password FROM user_profile WHERE username='$loginUsername' AND password='$password'";
   
  $LoginRS = mysqli_query($osc,$LoginRS__query);
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser) {
     //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
//}
//else{
	//echo "<script>alert('invalid recaptcha!!');</script>";
//}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src='https://www.google.com/recaptcha/api.js'></script> 
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
            <a href="index.php"><img src="images/logo.png" alt="electronix" title="" border="0" width="237" height="140" /></a>
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
              <li><a href="login.php" class="nav4">Log In</a></li>
              <li class="divider"></li>
              <li><a href="register.php" class="nav4">Register</a></li>
              <li class="divider"></li>
              <li><a href="shipping.php" class="nav5">Shipping </a></li>
              </li>
              <li class="divider"></li>
              <li><a href="about us.php" class="nav6">About Us</a></li>
              <li class="divider"></li>
              <li><a href="contact.php" class="nav6">Contact Us</a></li>
              <li class="divider"></li>
              </li>
            </ul>
            <div class="right_menu_corner"></div>
            </div><!-- end of menu tab -->
            
     <div class="crumb_navigation">
    Navigation: <a href="index.php">Home</a> &lt; <span class="current"><a href="login.php">Login</a></span>
    
    </div>              
    
    
   <!--<div class="left_content">
    <div class="title_box">Categories</div>
    
        <ul class="left_menu">
        <li class="odd"><a href="#">Processors</a></li>
        <li class="even"><a href="#">Motherboards</a></li>
         <li class="odd"><a href="#">Desktops</a></li>
        <li class="even"><a href="#">Laptops & Notebooks</a></li>
         <li class="odd"><a href="#">Software</a></li>
         <li class="even"><a href="#">Pen Drives</a></li>
        <li class="odd"><a href="#">External Hard Disk</a></li>
        <li class="even"><a href="#">Ram</a></li>
         <li class="odd"><a href="#">Internal Hard Disk</a></li>
        <li class="even"><a href="#">Tablets</a></li>
         <li class="odd"><a href="#">Graphics Card</a></li>
         <li class="even"><a href="#">Monitor</a></li>
        </ul>
      <div class="banner_adds"></div>    
        
    
   </div><!--><!-- end of left content -->
  

   
   <div class="center_content" style="text-align:center;">
   	<div class="center_title_bar">Login</div>
    
    	
        <div class="prod_box_big">
          <div class="top_prod_box_big"></div>
      <div class="center_prod_box_big">            
                 <form method="POST" action="<?php echo $loginFormAction; ?>" name="f1">
              	<div class="contact_form">
                           
                    <div class="form_row">
                    
                    <label class="contact"><strong>User Name:</strong></label>
                    <input style="width:60%;" type="text" class="contact_input"  name="txt_username"/>
                    </div> 

                    <div class="form_row">
                    <label class="contact"><strong>Password:</strong></label>
                    <input style="width:60%;" name="txt_password" type="password" class="contact_input" id="*" maxlength="10" />
                    </div>

<div style="margin-left:16%; margin-top:4%; width:30%;" class="g-recaptcha" data-sitekey="6LcTW0EUAAAAABezl1_dDZo2KP4Jar-Yc8mAyiMr"></div>
                       
                    
              </div>
              	<p>&nbsp;</p>
              	<p>&nbsp;</p>
              	<p>&nbsp;</p>
              	<p>&nbsp;</p>
              	<p>&nbsp;</p>
              	<p>
              	  <input type="submit" name="button" id="button" value="Login" />
              	</p></p></form>
      </div>
            <div class="bottom_prod_box_big"></div>                                
      </div>
       
    
   
   </div><!-- end of center content -->
   <!--<div class="right_content">
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
   </div>-->
   <!-- end of right content -->   
   
            
   </div><!-- end of main content -->
   
   
   
   <?php include('includes/footer.php'); ?>                 


</div>
<!-- end of main_container -->
</body>
</html>