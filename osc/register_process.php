<?php
include_once('class/user_profile.php');
$uname=$_POST['txt_username'];
$password=$_POST['txt_password'];
$fname=$_POST['txt_first_name'];
$lname=$_POST['txt_last_name'];
$address1=$_POST['txt_address_line1'];
$address2=$_POST['txt_address_line2'];
$city=$_POST['txt_city'];
$state=$_POST['txt_state'];
$pincode=$_POST['txt_pincode'];
$email=$_POST['txt_email'];
$phoneno=$_POST['txt_phone'];
$obj=new user_profile();
$obj->insert($uname,$password,$fname,$lname,$address1,$address2,$city,$state,$pincode,$email,$phoneno);
?>

<script language="javascript">
		window.location='register_sucess.php';
		</script>



        