<?php
include_once('dbase.php');
class product_details 
{
function insert($category_id,$title,$brand,$price,$quantity,$description)
	{
	  $sql= "insert into product_details(category_id,title,brand,price,quantity,description) values('$category_id','$title','$brand','$price','$quantity','$description')";
		$obj=new dbase();
	    $res=$obj->execute($sql);
	}
	
	function view()
	{
		$sql="select * from product_details";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;		
	}
	function delete($id)
	{
		$sql="delete from product_details where product_id=$id";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}
	function update($id,$a)
	{
		$sql="update product_details set name='$a' where id=$id";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}
}
?>