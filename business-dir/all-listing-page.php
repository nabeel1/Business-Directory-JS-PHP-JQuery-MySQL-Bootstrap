<?php include 'all-listing-header.php';?>
<?php include 'all-listing-rightbar.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:2698px; width:750px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:190px; top:146px; float:left; background-color:#ffffff; " >


<h2> All Businesses and Listings in <?php echo $first_city_cap; ?> </h2>


<table width="728px" bgcolor="#F5FBFF">
<tr>
<td bgcolor="#32A4D5">
<font color="#FFFFFF" size="+1"> <img src="../business-dir/img/book.gif" /> Premium and Top Businesses <?php echo " in ".$first_city_cap; ?>  </font>
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
$res_p=mysql_query("SELECT id,sBusinessName,image_url,sTelephone,tDescription,iIndustry FROM tblbusinesses WHERE iCity='$cid' AND (iPaid='top' OR iPaid='premium') ORDER BY id DESC Limit 0,4");
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
$iIndustry=mysql_result($res_p,$i,"iIndustry");

@$res_ind1=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE id='$iIndustry' Limit 0,2");
@$ind_name1=mysql_result($res_ind1,0,"sIndustryName");

?>
<tr height="100px" valign="top">
<td width="100px" bgcolor=""><img src="../resize-pro-pic/<?php echo $image_url;?>" /></td>

<td width="570" bgcolor="#EBF3F8">
<img src='../business-dir/img/bullet1.png' /><a href="../<?php echo $city_rep; ?>/<?php echo $id; ?>"> <font size="+1" ><b><?php echo $sBusinessName; ?></font></b></a>
<br /><br /><?php echo $tdesc."."; ?>
<br /><br> 
	<img src="../business-dir/img/business-phone.gif" style="margin-left:10px;" /><?php echo $phone;?> &nbsp;&nbsp;
	<img src="../business-dir/img/business-email.gif" style="margin-left:20px;" /> <a rel="nofollow" href="../<?php echo $city_rep; ?>/<?php echo $id; ?>">Email</a> &nbsp;&nbsp;
    <img src="../business-dir/img/business-pin.gif" style="margin-left:20px;" />&nbsp; <a rel="nofollow" href="../<?php echo $city_rep; ?>/<?php echo $id; ?>">Map</a> &nbsp;&nbsp;
    
        <img src="../business-dir/img/icon-industry.gif" style="margin-left:20px;" />&nbsp; <a href="../cities/uk/c/<?php echo $city_rep; ?>/bid/<?php echo $iIndustry; ?>"><?php echo $ind_name1; ?></a> &nbsp;&nbsp;
    
        <a rel="nofollow" style="margin-left:20px; "  href="../<?php echo $city_rep; ?>/<?php echo $id; ?>"><img src='../business-dir/img/business-fulldetails.gif' /></a>
    
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

<!--  for normal listing and business -->

<table width="728px" bgcolor="#F5FBFF" >

<tr>
<td bgcolor="#32A4D5">
<font color="#FFFFFF" size="+1"> <img src="../business-dir/img/book.gif" /> Businesses <?php echo " in ".$first_city_cap; ?>  </font>
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

<table>
<?php

$c_res=mysql_query("SELECT id FROM city WHERE city='$c' ");
$c_id=mysql_result($c_res,0,"id");

@$pagecount=$_REQUEST['p'];
@$lower_limit=$pagecount*20;
@$upper_limit=$lower_limit+20;
@$pagecount=$pagecount+1;


$top="top";

$res=mysql_query("SELECT id,sBusinessName,sTelephone,iPaid,dSubStartDate,dSubEndDate,image_url,sAddress,tDescription,iUserId,iIndustry FROM tblbusinesses WHERE iCity='$c_id' ORDER BY id DESC Limit $lower_limit,20 ");
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

$iIndustry=mysql_result($res,$i,"iIndustry");

@$res_ind1=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE id='$iIndustry' Limit 0,2");
@$ind_name1=mysql_result($res_ind1,0,"sIndustryName");


if($paid=="free")
{
	$count_f++;
?>
<tr height="70px" valign="top">

<td width="428px" bgcolor="#EBF3F8">
<img src="../business-dir/img/article_bullet.png" /><a href="../<?php echo $city_rep; ?>/<?php echo $id; ?>"><b><?php echo $name; ?></b></a>
<br /><br />
<img src="../business-dir/img/business-phone.gif" style="margin-left:10px;" /><?php echo $phone;?> 
&nbsp;&nbsp;

        <img src="../business-dir/img/icon-industry.gif" style="margin-left:20px;" />&nbsp; <a href="../cities/uk/c/<?php echo $city_rep; ?>/bid/<?php echo $iIndustry; ?>"><?php echo $ind_name1; ?></a> &nbsp;&nbsp;

 <a rel="nofollow" style="margin-left:20px; "  href="../<?php echo $city_rep; ?>/<?php echo $id; ?>"><img src='../business-dir/img/business-fulldetails.gif' /></a>

<td width="100px" bgcolor="#EBF3F8">
<?php if($iUserId==0){
echo "<img src='../business-dir/img/NotClaimed2-new.jpg' />";
}else{
echo "<img src='../business-dir/img/Verified2-new.jpg' />";
}
?>
</td>

<td width="200px" bgcolor="#EBF3F8">
<br /><br />
<a rel="nofollow" style="margin-left:20px; "  href="../<?php echo $city_rep; ?>/<?php echo $id; ?>"><img src="../business-dir/img/addareview.gif" /></a>
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
	if(@$_SESSION['fname']!=""){echo " <a href='../add-business/index.php'>Be first to add your business.</a>";}
else{echo " <a href='../login.php' rel='nofollow'>Login</a> or <a href='../register.php' rel='nofollow'>Register</a> here to Add Business in Top Spot.";}
echo "</td></tr>";
}

?>

</table>

</td></tr></table>

<!-- ------------>

<?php

$res_paging=mysql_query("SELECT count(id) FROM tblbusinesses WHERE iCity='$c_id' ORDER BY id DESC ");
	@$count_res=mysql_result($res_paging,0,"count(id)");


if($count_res/20>=$pagecount)
{
?>

<div align="right" style="background-color:#4AC5E4; width:738px;"> <a class="pagelink" href="all-listing-page.php?c=<?php echo $city_rep; ?>&p=<?php echo $pagecount;?>"> <font size="+1" color="#ffffff">Click Here To See Next Businesses >></font></a> </div>

<?php 
}
?>


<!-- - ------------->

<br />

<table width="738px" bgcolor="#F5FBFF">
<tr>
<td>
<p><?php echo "Find ".$city_rep." Businesses,directories and companies in your town. All businesses ".$city_rep." Listings, ".$city_rep." Company directories. By giving map for each business we make user task easiler to find location of ".$city_rep." businesses. Add your local ".$city_rep." business today in our ".$city_rep." dirctory so that your business traffic will boast."; ?></p>
</td>
</tr>
</table>

<br />
<?php
if($count_res/20>=$pagecount)
{
?>

<div align="right" style="background-color:#4AC5E4; width:738px;"> <a class="pagelink" href="all-listing-page.php?c=<?php echo $city_rep; ?>&p=<?php echo $pagecount;?>"> <font size="+1" color="#ffffff">Click Here To See Next Listing's >></font></a> </div>

<?php 
}
?>



<!-- --->

</div>



<?php include 'all-listing-footer.php' ?>
