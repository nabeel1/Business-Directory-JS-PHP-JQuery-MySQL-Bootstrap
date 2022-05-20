<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >

<?php
$res=mysql_query("SELECT id,sBusinessName,iPaid,dSubStartDate,dSubEndDate FROM tblbusinesses WHERE iPaid='top' or iPaid='premium'  ORDER BY id Desc");
$no_rows=MYSQL_NUM_ROWS($res);

if($no_rows=="")
{
echo "<font size='+2' color='#009900'>Not Found Any Listing.</font>";
}
else
{
?>

<table bgcolor="#ffffff">

<tr>
<td width="100px"><font color="#009900">Internal No</font> </td>
<td width="230px"><font color="#009900">Business Name</font> </td>
<td width="150px"><font color="#009900">Type</font> </td>
<td width="100px"><font color="#009900">Time</font> </td>
<td width="100px"><font color="#009900">Send Email</font> </td>
<td width="150px"><font color="#009900">Turn To Normal</font> </td>
<td width="150px"><font color="#009900">Update</font> </td>
<td width="150px"><font color="#009900">Edit</font> </td>
<td width="150px"><font color="#009900">Delete</font> </td>
</tr>

<?php
$i=0;
while($i<$no_rows)
{
$id=mysql_result($res,$i,"id");
$iPaid=mysql_result($res,$i,"iPaid");
$sBusinessName=mysql_result($res,$i,"sBusinessName");
$dSubStartDate=mysql_result($res,$i,"dSubStartDate");
$dSubEndDate=mysql_result($res,$i,"dSubEndDate");
echo "<tr>
<td width='100px'>$id </td>
<td width='230px'> $sBusinessName </td>
<td width='150px'> $iPaid </td>";

if($iPaid=='top' or $iPaid=='premium')
{
 $today = mktime(0,0,0,date("m"),date("d"),date("Y"));
	if($today>$dSubEndDate){
		echo "<td width='100px'>Expire</td>";
		}else{
		echo "<td width='100px'>Alive</td>";
		}
}
else
{
echo "<td width='100px'>Free</td>";
}
echo "<td><a href='send-email.php?lid=$id'>Email</a></td>
<td><a href='turn-to-free.php?lid=$id'>Turn to Free</a></td>
<td width='150px'><a href='upgrade-listing.php?bid=$id&type=$iPaid'>UpGrade</a> </td>
<td width='150px'><a href='edit-listing.php?bid=$id'>Edit</a> </td>
<td width='150px'><a href='delete-listing.php?id=$id'>Delete</a> </td>
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
