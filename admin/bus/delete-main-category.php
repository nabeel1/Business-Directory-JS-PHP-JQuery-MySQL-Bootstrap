<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >

<?php

$id=addslashes($_REQUEST['id']);
$cat=addslashes($_REQUEST['cat']);

mysql_query("DELETE FROM main_category WHERE id='$id'");


$cat1="uncategorized";

mysql_query("UPDATE tblindustries SET main_category='$cat1' WHERE main_category='$cat' ");
?>

<font size="+2" color="#009900"> Category DELETED Sucessfully </font>

<!-- -->

<br />
<a href="main-category.php">GO Back</a>


</div>


<?php include '../footer.php' ?>
