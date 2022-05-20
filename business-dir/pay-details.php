<?php include 'pay-detail-header.php';?>
<?php include 'pay-rightbar.php';?>
<!-- Div for slider show -->

<!-- -->


<div id="main" style=" height:2504px; width:750px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:190px; top:146px; float:left; background-color:#ffffff;" >


<table>
<tr>
<td><img src="../resize-pro-pic/<?php echo $image_url; ?>" /></td>
<td><h1><font color="#000000"> <?php echo $sBusinessName; ?></font></h1></td>
</tr>
</table>

<?php
if($iPaid_h!="free")
{
?>
<table width="300px" bgcolor="" align="center">
<tr valign="top">
<td bgcolor="#FFFFFF"><p><font color="#40AB05" size="+1">&nbsp;&nbsp; <a href="../<?php echo $city_rep;?>/<?php echo $bid;?>">About Us</a></font></td>
<td bgcolor="#EBF3F8"><p><font color="#D4D9DD" size="+1">&nbsp;&nbsp; <a href="../business-dir/show.php?c=<?php echo $c; ?>&bid=<?php echo $bid; ?>">Slide Show</a></font></td>
<td bgcolor="#EBF3F8"><p><font color="#D4D9DD" size="+1">&nbsp;&nbsp; <a href="../business-dir/video.php?c=<?php echo $c; ?>&bid=<?php echo $bid; ?>">Video</a></p></td>
</tr>
</table>
<?php
}else{
	?>
 <!-- <script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal leaderboard */
google_ad_slot = "5741010794";
google_ad_width = 728;
google_ad_height = 90;
//--
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script> -->
<?php
}
?>

<table width="730px" >
<tr>

<td width="540px" bgcolor="#1497CB"><font size="+1" color="#FFFFFF">Information of <?php echo $sBusinessName;  ?></font></td>
<td bgcolor="#1497CB"><font size="+1" color="#FFFFFF">Contact Information</font></td>
</tr>

<tr valign="top">
<td width="500px" bgcolor="#F5FBFF">

<font style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"><?php echo $tDescription; ?></font> <br />

<?php
if($iPaid_h=="free")
{
?>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal 468&#42;60 */
google_ad_slot = "8481448804";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php    
}
?>



</td>

<td bgcolor="#EBF3F8">
<?php echo $sAddress." , ".$sAddress2;?> <br /> <?php echo $pcode; ?><br /><br />
<img src="../business-dir/img/business-phone.gif" /> <?php echo $sTelephone;?><br /><br />
M: <?php echo $sMobile;?><br /><br />
<img src="../business-dir/img/business-phone.gif" /> <?php echo $sFax;?><br /><br />
<img src="../business-dir/img/email-trans.png" /> <?php echo $sContactEmail;?><br />
<a href="<?php echo $sUrl; ?>" target="_blank"><?php echo $sUrl; ?></a><br />
<hr color="#1497CB" style="size:2px;" />
</td>


</tr>
</table>


<!-- -->


<table align="left" width="750px" border="0">  
<tr>
<td width="350px">
<form action="#" onSubmit="showAddress(this.address.value); return false" style="width:350px;"> 
      <p> 
        <input type="hidden" size="60" id="address" name="address" value="<?php echo $sAddress." ".$c; ?>" /> 
      </p> 
      <div id="map_canvas" style="width: 350px; height: 280px"></div> 
    </form> 
</td>

<td> 
<?php
if($iPaid_h=="free")
{
?>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal 336&#42;280 */
google_ad_slot = "9971235220";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php
}
else{
	?>
	<div class="rotator">
  <ul>
  <?php
  $ires=mysql_query("SELECT * FROM business_image WHERE bid='$bid'");
$irows=MYSQL_NUM_ROWS($ires);

$pic_count=0;
while($pic_count<$irows)
{
	$pics=mysql_result($ires,$pic_count,"image_url");
	echo  "<li><img src='../uploads/$pics' width='336' height='280' /></li>";
$pic_count++;

}
?>
 </ul>
</div>
<?php
}
?>

</td>

</tr>
</table>

<br /><br />

<table align="left" width="740px">
<tr>
<td>
<font color="#FF0000" size="+1">Please mention</font> <font color="#0000FF" size="+1"><?php echo $_SERVER['SERVER_NAME'];?> (<?php echo $c; ?>) </font> <font color="#FF0000" size="+1">when contacting this company. Thank you</font>
</td>
</tr>
</table>


<!-- -->
<br /> <br />
<table width="740px" bgcolor="#D74343">
<tr>
<td>
<font color="#FFFFFF" > Latest Reviews </font>
</td>
</tr>
</table>

