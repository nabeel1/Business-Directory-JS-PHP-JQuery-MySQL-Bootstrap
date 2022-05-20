<?php include 'show-user-header.php';?>
<?php include 'show-user-leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="main" style=" height:1936px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:540px;  padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:10px; top:0px;" >

<h2>Members Area</h2>

<table bgcolor="#F5FBFF" width="540px">
<tr valign="top">
<td>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* blue add 336&#42;280 */
google_ad_slot = "2674535903";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</td>
<td>
<img src="../../user/img/AvatarIconFinal.jpg" /> <br />
<font size="+1"><?php echo $fname." ".$lname;?> Profile</font><br />
Area: <?php echo $c; ?> <br />
</td>
</tr>
</table>



<table width="540px" bgcolor="#32A4D5">
<tr>
<td>
<font color="#FFFFFF" size="+1"><img src="../../add-business/img/star.png" /> Your Premium / Top Business Listing's </font>
</td>
</tr>
</table>

<table width="540px" bgcolor="" >

<?php
$uid=$_REQUEST['uid'];
$res_u=mysql_query("SELECT id,sBusinessName,sTelephone,iPaid,dSubStartDate,dSubEndDate,image_url,sAddress,iCity,iIndustry FROM tblbusinesses WHERE  iUserId ='$uid' ORDER BY id DESC");
$num_rows_u=MYSQL_NUM_ROWS($res_u);

$count_premium=0;

$i=0;
while($i<$num_rows_u)
{
$name=mysql_result($res_u,$i,"sBusinessName");
$phone=mysql_result($res_u,$i,"sTelephone");
$paid=mysql_result($res_u,$i,"iPaid");
$image_url=mysql_result($res_u,$i,"image_url");
$id=mysql_result($res_u,$i,"id");
$icity=mysql_result($res_u,$i,"iCity");


$c_res=mysql_query("SELECT id,city FROM city WHERE id='$icity' ");
$c_name=mysql_result($c_res,0,"city");
@$c_city_rep=str_replace(' ','+',$c_name);

$address=mysql_result($res_u,$i,"sAddress");
$dSubEndDate=mysql_result($res_u,$i,"dSubEndDate");
$dSubStartDate=mysql_result($res_u,$i,"dSubStartDate");


$today = mktime(0,0,0,date("m"),date("d"),date("Y"));
$today_next = mktime(0,0,0,date("m"),date("d"),date("Y")+1);


if($paid=="top" or $paid=="premium")
{
	$count_premium++;
?>
<tr height="100px" valign="top">

<td width="100px" bgcolor=""><img src="../../resize-pro-pic/<?php echo $image_url;?>" /></td>

<td width="200px" bgcolor="#EBF3F8">
<a href="../../<?php echo $c_city_rep; ?>/<?php echo $id; ?>"><b><?php echo $name; ?></b></a>
</td>

<td width="200px" bgcolor="#EBF3F8">
<!--<a href="../../user/pay-premium.php?bid=<?php //echo $id?>&uid=<?php //echo $userid?>&c=<?php //echo $c_city_rep;?>"><b>Upgrade this Listing</b></a> 
<br /><br /> -->
<a href="../../<?php echo $c_city_rep; ?>/<?php echo $id; ?>">View Business</a>
</td>



<?php if($today>$dSubEndDate)
{
//echo "<td width='100px' bgcolor='#EBF3F8'><a href='../../user/pay-premium.php?bid=$id&uid=$userid&c=$c_city_rep' ><font color='#EE0000'>Expired !! Upgrade This Listing</a></td>";
echo "<td width='200px' bgcolor='#EBF3F8'>Expired !! Upgrade This Listing</td>";
}else{
	echo "<td width='200px' bgcolor='#EBF3F8'><font color='#0000FF'>Not Expired yet !!</font></td>";
}
?>
</tr>

<?php
}
$i++;
}
?>


<?php
if($count_premium==0)
{
if(@$_SESSION['uid']!="")
{
echo "<tr><td><a href='../../add-business/index.php'>Add Premium Business now (£14 per year) to start driving traffic on your business.</a></td></tr>";	
}
else
{
echo "<tr><td><a href='../../login.php'>Add Premium Business now (£14 per year) to start driving traffic on your business.</a></td></tr>";		
}
}
?>

</table>

<br />


<!---    for free business    --------------->


