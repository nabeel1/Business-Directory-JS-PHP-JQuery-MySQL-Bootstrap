<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->




<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >



<center><font size="+2">ADD Successfully Placed</font></center>

<?php
$p=$_REQUEST['p'];
$home=$_REQUEST['home'];

echo $p;
echo $home;

if($p=="city")
{
mysql_query("UPDATE advertise  SET adds='$home' WHERE id='1'");
}

if($p=="main")
{
mysql_query("UPDATE advertise  SET adds='$home' WHERE id='2'");
}

if($p=="sub")
{
mysql_query("UPDATE advertise  SET adds='$home' WHERE id='3'");
}

if($p=="free")
{
mysql_query("UPDATE advertise  SET adds='$home' WHERE id='4'");
}
?>


<!-- -->

<br />
<a href="advert.php">GO Back</a>


</div>


<?php include 'footer.php' ?>
