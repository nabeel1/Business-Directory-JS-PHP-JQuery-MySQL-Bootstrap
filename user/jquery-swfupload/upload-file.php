<?php
include '../config.php';

$c=$_REQUEST['c'];
$rand=$_REQUEST['r'];

$filename1=$rand .basename($_FILES['uploadfile']['name']);

mysql_query("INSERT INTO city_image (image,city) VALUES ('$filename1','$c')");


$uploaddir = '../../uploads/'; 
$file = $uploaddir . $rand .basename($_FILES['uploadfile']['name']); 
$size=$_FILES['uploadfile']['size'];
if($size>1048576)
{
	echo "error file size > 1 MB";
	unlink($_FILES['uploadfile']['tmp_name']);
	exit;
}
if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) { 
  echo "success"; 
} else {
	echo "error ".$_FILES['uploadfile']['error']." --- ".$_FILES['uploadfile']['tmp_name']." %%% ".$file."($size)";
}
?>