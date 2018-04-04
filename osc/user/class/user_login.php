<?php
include_once("dbase.php");
class user_login
{

function insert($uname,$password)
	{
	 $sql="insert into user_login(username,password) values('$uname','$password')";
		$obj=new dbase();
		$res=$obj->execute($sql);
	}
	
	function view()
	{
		$sql="select * from user_login";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
		
	}
	function delete($id)
	{
		$sql="delete from user_login where id=$id";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}
	
	
	function update($id,$a)
	{
		$sql="update user_login set name='$a' where id=$id";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}
	function user_log($un,$pw)
	{
		echo $sql="select * from user_login where username='$un' and password='$pw'";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}
	
}
?>