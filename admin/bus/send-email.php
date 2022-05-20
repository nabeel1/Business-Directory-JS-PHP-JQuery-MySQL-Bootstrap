<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >

<h4>Business Information</h4>

<?php $lid=$_REQUEST['lid'];  ?>

<?php
$res=mysql_query("SELECT id,iUserId,sBusinessName,iPaid,dSubStartDate,dSubEndDate,sContactEmail,iCity FROM tblbusinesses WHERE id='$lid' ");
$no_rows=MYSQL_NUM_ROWS($res);

if($no_rows=="")
{
echo "<font size='+2' color='#009900'>Not Found Any Listing.</font>";
}

?>

<table bgcolor="#ffffff">

<tr>
<td width="100px"><font color="#009900">ID</font> </td>
<td width="230px"><font color="#009900">Business Name</font> </td>
<td width="150px"><font color="#009900">Type</font> </td>
<td width="100px"><font color="#009900">Time</font> </td>
<td width="100px"><font color="#009900">Email ID</font> </td>
</tr>

<?php
$i=0;
if($no_rows!="")
{
$id=mysql_result($res,$i,"id");
$iPaid=mysql_result($res,$i,"iPaid");
$sBusinessName=mysql_result($res,$i,"sBusinessName");
$dSubStartDate=mysql_result($res,$i,"dSubStartDate");
$dSubEndDate=mysql_result($res,$i,"dSubEndDate");
$dSubEndDate=mysql_result($res,$i,"dSubEndDate");
$sContactEmail=mysql_result($res,$i,"sContactEmail");
$userid=mysql_result($res,$i,"iUserId");
$iCity=mysql_result($res,$i,"iCity");
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
echo "<td width='150px'> $sContactEmail </td>";
}
?>

</table>

<h4>Contact Information</h4>

<?php
$res=mysql_query("SELECT * FROM user WHERE id='$userid' ");
$no_rows=MYSQL_NUM_ROWS($res);

if($no_rows=="")
{
echo "<font size='+2' color='#009900'>Not Found Contact Information.</font>";
}

?>



<table bgcolor="#ffffff">

<tr>
<td width="100px"><font color="#009900">Person ID</font> </td>
<td width="230px"><font color="#009900">F Name</font> </td>
<td width="150px"><font color="#009900">L Name</font> </td>
<td width="100px"><font color="#009900">Email</font> </td>
</tr>

<?php
$i=0;
if($no_rows!="")
{
$email=mysql_result($res,$i,"email");
$fname=mysql_result($res,$i,"fname");
$lname=mysql_result($res,$i,"lname");
$userid=mysql_result($res,$i,"id");
echo "<tr>
<td width='100px'>$userid </td>
<td width='230px'> $fname </td>
<td width='150px'> $lname </td>
<td width='150px'> $email </td>";
echo "</tr>";
}
?>
</table>


<table align="center">
<form action="send-email-pro.php" method="post">

<input type="hidden" name="lid" id="lid" value="<?php echo $lid;?>" />
<input type="hidden" name="email1" id="email1" value="<?php echo $sContactEmail;?>" />
<input type="hidden" name="email2" id="email2" value="<?php echo @$email;?>" />

<tr height="40px"><td>Subject: </td>
<td><input type="text" name="subject" id="subject" value="" size="79"  /></td>
</tr>

<tr height="40px"><td>Message</td>
<td><textarea name="message" cols="60" rows="20"></textarea></td>
</tr>



<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Send Email" /></td>
</tr>


</form>
</table>
<!-- -->

<h4>For Doing Upgrdation Link</h4>

<?php
$res=mysql_query("SELECT * FROM city WHERE id='$iCity' ");
$no_rows=MYSQL_NUM_ROWS($res);
$city=mysql_result($res,0,"city");
$city=str_replace(" ","+",$city);
?>

http://citybusinessdirectory.co.uk/user/pay-premium.php?bid=<?php echo $lid;?>&uid=<?php echo $userid; ?>&c=<?php echo $city; ?>

</div>


<?php include '../footer.php' ?>
