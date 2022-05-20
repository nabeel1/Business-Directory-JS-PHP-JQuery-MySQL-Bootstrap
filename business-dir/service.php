<?php include 'service-header.php';?>
<?php  include 'rightbar2.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:2640px; width:750px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:190px; top:150px; float:left; background-color:#ffffff;" >



<h2> <?php echo $first_city_cap." ".$cat_name; ?> Businesses</h2>


<table width="728px" bgcolor="#F5FBFF">
<tr>
<td bgcolor="#32A4D5">
<font color="#FFFFFF" size="+1"> <img src="../../../../../business-dir/img/book.gif" /> Premium and Top Businesses of <?php echo $cat_name." in ".$first_city_cap; ?>  </font>
</td>
</tr>

<tr><td>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal blue 336 */
google_ad_slot = "0032584212";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</td></tr>

<tr><td>

<table width="728px" bgcolor="" >

<?php
$top="top";
$res1=mysql_query("SELECT id FROM city WHERE city='$c'");
$cid=mysql_result($res1,0,"id");
$res_p=mysql_query("SELECT id,sBusinessName,image_url,sTelephone,tDescription FROM tblbusinesses WHERE iCity='$cid' AND (iPaid='top' OR iPaid='premium') ORDER BY id DESC Limit 0,4");
$num_rows_p=MYSQL_NUM_ROWS($res_p);
?>

<?php $i=0;
if($num_rows_p!=0)
{
while($i<$num_rows_p)
{
$image_url=mysql_result($res_p,$i,"image_url");
$id=mysql_result($res_p,$i,"id");
$phone=mysql_result($res_p,$i,"sTelephone");
$sBusinessName=mysql_result($res_p,$i,"sBusinessName");
$tdesc=mysql_result($res_p,$i,"tDescription");
$tdesc=substr($tdesc,0,200);
?>
<tr height="100px" valign="top">
<td width="100px" bgcolor=""><img src="../../../../../resize-pro-pic/<?php echo $image_url;?>" /></td>

<td width="570" bgcolor="#EBF3F8">
<img src='../../../../../business-dir/img/bullet1.png' /><a href="../../../../../<?php echo $city_rep; ?>/<?php echo $id; ?>"> <font size="+1" ><b><?php echo $sBusinessName; ?></font></b></a>
<br /><br /><?php echo $tdesc."."; ?>
<br /><br> 
	<img src="../../../../../business-dir/img/business-phone.gif" style="margin-left:10px;" /><?php echo $phone;?> &nbsp;&nbsp;
	<img src="../../../../../business-dir/img/business-email.gif" style="margin-left:20px;" /> <a rel="nofollow" href="../../../../../<?php echo $city_rep; ?>/<?php echo $id; ?>">Email</a> &nbsp;&nbsp;
    <img src="../../../../../business-dir/img/business-pin.gif" style="margin-left:20px;" />&nbsp; <a rel="nofollow" href="../../../../../<?php echo $city_rep; ?>/<?php echo $id; ?>">Map</a> &nbsp;&nbsp;
        <a rel="nofollow" style="margin-left:20px; "  href="../../../../../<?php echo $city_rep; ?>/<?php echo $id; ?>"><img src='../../../../../business-dir/img/business-fulldetails.gif' /></a>
    
<br><br /> 
</td>


</tr>

<?php
$i++;
}
}else { echo "Be first to add your business here in £15. "; 

if(@$_SESSION['fname']!=""){echo " <a href='../../../../add-business/index.php'>Be first to add your business.</a>";}
else{echo " <a href='../../../../login.php' rel='nofollow'>Login</a> or <a href='../../../../register.php' rel='nofollow'>Register</a> here to Add Business in Top Spot.";}

}
?>
</table>


</td></tr>
</table>


<!--   end of featured listing  -->

<br />
<br />

<!-- Display ADD-->
<?php
$resa=mysql_query("SELECT adds FROM advertise WHERE id='4'");
$city_add=mysql_result($resa,0,"adds");
?>

<table width="500px">
<tr>
<td bgcolor="#ffffff"><?php echo $city_add;?></td>
</tr>
</table>

<!-- -->

<table width="738px" bgcolor="#32A4D5">
<tr>
<td>
<font color="#FFFFFF" size="+1"> Free Business of <?php echo $c." in ".$cat_name;?> </font>
</td>
</tr>
</table>


<table width="728px" bgcolor="#F5FBFF" >

<tr><td>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal blue 336 */
google_ad_slot = "0032584212";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


</td></tr>
<tr><td>

<table>
<?php

$c_res=mysql_query("SELECT id FROM city WHERE city='$c' ");
$c_id=mysql_result($c_res,0,"id");

$top="top";

