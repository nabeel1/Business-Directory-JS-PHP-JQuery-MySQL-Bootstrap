<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >


<table align="center">

<?php


$city=$_REQUEST['city'];


if($city=="-1")
{
echo "<font size='+2' color='#009900'> Please Go Back And Select Any City</font>";
}
else
{
$res=mysql_query("DELETE FROM city WHERE city='$city'");
echo "<font size='+2' color='#009900'> This City Deleted Sucessfully</font>";
}
?>
</table>
<!-- -->

</div>


<?php include '../footer.php' ?>
