<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >




<table align="center">
<form action="edit-city-pro.php" method="post">


<tr height="40px"><td>Select City/Town<font color="#FF0000"> *</font> : </td>
<td><select name="city">
<option value="-1">Select Country/State</option>
<?php 
$res=mysql_query("SELECT * FROM city ORDER BY city Asc");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$city=mysql_result($res,$i,"city");
$id=mysql_result($res,$i,"id");

echo "<option value='$city'>$city</option>";
$i++;
}
?>
</select>
</td>
</tr>



<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Edit City/Town" /></td>
</tr>


</form>
</table>



<!-- -->

</div>


<?php include 'footer.php' ?>
