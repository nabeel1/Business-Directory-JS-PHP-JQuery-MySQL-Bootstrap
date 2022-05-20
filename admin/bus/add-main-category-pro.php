<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >


<table align="center">

<?php


$cat=$_REQUEST['cat'];
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

mysql_query("INSERT INTO main_category (category,mtitle,mdesc,mkeyword,pdesc) VALUES ('$cat','$title','$mdesc','$keyword','$cdesc')");
echo "<font size='+2' color='#009900'> MAIN CATEGORY Added Sucessfully </font>";
}
?>
</table>
<!-- -->

<br />
<a href="add-main-category.php">GO Back</a>

</div>


<?php include '../footer.php' ?>
