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
                         <li><a href="index.php" class="nav1">  Home </a></li>
                         <li class="divider"></li>
                         <li></li>
                         <li class="divider"></li>
                         <li></li>
                         <li class="divider"></li> 
                         <li><a href="login.php" class="nav4">Log In</a></li>
                         <li class="divider"></li>
                         <li><a href="register.php" class="nav4">Register</a>                        <li class="divider"></li>
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
    Navigation: <a href="index.php">Home</a> &lt; <span class="current">Search Result</a></span></div>
    <?php include('includes/sidebar.php'); ?>
    <!-- end of left content -->
   
   
   <div class="center_content">
   	<div class="center_title_bar"> Products</div>
    <?php
	
	include_once('class/product_details.php');
	if(isset($_POST['submit']))
	{
		$d=$_POST['search'];
	
	$obj=new product_details();
	$res=$obj->view_details_name($d);
	}
	$i=0;
	while($r=mysql_fetch_array($res))
	{
		$i=$i+1;
		?>


    	<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.php"><?php   echo $r[2];?></a></div>
                 <div class="product_img"><a href="details.php"><img src="upload/<?php echo $r[6];?>" height="120" width="100" alt="" title="" border="0" /></a></div>
                 <div class="prod_price"> <span class="price"><img src="images/rs.jpg" alt="" title="" width="18" height="18" border="0" /><?php echo $r[4];?></span></div>                        
            </div>
            <div class="bottom_prod_box"></div>             
            <div class="prod_details_tab">
            <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" title="" border="0" class="left_bt" /></a><a href="details.php?id=<?php echo $r[0];?>" class="prod_details">details</a>            
            </div>                     
        </div>
    <?php
	if($i>3)
	{
		?>
        <tr>
        <br/>
        <?php
		$i=0;
	}
	}
	?>
 

 

   </div><!-- end of center content -->
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
   <!-- end of right content -->   
   
            
   </div><!-- end of main content -->
   <?php include('includes/footer.php'); ?> 
   </div>
<!-- end of main_container -->
</body>
</html>