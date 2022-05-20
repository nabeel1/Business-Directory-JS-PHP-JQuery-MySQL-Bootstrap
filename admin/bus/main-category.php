<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >

<?php

$res=mysql_query("SELECT * FROM main_category ORDER BY id Desc");
$no_rows=MYSQL_NUM_ROWS($res);

if($no_rows=="")
{
echo "<font size='+2' color='#009900'>No Email Found.</font>";
}
else
{
?>

<table bgcolor="#ffffff">

<tr>
<td width="100px"><font color="#009900">Internal No</font> </td>
<td width="230px"><font color="#009900">Category Name</font> </td>
<td width="150px"><font color="#009900">Edit Email</font> </td>
<td width="150px"><font color="#009900">Delete Email</font> </td>
</tr>

<?php
$i=0;
while($i<$no_rows)
{
$id=mysql_result($res,$i,"id");
$cat=mysql_result($res,$i,"category");
echo "<tr>
<td width='100px'>$id </td>
<td width='230px'> $cat </td>
<td width='150px'><a href='edit-main.php?id=$id'>Edit This Category</a> </td>
<td width='150px'><a href='delete-main-category.php?id=$id&cat=$cat'>Delete This Category</a> </td>
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


<?php include '../footer.php' ?>
