<div class="left_content">
    <div class="title_box"><?php
	require_once('Connections/osc.php');
	  include_once('class/category.php');
	  $qry="select * from category_details";
	  $res=mysqli_query($osc,$qry);
			?>Categories</div>
    
        <ul class="left_menu">
        <?php
		while($r=mysqli_fetch_array($res))
		{
		?>
        <li class="odd"><a href="search.php?id=<?php echo $r[0];?>"><?php echo $r[1];?></a></li>
        <?php
		}
		?>
        </ul>
     
     <div class="border_box">
		
     </div>  
     
     <div class="banner_adds">
     
    
     </div>    
        
    
   </div>