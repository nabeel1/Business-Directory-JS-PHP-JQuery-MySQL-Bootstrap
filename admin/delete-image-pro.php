<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >

<?php
$city=$_REQUEST['city'];

if($city=="-1")
{

echo "<font size='+2' color='#009900'>Go Back And Select City</font>";
}
else
{
$res=mysql_query("SELECT * FROM city_image WHERE city='$city'");
$no_rows=MYSQL_NUM_ROWS($res);
?>

<table bgcolor="#ffffff">

<tr>
<td width="100px"><font color="#009900">Pic ID</font> </td>
<td width="400px"><font color="#009900">Picture</font> </td>
<td width="150px"><font color="#009900">Delete Pic</font> </td>
</tr>

<?php
$i=0;
while($i<$no_rows)
{
$id=mysql_result($res,$i,"id");
$image=mysql_result($res,$i,"image");
echo "<tr>
<td width='100px'>$id </td>
<td width='400px'><img src='../uploads/$image'  height='200px' width='400px' /> </td>
<td width='150px'><a href='delete-image-pro-confirm.php?id=$id'>Delete This Picture</a> </td>
</tr>";


$i++;
}

?>

</table>
<!-- -->


<?php
}
?>

</div>


<?php include 'footer.php' ?>
