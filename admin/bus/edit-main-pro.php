<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >


<table align="center">

<?php

$id=$_REQUEST['id'];
$cat=$_REQUEST['cat'];
$cat1=$_REQUEST['cat1'];
$cdesc=$_REQUEST['cdesc'];
$title=$_REQUEST['title'];
$mdesc=$_REQUEST['mdesc'];
$keyword=$_REQUEST['keyword'];

$cat_len=strlen($cat);
$cdesc_len=strlen($cdesc);

if($cat_len=="" or $cdesc_len=="")
{
echo "<font size='+2' color='#009900'> Please Fill All * Field</font>";
}
else
{

mysql_query("UPDATE main_category SET category='$cat' , mtitle='$title' , mdesc='$mdesc',mkeyword='$keyword' ,pdesc='$cdesc' WHERE id='$id' ");

mysql_query("UPDATE tblindustries SET main_category='$cat' WHERE main_category='$cat1' ");

echo "<font size='+2' color='#009900'> MAIN CATEGORY EDIT Sucessfully </font>";
}
?>
</table>
<!-- -->

<br />
<a href="main-category.php">GO Back</a>

</div>


<?php include '../footer.php' ?>
