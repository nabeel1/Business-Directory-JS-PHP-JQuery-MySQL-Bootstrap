<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="main" style=" height:900px; width:550px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:540px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:10px; top:0px;" >


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

?>

<center><h2><font color="#32A4D5">EDIT Your Business "<?php echo $name; ?>"</font></h2></center>

<table align="center" width="430px">
<form action="pedit-pro.php" method="post">
<input type="hidden" name="bid1" id="bid1" value="<?php echo $bid1; ?>" />
<tr height="40px"><td width="125px">Business Name<font color="#FF0000">*</font> : </td>
<td><input type="text" id="bus-name" name="bus-name" size="30" value="<?php echo $name;?>" ></td>
</tr>

<tr height="40px"><td width="125px">Contact Name : </td>
<td><input type="text" id="cname" name="cname" size="30" value="<?php echo $cname;?>" ></td>
</tr>


<tr height="40px"><td width="125px">Address<font color="#FF0000">*</font> : </td>
<td><input type="text" id="address" name="address" size="30" value="<?php echo $sAddress;?>" ></td>
</tr>


<tr height="40px"><td width="125px">Address 2 : </td>
<td><input type="text" id="address2" name="address2" size="30" value="<?php echo $sAddress2;?>" ></td>
</tr>

<tr height="40px"><td width="125px">City/Town<font color="#FF0000">*</font> : </td>
<td><select name="city">
<?php 
$res=mysql_query("SELECT  city FROM city WHERE id='$icity'");
$cityn=mysql_result($res,0,"city");
?>
<option value="<?php echo $icity; ?>"><?php echo $cityn; ?></option>
<?php 
$res=mysql_query("SELECT * FROM city ORDER BY city ASC");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$city=mysql_result($res,$i,"city");
$id=mysql_result($res,$i,"id");

echo "<option value='$id'>$city</option>";
$i++;
}
?>
</select>
</td>
</tr>

<tr height="40px"><td width="125px">Post Code<font color="#FF0000">*</font> : </td>
<td><input type="text" id="pcode" name="pcode" size="30" value="<?php echo $sPostcode;?>" ></td>
</tr>

<tr height="40px"><td width="125px">Telephone<font color="#FF0000">*</font> : </td>
<td><input type="text" id="phone" name="phone" size="30" value="<?php echo $phone;?>" ></td>
</tr>

<tr height="40px"><td width="125px">Mobile : </td>
<td><input type="text" id="mobile" name="mobile" size="30" value="<?php echo $sMobile;?>" ></td>
</tr>

<tr height="40px"><td width="125px">Fax : </td>
<td><input type="text" id="fax" name="fax" size="30" value="<?php echo $sFax;?>" ></td>
</tr>

<tr height="40px"><td width="125px">Email Address<font color="#FF0000">*</font> : </td>
<td><input type="text" id="email" name="email" size="30" value="<?php echo $sContactEmail;?>" ></td>
</tr>

<?php
$cres=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE  id='$iIndustry'");
$c_ind=mysql_result($cres,0,"sIndustryName");
$iid=mysql_result($cres,0,"id");
?>

<tr height="40px"><td width="125px">Business Category<font color="#FF0000">*</font> : </td>
<td><select name="cat" style="width:250px;">
<option value="<?php echo $iid; ?>"><?php echo $c_ind; ?></option>
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
<td><input type="submit" name="submit" value="Save Business Changes" /></td>
</tr>


</form>
</table>




</div>

<!-- -->
















</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
