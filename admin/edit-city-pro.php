<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >

<?php
$city1=$_REQUEST['city'];
$res1=mysql_query("SELECT * FROM city WHERE city='$city1'");
$state1=mysql_result($res1,0,"state");
$id=mysql_result($res1,0,"id");
$city=mysql_result($res1,0,"city");
$cdesc=mysql_result($res1,0,"cdesc");
$mdesc=mysql_result($res1,0,"mdesc");
$title=mysql_result($res1,0,"title");
$keyword=mysql_result($res1,0,"keyword");
?>


<table align="center">
<form action="confirm-city-edit-pro.php" method="post">
<input type="hidden" name="city1" id="city1" value="<?php echo $city1; ?>"  />
<tr height="40px"><td>City/Town Name<font color="#FF0000">*</font> : </td>
<td><input type="text" id="city" name="city" size="50" value="<?php echo $city; ?>" ></td>
</tr>

<tr height="40px"><td>Select Country/State<font color="#FF0000"> *</font> : </td>
<td><select name="state">
<option value="<?php echo $state1; ?>"><?php echo $state1; ?></option>
<?php 
$res=mysql_query("SELECT * FROM state");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$state=mysql_result($res,$i,"state");
$id=mysql_result($res,$i,"id");

echo "<option value='$state'>$state</option>";
$i++;
}
?>
</select>
</td>
</tr>

<tr height="40px"><td>Description<font color="#FF0000">*</font> : </td>
<td><textarea name="cdesc" id="cdesc" cols="50" rows="10"><?php echo $cdesc; ?></textarea></td>
</tr>

<tr height="40px"><td>Meta Title: </td>
<td><input type="text" id="title" name="title" size="60" value="<?php echo $title; ?>" ></td>
</tr>

<tr height="40px"><td>Meta Description : </td>
<td><textarea name="mdesc" id="mdesc" cols="40" rows="6"><?php echo $mdesc; ?></textarea></td>
</tr>

<tr height="40px"><td>meta Keyword : </td>
<td><textarea name="keyword" id="keyword" cols="40" rows="6"><?php echo $keyword; ?></textarea></td>
</tr>

<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Add City/Town" /></td>
</tr>


</form>
</table>



<!-- -->

</div>


<?php include 'footer.php' ?>