$res=mysql_query("SELECT id,sBusinessName,sTelephone,iPaid,dSubStartDate,dSubEndDate,image_url,sAddress,tDescription,iUserId FROM tblbusinesses WHERE iCity='$c_id' AND iIndustry='$bid' ORDER BY id DESC Limit 0,20");
$num_rows=MYSQL_NUM_ROWS($res);

$i=0;
$count_f=0;
while($i<$num_rows)
{
$name=mysql_result($res,$i,"sBusinessName");
$phone=mysql_result($res,$i,"sTelephone");
$paid=mysql_result($res,$i,"iPaid");
$image_url=mysql_result($res,$i,"image_url");
$id=mysql_result($res,$i,"id");
$address=mysql_result($res,$i,"sAddress");
$dSubEndDate=mysql_result($res,$i,"dSubEndDate");
$dSubStartDate=mysql_result($res,$i,"dSubStartDate");
$iUserId=mysql_result($res,$i,"iUserId");

if($paid=="free")
{
	$count_f++;
?>
<tr height="70px" valign="top">

<td width="428px" bgcolor="#EBF3F8">
<img src="../../../../../business-dir/img/article_bullet.png" /><a href="../../../../../<?php echo $city_rep; ?>/<?php echo $id; ?>"><b><?php echo $name; ?></b></a>
<br /><br />
<img src="../../../../../business-dir/img/business-phone.gif" style="margin-left:10px;" /><?php echo $phone;?> 
&nbsp;&nbsp;
<img src="../../../../../business-dir/img/business-email.gif" style="margin-left:20px;" /> <a rel="nofollow" href="../../../../../<?php echo $city_rep; ?>/<?php echo $id; ?>">Email</a>&nbsp;&nbsp;
 <a rel="nofollow" style="margin-left:20px; "  href="../../../../../<?php echo $city_rep; ?>/<?php echo $id; ?>"><img src='../../../../../business-dir/img/business-fulldetails.gif' /></a>

<td width="100px" bgcolor="#EBF3F8">
<?php if($iUserId==0){
echo "<img src='../../../../../business-dir/img/NotClaimed2-new.jpg' />";
}else{
echo "<img src='../../../../../business-dir/img/Verified2-new.jpg' />";
}
?>
</td>

<td width="200px" bgcolor="#EBF3F8">
<br /><br />
<a rel="nofollow" style="margin-left:20px; "  href="../../../../../<?php echo $city_rep; ?>/<?php echo $id; ?>"><img src="../../../../../business-dir/img/addareview.gif" /></a>
</td>

</tr>

<?php
}

$i++;
}
?>

<?php
if($count_f==0)
{
	echo "<tr><td>Be first to add your business here for free.";
	if(@$_SESSION['fname']!=""){echo " <a href='../../../../../add-business/index.php'>Be first to add your business.</a>";}
else{echo " <a href='../../../../../login.php' rel='nofollow'>Login</a> or <a href='../../../../../register.php' rel='nofollow'>Register</a> here to Add Business in Top Spot.";}
echo "</td></tr>";
}

?>

</table>

</td></tr></table>


<?php

$res_paging=mysql_query("SELECT id FROM tblbusinesses WHERE iCity='$c_id' AND iIndustry='$bid' OR iIndustry2='$bid' OR iIndustry3='$bid' OR iIndustry4='$bid' ORDER BY id DESC ");
$no_rows=MYSQL_NUM_ROWS($res_paging);

$page_no=$no_rows/20;
$page_no=floor($page_no);
$count=1;

if($page_no>=1)
{
?>

<div align="right" style="background-color:#4AC5E4; width:738px;"> <a class="pagelink" href="../../../../../service-page/c/<?php echo $city_rep; ?>/bid/<?php echo $bid; ?>/page/1"> <font size="+1" color="#ffffff">Click Here To See Next Listing's >></font></a> </div>

<?php 
}
?>

<br />

<table width="738px" bgcolor="#EBF3F8">
<tr>
<td>
<p><?php echo "Local online ".$c." directory allows you to quick access to <u>".$cat_name." in ".$c."</u>.Our search system and categories make your task easiler to find best ".$cat_name." in town. Now you can Add ".$cat_name." in ".$c." for free and your listing will show in our directory. By adding business chance to show your listing in your local town increase because your business become visible to our high traffic site."?></p>
</td>
</tr>
</table>

<br />

<?php
if($page_no>=1)
{
?>

<div align="right" style="background-color:#4AC5E4; width:738px;"> <a class="pagelink" href="../../../../../service-page/c/<?php echo $city_rep; ?>/bid/<?php echo $bid; ?>/page/1"> <font size="+1" color="#ffffff">Click Here To See Next Listing's >></font></a> </div>

<?php 
}
?>



</div>


<?php  include 'business-footer-2.php' ?>
