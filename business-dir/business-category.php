<?php include 'business-header.php';?>
<?php  include 'rightbar1.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:3696px; width:750px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:190px; top:190px; float:left; background-color:#ffffff;" >

<?php $b=$_REQUEST['b']; ?>

<h2><img src="../../../../business-dir/img/<?php echo $logo; ?>" /> <?php echo $c." ".$b; ?> Directory</h2>

<table width="728px" bgcolor="#F5FBFF">
<tr>
<td bgcolor="#32A4D5">
<img src="../../../../business-dir/img/book.gif" /><font color="#FFFFFF" size="+1"> Top Businesses in <?php echo $c." ".$b; ?> Directory </font> </td> </tr>

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

<!-- for featured and top business -->

<tr> <td>

<table width="728px">
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
<td width="100px" bgcolor=""><img src="../../../../resize-pro-pic/<?php echo $image_url;?>" /></td>

<td width="570" bgcolor="#EBF3F8">
<img src='../../../../business-dir/img/bullet1.png' /><a href="../../../../<?php echo $city_rep; ?>/<?php echo $id; ?>"> <font size="+1" ><b><?php echo $sBusinessName; ?></font></b></a>
<br /><br /><?php echo $tdesc."."; ?>
<br /><br> 
	<img src="../../../../business-dir/img/business-phone.gif" style="margin-left:10px;" /><?php echo $phone;?> &nbsp;&nbsp;
	<img src="../../../../business-dir/img/business-email.gif" style="margin-left:20px;" /> <a rel="nofollow" href="../../../../<?php echo $city_rep; ?>/<?php echo $id; ?>">Email</a> &nbsp;&nbsp;
    <img src="../../../../business-dir/img/business-pin.gif" style="margin-left:20px;" />&nbsp; <a rel="nofollow" href="../../../../<?php echo $city_rep; ?>/<?php echo $id; ?>">Map</a> &nbsp;&nbsp;
        <a rel="nofollow" style="margin-left:20px; "  href="../../../../<?php echo $city_rep; ?>/<?php echo $id; ?>"><img src='../../../../business-dir/img/business-fulldetails.gif' /></a>
    
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


<br />

<table width="740px" bgcolor="#32A4D5">
<tr>
<td>
<img src="../../../../business-dir/img/book.gif" /><font color="#FFFFFF" size="+1"> <?php echo $b." in ".$c; ?> Business Directory </font>
</td>
</tr>
</table>

<!-- Display ADD-->
<?php
$resa=mysql_query("SELECT adds FROM advertise WHERE id='3'");
$city_add=mysql_result($resa,0,"adds");
?>

<table width="500px">
<tr>
<td bgcolor="#ffffff"><?php echo $city_add;?></td>
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

</table>

<!-- -->

<table width="740px" bgcolor="" >
<tr height="60px" valign="top">
<?php
$res=mysql_query("SELECT id,sIndustryName,pdesc FROM tblindustries WHERE main_category='$b' ORDER BY sIndustryName ASC");
$num_rows=MYSQL_NUM_ROWS($res);

$i=0;
while($i<$num_rows)
{
$category=mysql_result($res,$i,"sIndustryName");
$category_link=str_replace(" ","+",$category);
$pdesc=mysql_result($res,$i,"pdesc");
$id=mysql_result($res,$i,"id");
$pdesc1=substr($pdesc,0,117);

echo "<td width='320px' bgcolor='#EBF3F8'><img src='../../../../business-dir/img/article_bullet.png' /><a href='../../../uk/c/$city_rep/bid/$id'><font size='+1'>$category</font></a></td>";


if($i%3==2 )
{
echo "</tr>";
echo "<tr height='60px' valign='top'>";

}
$i++;
}
?>

</tr>
</table>

<br />

<table width="728px" bgcolor="#EBF3F8">
<tr>
<td>
<p><?php echo "Local online ".$c." directory allows you to quick access to <u>".$b." in ".$c."</u>.Our search system and categories make your task easiler to find best ".$b." in town. Now you can Add ".$b." in ".$c." for free and your listing will show in our directory. By adding business chance to show your listing in your local town increase because your business become visible to our high traffic site."?></p>
</td>
</tr>
</table>

<br />

<!--<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal blue 336 */
google_ad_slot = "0032584212";
google_ad_width = 728;
google_ad_height = 90;
//--
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>-->


<?php 
$count=$count+1;
mysql_query("UPDATE main_category SET count='$count' WHERE category='$b'");

?>


</div>

<?php //include 'rightbar1.php';?>

<?php  include 'business-footer.php' ?>
