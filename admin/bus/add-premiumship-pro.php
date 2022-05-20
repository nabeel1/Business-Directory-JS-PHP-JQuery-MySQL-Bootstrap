<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >


<table align="center">

<?php


$cat=$_REQUEST['category'];
$lid=$_REQUEST['lid'];

$lid_len=strlen($lid);


if($lid_len=="" or  $cat=="-1")
{
echo "<font size='+2' color='#009900'> Please Fill All * Field</font>";
}
else
{

if($cat==0)
{
mysql_query("UPDATE tblbusinesses SET iPaid='free' , iFeatured='free' WHERE id='$lid' ");
}else if($cat==1)
{
mysql_query("UPDATE tblbusinesses SET iPaid='premium' , iFeatured='premium' WHERE id='$lid' ");
}else if($cat==2)
{
mysql_query("UPDATE tblbusinesses SET iPaid='top' , iFeatured='top' WHERE id='$lid' ");
}

echo "<font size='+2' color='#009900'> Business Type Change Sucessfully </font>";
}
?>
</table>
<!-- -->

<br />
<a href="premium-listing.php">GO Back</a>

</div>


<?php include '../footer.php' ?>
