

<div id="leftbar" style=" height:1670px; width:180px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:10px; top:156px; float:left; background-color:#ffffff;" >

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />

<center>
<a href="../../../business-dir/all-listing.php?c=<?php echo $first_city_cap; ?>"><img src="../../img/bullet1.png" /> <b>Browse A-Z Business listing of <?php echo $first_city_cap;?></b></a></center>

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" /> <br />



<table height="160px" width="180px" bgcolor="#F0F0F0">
<tr valign="top"><td> <center><font color="red" size="+1">Hot Spot Listing</font></center>
<?php
$res1=mysql_query("SELECT id FROM city WHERE city='$c'");
$cid=mysql_result($res1,0,"id");

$res_s=mysql_query("SELECT id,sBusinessName,sTelephone,iPaid,iCity,iIndustry FROM tblbusinesses WHERE iCity='$cid' ORDER BY count DESC Limit 0,2");
$num_rows_s=MYSQL_NUM_ROWS($res_s);

if($num_rows_s!="0")
{
$bname=mysql_result($res_s,0,"sBusinessName");
$iPaid=mysql_result($res_s,0,"iPaid");
$sid=mysql_result($res_s,0,"id");
$phone=mysql_result($res_s,0,"sTelephone");
$city1=mysql_result($res_s,0,"iCity");
$iIndustry=mysql_result($res_s,0,"iIndustry");
$res_ind=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE id='$iIndustry' Limit 0,1");
$ind_id=mysql_result($res_ind,0,"id");
$ind_name=mysql_result($res_ind,0,"sIndustryName");

if($iPaid=="free")
{echo "<p><img src='../../img/article_bullet.png' /><a href='../../../$city_rep/$sid'><b>$bname</b></a></p>";}
else {echo "<p><img src='../../img/article_bullet.png' /><a href='../../../$city_rep/$sid'><b>$bname</b></a></p>";}
echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;<img src='../../img/icon-industry.gif' /> <a href='../../../cities/uk/c/$city_rep/bid/$ind_id'>$ind_name</a> </p>";
echo "<img src='../../img/phone-trans.png' /> ".$phone;
echo "<p><a href='../../../$city_rep/$sid' rel='nofollow'><img src='../../img/business-fulldetails.gif' /></a></p>";
}
else{echo "Not Found Any Spot Listing. Be First to add your Business";}
?>
</td></tr>
</table>


<script type="text/javascript">
function RemoveText_search()
	{
	document.getElementById("email").value="";
	}
	</script>

	<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />

<table width="180px" bgcolor="#ffffff">
<form id="search" method="post" action="../../add-email.php">

<tr><td><img src="../../img/business-email.gif" /><b> Get the newsletter</b></td></tr>
<tr height="40px">
<input type="hidden" name="c" id="c" value="<?php echo $c;?>" />
<td><input type="text" onclick="RemoveText_search()" name="email" id="email" value="Enter Email" /></td>
<input type="hidden" name="c" id="c" value="<?php echo $c; ?>" />
</tr>

<tr><td>
<input type="submit" value="Enter Email" name="submit" />
</td></tr>

</form>
</table>

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />

<center><b>Popular Searches</b></center><br />

<?php
$resm=mysql_query("SELECT category,id,logo FROM main_category ORDER BY count DESC Limit 0,15");
$num_rows_m=MYSQL_NUM_ROWS($resm);
$o=0;
while($o<$num_rows_m)
{
$logo=mysql_result($resm,$o,"logo");
$cate=mysql_result($resm,$o,"category");
$cat_rep=str_replace(' ','+',$cate);
echo "<img src='../../../business-dir/img/$logo' /> <a href='../../../cities/c/$city_rep/b/$cat_rep'> $cate</a><br />";
echo "<hr color='#DDDDDD'>";
$o++;
}
?>

<br />
<br />

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />

<center>
<a href="../../recommend.php?c=<?php echo $c; ?>"><img src="../../img/bullet.gif"  /> Can't find a business?<br /> Recommend to US !!</a></center>

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />


<br /> <br />
<center><b>Quick Business Links</b></center><br />


<?php if(@$_SESSION['uid']!=""){ 
echo "<img src='../../img/bullet1.png' /> <a href='../../../add-business/index.php' rel='nofollow'>Add Your Business</a> <br /> <hr>";
echo "<img src='../../img/bullet1.png' /> <a href='../../../user/index.php' rel='nofollow'> View Your Account</a> <br /> <hr>";
}else{
echo "<img src='../../img/bullet1.png' /> <a href='../../../register.php' rel='nofollow'>Become A Member</a> <br /> <hr>";
echo "<img src='../../img/bullet1.png' /> <a href='../../../login.php' rel='nofollow'>Add Your Business</a> <br /> <hr>";
echo "<img src='../../img/bullet1.png' /> <a href='../../../login.php' rel='nofollow'>Login</a> <br /> <hr>";
}
?>
<img src="../../img/bullet1.png" /> <a href="../../<?php echo $city_rep;?>" rel="nofollow"><?php echo $first_city_cap; ?> Home</a> <br /> <hr>
<img src="../../img/bullet1.png" /> <a href="../../../business-dir/<?php echo $city_rep;?>" rel="nofollow"><?php echo $first_city_cap; ?> Business Directory</a> <br /> <hr>
<img src="../../img/bullet1.png" /> <a href="../../../business-dir/all-listing.php?c=<?php echo $c; ?>" rel="nofollow">All <?php echo $first_city_cap; ?> Local Business</a> <br /> <hr>
<img src="../../img/bullet1.png" /> <a href="../../photos/c/<?php echo $city_rep;?>" rel="nofollow"> Local <?php echo $first_city_cap; ?> Photos</a> <br /> <hr>
<img src="../../img/bullet1.png" /> <a href="../../events/c/<?php echo $city_rep;?>" rel="nofollow"><?php echo $first_city_cap; ?> Events</a> <br /> <hr>
<img src="../../img/bullet1.png" /> <a href="../../property/c/<?php echo $city_rep; ?>" rel="nofollow"><?php echo $first_city_cap; ?> Properties</a> <br /> <hr>


<br /> <br />
<center><b>Quick Links</b></center><br />

<?php if(@$_SESSION['uid']!=""){ 
echo "<img src='../../img/bullet1.png' /> <a href='../../../add-business/index.php' rel='nofollow'>Add Your Business</a> <br /> <hr>";
echo "<img src='../../img/bullet1.png' /> <a href='../../../user/index.php' rel='nofollow'> View Your Account</a> ";
}else{
echo "<img src='../../img/bullet1.png' /> <a href='../../../register.php' rel='nofollow'>Become A Member</a> <br /> <hr>";
echo "<img src='../../img/bullet1.png' /> <a href='../../../login.php' rel='nofollow'>Add Your Business</a> <br /> <hr>";
echo "<img src='../../img/bullet1.png' /> <a href='../../../login.php' rel='nofollow'>Login</a> ";
}
?>


<!-- -->
</div>
