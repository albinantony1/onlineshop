<?php 
include_once("cls_dboperation.php");
class add_cart
{
function insert($a,$b,$c,$d,$is)
 {
    $dat=date('d/m/Y');
    $sql="insert into cart(logid,spice,quantity,quality,amount,date,status)values('$is','$a','$b','$c','$d','$dat',1)";
   $obj=new db();
   $obj->exe($sql);
  }
  function view()
   {
   $sql="select * from cart where status=1";
   $obj=new db();
   $r=$obj->exe($sql);
   return $r;
   }  
    function place($id)
   {
   $sql="update cart set status=0 where logid='$id'";
   $obj=new db();
   $r=$obj->exe($sql);
   return $r;
   }
   }
   ?>