<table width="740px" bgcolor="#F5FBFF">
<?php
$resc=mysql_query("SELECT * FROM reviews WHERE bid='$bid' ORDER BY id DESC");
$i=0;
@$num_rows=MYSQL_NUM_ROWS($resc);

while($i<$num_rows)
{
@$comment=mysql_result($resc,$i,"comment");
@$uid=mysql_result($resc,$i,"uid");
@$resd=mysql_query("SELECT fname,lname FROM user WHERE id='$uid'");
@$fname=mysql_result($resd,0,"fname");
@$lname=mysql_result($resd,0,"lname");
?>

<tr>
<td bgcolor="#EBF3F8"><font size="+1" color="#FF0000"><?php echo "Review From ".$fname." ".$lname;?></font><br /> <?php echo $comment;?> <br /> <br /></td>
</tr>

<?php
$i++;
}
?>
</table>

<br />
<br />




<table align="center" width="400px">
<?php
if(@$_SESSION['fname']!="")
{
?>

<form id="register" method="post" action="../business-dir/pay-review-pro.php">
<input type="hidden" name="bid" id="bid" value="<?php echo $bid; ?>"  />
<input type="hidden" name="c" id="c" value="<?php echo $c; ?>"  />
<tr>
<td></td>
<td><h4><center>Add Your Review</center></h4></td>
</tr>

<tr>
<td><font color="#000000" size="+1"><b><i>Write Review</i></b></font></td>
<td><textarea  name="desc" id="desc" cols="35" rows="8"></textarea></td>
</tr>

<tr>
<td></td>
<td><center><input type="submit" name="submit" value="Add Comment" /></center></td>
</tr>

</form>

<?php
}
else{
echo "<tr><td>First <a href='../login.php'>Login Now</a> or <a href='../register.php'>Register Now</a> to Add Your Review</td></tr>";
}
?>
</table>

<br /><hr color="#D74343" style="size:2px;" width="740px" /> <br />


<h4><font color="#000000"> <?php echo $sBusinessName; ?> Business Featured in</font></h4>
<?php
if($iPaid_h=="free")
{
		echo "<img src='../business-dir/img/icon-industry.gif' /> <a href='../cities/uk/c/$city_rep/bid/$sub_id'>$sub_cat_name</a><br />";
}else{

		echo "<img src='../business-dir/img/icon-industry.gif' /> <a href='../cities/uk/c/$city_rep/bid/$sub_id'>$sub_cat_name</a> <br />";
			
		@$res_sub=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE id='$iIndustry2'");
		@$sub_id=mysql_result($res_sub,0,"id");
		@$sub_cat_name=mysql_result($res_sub,0,"sIndustryName");
		echo "<img src='../business-dir/img/icon-industry.gif' /> <a href='../cities/uk/c/$city_rep/bid/$sub_id'>$sub_cat_name</a><br />";
			
		@$res_sub=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE id='$iIndustry3'");
		@$sub_id=mysql_result($res_sub,0,"id");
		@$sub_cat_name=mysql_result($res_sub,0,"sIndustryName");
		echo "<img src='../business-dir/img/icon-industry.gif' /> <a href='../cities/uk/c/$city_rep/bid/$sub_id'>$sub_cat_name</a><br />";
			
		@$res_sub=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE id='$iIndustry4'");
		@$sub_id=mysql_result($res_sub,0,"id");
		@$sub_cat_name=mysql_result($res_sub,0,"sIndustryName");
		echo "<img src='../business-dir/img/icon-industry.gif' /> <a href='../cities/uk/c/$city_rep/bid/$sub_id'>$sub_cat_name</a><br />";
}
?>



<br />
<!-- related businesses   -->
<h2><font color="#000000"> Related Businesses of <?php echo $sBusinessName; ?></font></h2>
<table width="740px">
<tr>
<?php @$res_related=mysql_query("SELECT * FROM tblbusinesses WHERE id<'$bid' AND iIndustry='$iIndustry_h' AND iCity='$iCity' LIMIT 0,12 ");
@$count_related=MYSQL_NUM_ROWS($res_related);
$rel=0;
while($rel<$count_related)
{
@$rid=mysql_result($res_related,$rel,"id");
@$b_name1=mysql_result($res_related,$rel,"sBusinessName");
echo "<td> <img src='../business-dir/img/article_bullet.png' /><a href='../$city_rep/$rid'>$b_name1</a></td>";

if($rel%3==2)
{
	echo "</tr><tr>";
}
$rel++;
}
?>

<?php if($rel==0)
{
	echo "<td>Not found any Related Business.</td>";
}
?>
</tr>
</table>

<!-- count -->
<?php 
$count=$count+1;
mysql_query("UPDATE tblbusinesses SET count='$count' WHERE id='$bid'");

?>

<br />




<!-- -->

</div>


<?php  include 'pay-business-footer.php' ?>
