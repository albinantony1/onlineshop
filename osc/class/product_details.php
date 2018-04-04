<?php
include_once('dbase.php');
class product_details 
{
function insert($category_id,$title,$brand,$price,$quantity,$image,$description)
	{
	  $sql= "insert into product_details(category_id,title,brand,price,quantity,image,description) values('$category_id','$title','$brand','$price','$quantity','$image','$description')";
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
	
	function view_details($id)
	{
		$sql="select * from product_details where `product_id`=$id";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}
	function view_details_name($title)
	{
		$sql="SELECT * FROM `product_details` WHERE `title`='$title'";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}
	
	function view_detail($id)
	{
 $sql="select * from product_details where `category_id`=$id";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}
	function view_category()
	{
		$sql="select * from category_details";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}	
		function view_categorybyId($cid)
	{
		$sql="select * from category_details where category_id='$cid'";
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
	function update($id,$category_id,$title,$brand,$price,$quantity,$image,$description)
	{
		$sql="update product_details set category_id='$category_id',title='$title',brand='$brand',price='$price',quantity='$quantity',image='$image',description='$description' where id=$id";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}
}
?>