<?php
include_once('../class/product_details.php');
$id=$_POST['h1'];
$category_id=$_POST['category_id'];
$title=$_POST['txt_title'];
$brand=$_POST['txt_brand'];
$price=$_POST['txt_price'];
$quantity=$_POST['txt_quantity'];
$image=$_FILES["image"]["name"];
copy($_FILES['image']['tmp_name'],'../upload/'.$image);
$description=$_POST['description'];
$obj=new product_details();
$res=$obj->update($id,$category_id,$title,$brand,$price,$quantity,$image,$description);
?>
<script language="javascript">
window.location='view.php';
</script>