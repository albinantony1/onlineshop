<?php require_once('../Connections/osc.php'); ?>

<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}



if (isset($_POST['button'])) {
  $loginUsername=$_POST['txt_username'];
  $password=$_POST['txt_password'];  
  $MM_redirectLoginSuccess = "/osc/admin/admin.php";
  $MM_redirectLoginFailed = "/osc/admin/login.php";
  	
  $LoginRS__query="SELECT username, password, role FROM user_profile WHERE username='$loginUsername' AND password='$password' AND `role`='admin'";    
  $LoginRS = mysqli_query($osc,$LoginRS__query);
  $loginFoundUser = mysqli_num_rows($LoginRS); 
if ($loginFoundUser) {
     
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

   
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }

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
            <a href="index.php"><img src="images/logo.png" alt="electronix" title="" border="0" width="237" height="140" /></a>
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
                         <li></li>
                         <li></li>
                         <li></li>
                         <li class="divider"></li>
                         <li></li>
                      <li></li>
                         
                    </ul>

             <div class="right_menu_corner"></div>
            </div><!-- end of menu tab -->
            
     <div class="crumb_navigation">
    Navigation: <a href="index.php">Home</a> &lt; <span class="current">Login</span>
    
    </div>              
    
    
   <div class="left_content">
   
      <div class="banner_adds"></div>    
        
    
   </div><!-- end of left content -->
  

   
   <div class="center_content">
   	<div class="center_title_bar">Admin Login</div>
    
    	
        <div class="prod_box_big">
          <div class="top_prod_box_big"></div>
      <div class="center_prod_box_big">            
                 <form method="POST" action="#" name="f1">
              	<div class="contact_form">
                           
                    <div class="form_row">
                    
                    <label class="contact"><strong>User Name:</strong></label>
                    <input type="text" class="contact_input"  name="txt_username"/>
                    </div> 

                    <div class="form_row">
                    <label class="contact"><strong>Password:</strong></label>
                    <input name="txt_password" type="password" class="contact_input" id="*" maxlength="10" />
                    </div>


                       
                    
              </div>
              	<p>&nbsp;</p>
              	<p>&nbsp;</p>
              	<p>&nbsp;</p>
              	<p>&nbsp;</p>
              	<p>&nbsp;</p>
              	<p>
              	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="button" id="button" value="Login" />
              	</p></p></form>
      </div>
            <div class="bottom_prod_box_big"></div>                                
      </div>
       
    
   
   </div><!-- end of center content -->
   
   
   <div class="right_content">
        
     
     <div class="banner_adds"></div>        
     
   </div><!-- end of right content -->   
   
            
   </div><!-- end of main content -->
   
   
   
   <div class="footer">
   

        <div class="left_footer"> <a href="index.php"><img src="images/footer_logo.png" alt="" title="" width="170" height="49"/></a>
     </div>
        
        <div class="center_footer">electronix.com All Rights Reserved 2017<br />
          <br />
        <img src="images/payment.gif" alt="" title="" />
        </div>
        
        <div class="right_footer"></div>   
   
   </div>                 


</div>
<!-- end of main_container -->
</body>
</html>