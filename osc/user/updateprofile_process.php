<?php
session_start();
$uname=$_SESSION['MM_Username'];
include_once('../class/user_profile.php');
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
$obj->update($fname,$lname,$address1,$address2,$city,$state,$pincode,$email,$phoneno);
?>