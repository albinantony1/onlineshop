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
	<div class="top_bar">
    	<div class="top_search">
        	<div class="search_text"><a href="#"> Search</a></div>
            <input type="text" class="search_input" name="search" />
            <input type="image" src="images/search.gif" class="search_bt"/>
        </div>
        
        
    
    </div>
	<div id="header">
        
        <div id="logo">
            <a href="index.php"><img src="images/logo.png" alt="" title="" border="0" width="237" height="140" /></a>
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
                            <a href="details.php" class="details">details</a>
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
    Navigation: <a href="index.php">Home</a> &lt; <span class="current"><a href="contact.php">Contact Us</a></span>
    
    </div>              
    
    
   <div class="left_content">
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
      <div class="title_box">Newsletter</div>  
     <div class="border_box">
		<input type="text" name="newsletter" class="newsletter_input" value="your email"/>
        <a href="#" class="join">join</a>
     </div>  
     
     <div class="banner_adds">
     
     <a href="#"><img src="images/bann2.jpg" alt="" title="" border="0" /></a>
     </div>    
        
    
   </div><!-- end of left content -->
  

   
   <div class="center_content">
   	<div class="center_title_bar">Contact Us</div>
    
    	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
              	<div class="contact_form">
                           
                    <div class="form_row">
                    <label class="contact"><strong>Name:</strong></label>
                    <input type="text" class="contact_input" />
                    </div>  

                    <div class="form_row">
                    <label class="contact"><strong>Email:</strong></label>
                    <input type="text" class="contact_input" />
                    </div>


                    <div class="form_row">
                    <label class="contact"><strong>Phone:</strong></label>
                    <input type="text" class="contact_input" />
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>Company:</strong></label>
                    <input type="text" class="contact_input" />
                    </div>


                    <div class="form_row">
                    <label class="contact"><strong>Message:</strong></label>
                    <textarea class="contact_textarea" ></textarea>
                    </div>

                    
                    <div class="form_row">
                    <a href="#" class="contact">send</a>
                    </div>      
                    
                </div> 
                
                                     
            </div>
            <div class="bottom_prod_box_big"></div>                                
        </div>
       
    
   
   </div><!-- end of center content -->
   
   <div class="right_content">
   		<div class="shopping_cart">
        	<div class="cart_title">Shopping cart</div>
            
            <div class="cart_details">
              <p>0 items <br />
                <span class="border_cart"></span>
            Total:0.00        </p>
          </div>
            
            <div class="cart_icon"><a href="#" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" title="" width="48" height="48" border="0" /></a></div>
        
        </div>
	  <div class="title_box">Manufacturers</div>
    
        <ul class="left_menu">
        <li class="odd"><a href="#">Sony</a></li>
        <li class="even"><a href="#">Samsung</a></li>
         <li class="odd"><a href="#">Daewoo</a></li>
        <li class="even"><a href="#">LG</a></li>
         <li class="odd"><a href="#">Fujitsu Siemens</a></li>
         <li class="even"><a href="#">Motorola</a></li>
        <li class="odd"><a href="#">Phillips</a></li>
        <li class="even"><a href="#">Beko</a></li>
        </ul>      
     
     <div class="banner_adds">
     
     <a href="#"><img src="images/bann1.jpg" alt="" title="" border="0" /></a>
     </div>        
     
   </div><!-- end of right content -->   
   
            
   </div><!-- end of main content -->
   
   
   
   <div class="footer">
   

        <div class="left_footer"> <a href="index.php"><img src="images/footer_logo.png" alt="" title="" width="170" height="49"/></a>
     </div>
        
        <div class="center_footer">
        Template name. All Rights Reserved 2008<br />
          <a href="http://csscreme.com"><img src="images/csscreme.jpg" alt="csscreme" title="csscreme" border="0" /></a><br />
        <img src="images/payment.gif" alt="" title="" />
        </div>
        
        <div class="right_footer">
        <a href="index.php">home</a>
        <a href="about us.php">about</a>
        <a href="#">sitemap</a><a href="contact.php">contact us</a>
        </div>   
   
   </div>                 


</div>
<!-- end of main_container -->
</body>
</html>