<b><font color="#000000" size="+1"><img src="../../add-business/img/pencil-icon.png" /> Free Business Listing's </font></b>

<table width="540px" bgcolor="" >
<tr>
<td><b>Business Name</b></td>
<td><b>Area</b></td>
<!--<td><b>Buy Membership</b></td>-->
<td><b>View Business</b></td>
<td><b>Category</b></td>
</tr>

<?php
$count_free=0;
$i=0;
while($i<$num_rows_u)
{
$name=mysql_result($res_u,$i,"sBusinessName");
$phone=mysql_result($res_u,$i,"sTelephone");
$paid=mysql_result($res_u,$i,"iPaid");
$image_url=mysql_result($res_u,$i,"image_url");
$id=mysql_result($res_u,$i,"id");
$address=mysql_result($res_u,$i,"sAddress");
$dSubEndDate=mysql_result($res_u,$i,"dSubEndDate");
$dSubStartDate=mysql_result($res_u,$i,"dSubStartDate");
$iIndustry=mysql_result($res_u,$i,"iIndustry");

$r_res=mysql_query("SELECT sIndustryName FROM tblindustries WHERE id='$iIndustry' ");
$sIndustryName=mysql_result($r_res,0,"sIndustryName");


$icity=mysql_result($res_u,$i,"iCity");
$c_res=mysql_query("SELECT id,city FROM city WHERE id='$icity' ");
$c_name=mysql_result($c_res,0,"city");
@$c_city_rep=str_replace(' ','+',$c_name);

if($paid=="free")
{
	$count_free++;
?>
<tr height="50px" valign="top">

<td width="150"><a href="../../<?php echo $c_city_rep; ?>/<?php echo $id; ?>"><b><?php echo $name; ?></b></a>
</td>

<td><a href="../../city/<?php echo $c_city_rep?>" ><?php echo $c_name; ?></a></td>
<!--<td><a href="../../user/pay-premium.php?bid=<?php //echo $id;?>&uid=<?php //echo $userid;?>&c=<?php //echo $c_city_rep;?>"><font color="#0000FF">Upgrade This Listing</font></a></td> -->
<td><a href="../../<?php echo $c_city_rep; ?>/<?php echo $id; ?>" rel="nofollow">View Business</a>
<td><a href="../../cities/uk/c/<?php echo $c_city_rep; ?>/bid/<?php echo $iIndustry; ?>"><?php echo $sIndustryName; ?></a></td>
<?php
}
$i++;
}
?>

</table>

<?php
if($count_free==0)
{
if(@$_SESSION['uid']!="")
{
echo "<a href='../../add-business/index.php'>Start driving traffic on your business by submitting it freely.</a>";	
}else
{
	echo "<a href='../../login.php'>Start driving traffic on your business by submitting it freely.</a>";	
}
}
?>

<br /> <br />
<!---  review added   -->

<b><font color="#D74343" size="+1"><img src="../../add-business/img/reviews-red.png" /> Reviews </font></b> <br />

<?php
$count_reviews=0;
@$uid=$_REQUEST['uid'];

@$r_res=mysql_query("SELECT id,bid FROM reviews WHERE uid='$uid'");
@$num_rows_r=MYSQL_NUM_ROWS($r_res);

@$i=0;
while($i<$num_rows_r)
{
$count_reviews++;
@$bid=mysql_result($r_res,$i,"bid");
@$r_b_res=mysql_query("SELECT id,sBusinessName,iCity FROM tblbusinesses WHERE id='$bid' ");
@$bus_bid=mysql_result($r_b_res,0,"id");
@$bus_sBusinessName=mysql_result($r_b_res,0,"sBusinessName");
@$icity=mysql_result($r_b_res,0,"iCity");
@$c_res=mysql_query("SELECT id,city FROM city WHERE id='$icity' ");
@$c_name=mysql_result($c_res,0,"city");
@$c_city_rep=str_replace(' ','+',$c_name);
echo "<a href='../$c_city_rep/$bus_bid'><font size='+1'>".$bus_sBusinessName."</font></a><br />";
$i++;	
}
?>

<?php
if($count_reviews==0)
{
echo "<a href='../../business-dir/all-listing.php?c=$c'>Start giving Reviews on Businesses.</a>";	
}
?>


<!-- is ko ni cheerna    -->

</div>

<!-- -->
















</div>

<?php include 'show-user-rightbar.php';?>

<?php include 'show-user-footer.php' ?>
