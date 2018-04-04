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
<script src="/osc/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="/osc/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
                         <li><a href="index.php" class="nav1">  Home </a></li>
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
                         <li class="divider"></li>
                         <li><a href="about us.php" class="nav6">About Us</a></li>
                         <li class="divider"></li>
                         <li><a href="contact.php" class="nav6">Contact Us</a></li>
                         
                    </ul>

             <div class="right_menu_corner"></div>
            </div><!-- end of menu tab -->
            
     <div class="crumb_navigation">
    Navigation: <a href="index.php">Home</a> &lt; <span class="current">Contact Us</a></span>
    
    </div>
    <?php //include('includes/sidebar.php'); ?>
    <!-- end of left content -->
  

   
   <div class="center_content">
   	<div class="center_title_bar">Contact Us</div>
    
    	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">
              <form action="contact_send.php" method="get">
                <div class="form_row">
                  <label class="contact"><strong>Name:</strong></label>
                  <span id="sprytextfield1">
                    <input type="text" class="contact_input" />
                    <br />
                    <br />
                    <span class="textfieldRequiredMsg"> A value is required.</span></span></div>
                <div class="form_row">
                  <label class="contact"><strong>Email:</strong></label>
                  <span id="sprytextfield2">
                    <input type="text" class="contact_input" />
                    <br />
                    <br />
                    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div>
                <div class="form_row">
                  <label class="contact"><strong>Phone:</strong></label>
                  <span id="sprytextfield3">
                    <input type="text" class="contact_input" />
                    <br />
                    <br />
                  </span></div>
                <div class="form_row">
                  <label class="contact"><strong>Company:</strong></label>
                  <input type="text" class="contact_input" />
                </div>
                <div class="form_row">
                  <label class="contact"><strong>Message:</strong></label>
                  <textarea name="textarea" class="contact_textarea" ></textarea>
                </div>
                <p>&nbsp;                </p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>
                  <input name="input" type="submit" />
                </p>
                <div class="form_row"></div>
              </form>
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
<script type="text/javascript">
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {isRequired:false});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>