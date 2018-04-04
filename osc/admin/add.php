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
    Navigation: <span class="current"><a href="index.html">Home</a>&lt;Add</div><!-- end of left content -->
   
   
  
   <div class="center_content">
     <div class="center_title_bar">
       <p>ADD NEW ITEMS</p>
   	  <p>&nbsp; </p>
 	</div>
    <form action="add_process.php" method="post"  enctype="multipart/form-data">
     <div class="center_content">
       <table width="533" border="1">
       <tr>
         <td><table width="533" border="1">
           <tr>
             <td width="193" height="44">Category ID</td>
             <td width="324">
               <label for="select3"></label>
			      <select name="category_id" id="select3">
	 <?php
	  include_once('../class/category.php');
	  $obj=new category();
  		$res=$obj->viewall();
		while($r=mysql_fetch_array($res))
		{
		?>
           <option><?php echo $r[1];?></option>          
        <?php
		}
		?>
          </select>
             </td>
           </tr>
           <tr>
             <td height="44">Title</td>
             <td>
               <label for="textfield"></label>
               <input type="text" name="txt_title" id="textfield" />
             </td>
           </tr>
           <tr>
             <td height="44">Brand</td>
             <td>
               <label for="textfield2"></label>
               <input type="text" name="txt_brand" id="textfield2" />
             </td>
           </tr>
           <tr>
             <td height="44">Price</td>
             <td>
               <input type="text" name="txt_price" id="textfield3" />
             </td>
           </tr>
           <tr>
             <td height="44">Quantity</td>
             <td>
               <input type="text" name="txt_quantity" id="textfield4" />
             </td>
           </tr>
           <tr>
             <td height="44">Image</td>
             <td>
               <input type="file" name="image" id="fileField" />
            </td>
           </tr>
           <tr>
             <td height="44">Description</td>
             <td>
               <textarea name="description" id="description" cols="45" rows="8"></textarea>
           </td>
           </tr>
           <tr>
             <td height="44" colspan="2" align="center">
               <input type="submit" name="button" id="button" value="Submit" />
             </td>
             </tr>
           
         </table></td>
       </tr>
       </table>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
      
     </div>
     </form>
   </div>
    
  
     <div class="title_box">new</div>
     <ul class="left_menu">
      <li class="odd"></li>
        <li class="even"></li>
         <li class="odd"></li>
        <li class="even"></li>
         <li class="odd"></li>
         <li class="even"></li>
        <li class="odd"></li>
        <li class="even"></li>
     </ul>
   </div><!-- end of right content -->   
   
            
   <!-- end of main content -->
   
   
   
   <div class="footer">
   

        <div class="left_footer"> <a href="index.html"><img src="images/footer_logo.png" alt="" title="" width="170" height="49"/></a>
     </div>
        
        <div class="center_footer">electronix.com All Rights Reserved 2017<br />
          <br />
        <img src="images/payment.gif" alt="" title="" />
        </div>
        
        <div class="right_footer"></div>   
   
   </div>                 
</div>

</div>
<!-- end of main_container -->
</body>
</html>