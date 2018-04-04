<?php
include_once("dbase.php");
class user_profile
{
	function insert($uname,$password,$fname,$lname,$address,$address2,$city,$state,$pincode,$email,$phoneno)
	{
	 echo $sql="insert into user_profile(username,password,first_name,last_name,address_line1,address_line2,city,state,pincode,email,phone) values('$uname','$password','$fname','$lname','$address','$address2','$city','$state',$pincode,'$email',$phoneno)";
	 $obj=new dbase();
		$res=$obj->execute($sql);
	
	$sql="insert into user_login(username,password,role) values('$uname','$password','user')";
		$obj=new dbase();
		$res=$obj->execute($sql);}
	function view()
	{
		$sql="select * from user_profile";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
		
	}
	function delete($id)
	{
		$sql="delete from user_profile where id=$id";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}
	
	
	function update($id,$a)
	{
		$sql="update user_profile set name='$a' where id=$id";
		$obj=new dbase();
		$res=$obj->execute($sql);
		return $res;
	}
	
}
?>