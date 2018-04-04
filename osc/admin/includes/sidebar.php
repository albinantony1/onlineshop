<div class="left_content">
    <div class="title_box"><?php
	  include_once('../class/category.php');
	  $obj=new category();
  		$res=$obj->viewall();
			?>Categories</div>
    
        <ul class="left_menu">
        <?php
		while($r=mysql_fetch_array($res))
		{
		?>
        <li class="odd"><a href="search.php?id=<?php echo $r[0];?>"><?php echo $r[1];?></a></li>
        <?php
		}
		?>
        </ul>
      <div class="title_box">Newsletter</div>  
     <div class="border_box">
		<input type="text" name="newsletter" class="newsletter_input" value="your email"/>
        <a href="#" class="join">join</a>
     </div>  
     
     <div class="banner_adds">
     
     <a href="#"><img src="images/bann2.jpg" alt="" title="" border="0" /></a>
     </div>    
        
    
   </div>