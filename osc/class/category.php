<?php
include_once('dbase.php');
class category
{
 	function insert($a)
	{
        $sql="insert into category_details(category_name) values('$a')";
		$obj=new dbase();
		$res=$obj->execute($sql);
	}
	function delete($id)
	{
	 	$sql="delete from category_details where category_id=$id";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}
	function update($id,$category_name)
	{
		$qry="update category_details set category_name='$category_name' where category_id=$id";
		$obj=new dbase();
		$res=$obj->execute($qry);
		return $res;
	}
	function viewall()
	{
		$qry="select * from category_details";
		$obj=new dbase();
		$res=$obj->execute($qry);
		return $res;
	}
	function view($cname)
	{
		$qry="select * from category_details where category_name='$cname'";
		$obj=new dbase();
		$res=$obj->execute($qry);
		return $res;
	}
	function viewid($id)
	{
		$qry="select * from category_details where category_id='$id'";
		$obj=new dbase();
		$res=$obj->execute($qry);
		return $res;
	
}
}
