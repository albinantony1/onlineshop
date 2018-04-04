<?php
session_start();
include_once('class/user_login.php');
$un=$_POST['txt_username'];
$pw=$_POST['txt_password'];
//$_SESSION['username']=$un;
$obj=new user_login();
$res=$obj->user_log($un,$pw);
$r=mysql_fetch_array($res);
if($r[2]==admin)
    {
		$_SESSION['un']=$r[0];
		?>
		<script language="javascript">
		window.location="admin/index.php";
		</script>
        <?php
	}
elseif($r[2]==user)
    {
		$_SESSION['un']=$r[0];
		?><script language="javascript">
		window.location="user/index.php";
		</script>
        <?php
	}
else
    {
		$_SESSION['un']="invalid user";
		?>
		<script language="javascript">
		window.location="index.php";
		</script>
        <?php
		
	}		
?>