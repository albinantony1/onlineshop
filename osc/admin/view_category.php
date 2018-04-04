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
                         <li><a href="specials.php" class="nav3">Specials</a></li>>
                         <li class="divider"></li>                         
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
    Navigation: <span class="current"><a href="index.html">Home</a>&lt;Admin&lt;View</div>
   </div>
   <div class="center_content">
     <div class="center_title_bar">
       <p>EDIT OR DELETE CATEGORIES</p>
   	  <p>&nbsp; </p>
 	</div>
    <form action="" method="post">
     <div class="center_content">
     <?php 
	 include_once('../class/category.php');
	 $obj=new category();
	 $res=$obj->viewall();
	 ?>
       <table width="356" border="0">
         <tr>
           <td width="135" height="44" align="center"><strong>category Name</strong></td>
           <td width="135" align="center"><strong> Edit</strong></td>
           <td width="72" align="center"><strong>Delete</strong></td>
         </tr>
         <?php
		 while($r=mysql_fetch_array($res))
		 {
		?>
         <tr>
           <td align="center"><p><?php echo $r[1];?></p></td>
           <td align="center"><a href="edit_category.php?id=<?php echo $r[0];?>">Edit</a></td>
           <td align="center"><a href="delete_category.php?id=<?php echo $r[0];?>">Delete</a></td>
         </tr>
         <?php
		 }
		 ?>
        </table>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
     </div>
     </form>
   </div>
    
  
      
   
            
   </div><!-- end of main content -->
   
   
   
   <div class="footer">
   

        <div class="left_footer"> <a href="index.html"><img src="images/footer_logo.png" alt="" title="" width="170" height="49"/></a>
     </div>
        
        <div class="center_footer">
        Template name. All Rights Reserved 2017<br />
        <a href="http://csscreme.com"><img src="images/csscreme.jpg" alt="csscreme" title="csscreme" border="0" /></a><br />
        <img src="images/payment.gif" alt="" title="" />
        </div>
        
        <div class="right_footer">
        <a href="index.html">home</a>
        <a href="about us.html">about</a>
        <a href="details.html">sitemap</a><a href="contact.html">contact us</a>
        </div>   
   
   </div>                 


</div>
<!-- end of main_container -->
</body>
</html>