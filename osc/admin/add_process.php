<?php
include_once('../class/product_details.php');
include_once('../class/category.php');
$category_id=$_POST['category_id'];
$obj=new category();
$res=$obj->view($category_id);
$r=mysql_fetch_array($res);
$cid=$r[0];
$title=$_POST['txt_title'];
$brand=$_POST['txt_brand'];
$price=$_POST['txt_price'];
$quantity=$_POST['txt_quantity'];
$image=$_FILES["image"]["name"];
copy($_FILES['image']['tmp_name'],'../upload/'.$image);
$description=$_POST['description'];
$obj=new product_details();
$obj->insert($cid,$title,$brand,$price,$quantity,$image,$description);
?>
<script language="javascript">
		window.location='index.php';
		</script>