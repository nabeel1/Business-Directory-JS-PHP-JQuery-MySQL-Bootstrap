<?php include 'more-header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="main" style=" height:1936px; width:550px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:540px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:10px; top:20px;" >



<?php
$bid1=addslashes($_REQUEST['bid']);
$resb=mysql_query("SELECT * FROM tblbusinesses WHERE id='$bid1'");
$num_rows_b=mysql_num_rows($resb);

$name=mysql_result($resb,0,"sBusinessName");
$phone=mysql_result($resb,0,"sTelephone");
$paid=mysql_result($resb,0,"iPaid");
$image_url=mysql_result($resb,0,"image_url");
$id=mysql_result($resb,0,"id");
$icity=mysql_result($resb,0,"iCity");
$iIndustry=mysql_result($resb,0,"iIndustry");
$iIndustry2=mysql_result($resb,0,"iIndustry2");
$iIndustry3=mysql_result($resb,0,"iIndustry3");
$iIndustry4=mysql_result($resb,0,"iIndustry4");
$sAddress=mysql_result($resb,0,"sAddress");
$sAddress2=mysql_result($resb,0,"sAddress2");
$sPostcode=mysql_result($resb,0,"sPostcode");
$sMobile=mysql_result($resb,0,"sMobile");
$sFax=mysql_result($resb,0,"sFax");
$sContactEmail=mysql_result($resb,0,"sContactEmail");
$tDescription=mysql_result($resb,0,"tDescription");
$sUrl=mysql_result($resb,0,"sUrl");
$id=mysql_result($resb,0,"id");
$id=mysql_result($resb,0,"id");
$cname=mysql_result($resb,0,"cname");
$video=mysql_result($resb,0,"video");
$m="nothing";
?>

<center><h2><font color="#32A4D5">Edit Advance information of: <?php echo $name; ?> </font></h2></center>
<center>*(Best practice is not to use Internet Explorer while uploading advance feature)</center>

<br />

<center><h2><font color="#000000">Step No. 2 Upload More Pictures of your Business</font></h2></center>

<div id="swfupload-control">
	<center><input type="button" id="button" /></center>
	<p id="queuestatus" ></p>
	<ol id="log"></ol>
    	<p>Upload upto 5 image files(jpg, png, gif), each having maximum size of 1MB</p>
</div>


<center><h2><font color="#000000">Step No. 3 Edit Advance Information</font></h2></center>


<table align="center" width="430px">
<form action="post-job-pro.php" method="post" enctype="multipart/form-data"/>

<input type="hidden" name="bid" id="bid" value="<?php echo $bid1;?>" />
<input type="hidden" name="m" id="m" value="<?php echo $m;?>" />

<tr height="40px"><td width="125px">Description : </td>
<td><textarea type="text" id="cdesc" name="cdesc" rows="6" cols="30" ><?php echo $tDescription;?></textarea></td>
</tr>

<tr height="40"><td>Company Logo<font color="#FF0000"> </font> </td>
<td><input type="file" name="form_data" size="20"></td>
</tr>

<tr height="40px"><td width="125px">Promotional Video:<br /> (Add Youtube Embedd Code Here) </td>
<td><textarea type="text" id="video" name="video" rows="6" cols="30" ><?php echo $video;?></textarea></td>
</tr>


<tr height="40px"><td width="125px">Website Address : </td>
<td><input type="text" id="website" name="website" size="30" value="<?php echo $sUrl; ?>" ></td>
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
<td><input type="submit" name="submit" value="Add More Information" /></td>
</tr>


</form>
</table>





</div>

<!-- -->
















</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
