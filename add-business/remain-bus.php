<?php include 'header.php';?>
<?php  include 'leftbar-1.php';?>



<div id="main" style=" height:966px; width:458px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:290px; top:136px; float:left; background-color:#EBF3F8;" >


<center><h1><font color="#000000">Step No. 2 of 3</font></h1></center>

<center><h2><font color="#32A4D5">Upload Pictures / Photos</font></h2></center>





<div id="swfupload-control">

	<p>Upload upto 5 image files(jpg, png, gif), each having maximum size of 1MB</p>

<center>	<input type="button" id="button" /> </center>

	<p id="queuestatus" ></p>

	<ol id="log"></ol>

</div>



<center><h2><font color="#32A4D5">Add Advance Information</font></h2></center>



<?php $bid=strip_tags(addslashes($_REQUEST['bid'])); ?>


<table align="center" width="430px">

<form action="post-job-pro.php" method="post" enctype="multipart/form-data"/>



<input type="hidden" name="bid" id="bid" value="<?php echo $bid;?>" />

<!-- <input type="hidden" name="m" id="m" value="<?php //echo $m;?>" /> -->



<!--<tr height="40px"><td width="125px">Description : </td>

<td><textarea type="text" id="cdesc" name="cdesc" rows="6" cols="30" ></textarea></td>

</tr> -->



<tr height="40"><td>Company Logo<font color="#FF0000"> </font> </td>

<td><input type="file" name="form_data" size="20"></td>

</tr>



<tr height="40px"><td width="125px">Promotional Video:<br /> (Add Youtube Embedd Code Here) </td>

<td><textarea type="text" id="video" name="video" rows="6" cols="30" ></textarea></td>

</tr>





<tr height="40px"><td width="125px">Website Address : </td>

<td><input type="text" id="website" name="website" size="30" ></td>

</tr>





<tr height="40px"><td width="125px">Business Category 2<font color="#FF0000">*</font> : </td>

<td><select name="cat2" style="width:250px;">

<option value="-1">Select Business Category</option>

<?php 

$res=mysql_query("SELECT id,sIndustryName FROM tblindustries ORDER BY sIndustryName ASC");

$num_rows=MYSQL_NUM_ROWS($res);

$i=0;

while($i<$num_rows)

{

$city=mysql_result($res,$i,"sIndustryName");

$id=mysql_result($res,$i,"id");



echo "<option value='$id'>$city</option>";

$i++;

}

?>

</select>

</td>

</tr>



<tr height="40px"><td width="125px">Business Category 3<font color="#FF0000">*</font> : </td>

<td><select name="cat3" style="width:250px;">

<option value="-1">Select Business Category</option>

<?php 

$res=mysql_query("SELECT id,sIndustryName FROM tblindustries ORDER BY sIndustryName ASC");

$num_rows=MYSQL_NUM_ROWS($res);

$i=0;

while($i<$num_rows)

{

$city=mysql_result($res,$i,"sIndustryName");

$id=mysql_result($res,$i,"id");



echo "<option value='$id'>$city</option>";

$i++;

}

?>

</select>

</td>

</tr>



<tr height="40px"><td width="125px">Business Category 4<font color="#FF0000">*</font> : </td>

<td><select name="cat4" style="width:250px;">

<option value="-1">Select Business Category</option>

<?php 

$res=mysql_query("SELECT id,sIndustryName FROM tblindustries ORDER BY sIndustryName ASC");

$num_rows=MYSQL_NUM_ROWS($res);

$i=0;

while($i<$num_rows)

{

$city=mysql_result($res,$i,"sIndustryName");

$id=mysql_result($res,$i,"id");



echo "<option value='$id'>$city</option>";

$i++;

}

?>

</select>

</td>

</tr>







<tr height="40px"><td></td>

<td><input type="submit" name="submit" value="Last Step => Payment" /></td>

</tr>





</form>

</table>

















</div>



<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>

