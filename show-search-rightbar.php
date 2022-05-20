<div id="leftbar" style=" height:900px; width:180px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:4px; top:150px; float:left; background-color:#ffffff;" >

<img src="../../../../business-dir/img/find-business.jpg" alt="" />


<script type="text/javascript">
function RemoveText2()
	{
	document.getElementById("bname").value="";
	}
	function RemoveText3()
	{
	document.getElementById("lcity").value="";
	}
	</script>



<table>
<form id="search" method="post" action="../../../../search-bus.php">

<tr><td>Business Name:</td></tr>
<tr height="40px">
<td><input type="text" onclick="RemoveText2()" name="bname" id="bname" value="Name of business" /></td>
</tr>


<tr><td>Local City</td></tr>
<tr height="40px">
<td><input type="text" onclick="RemoveText3()" name="lcity" id="lcity" value="<?php echo $c;?>" /></td>
</tr>

<tr><td>
<input type="submit" value="Search" name="submit-index" />
</td></tr>
</form>
</table>


<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />

<center>
<a href="../../../../city/recommend.php?c=<?php echo $c; ?>">Can't find a business?<br /> Recommend to US !!</a></center>

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />

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
{echo "<p><img src='../../../../business-dir/img/article_bullet.png' /><a href='../../../../$city_rep/$sid'><b>$bname</b></a></p>";}
else {echo "<p><img src='../../../../business-dir/img/article_bullet.png' /><a href='../../../../$city_rep/$sid'><b>$bname</b></a></p>";}
echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;<img src='../../../../business-dir/img/icon-industry.gif' /> <a href='cities/uk/c/$city_rep/bid/$ind_id'>$ind_name</a> </p>";
echo "<img src='../../../../business-dir/img/phone-trans.png' /> ".$phone;
echo "<p><a href='../../../../$city_rep/$sid' rel='nofollow'><img src='../../../../business-dir/img/business-fulldetails.gif' /></a></p>";
}
else{echo "Not Found Any Spot Listing. Be First to add your Business";}
?>
</td></tr>
</table>

<br  />

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />

<!-----      popular categories         -------------->
<br /><br />
<center><b>Popular <?php echo $c; ?> Categories</b></center><br />

<?php
@$res=mysql_query("SELECT id FROM city WHERE city='$c'");
@$id=mysql_result($res,0,"id");
$resm=mysql_query("SELECT iIndustry, COUNT( iIndustry ) AS cind FROM  `tblbusinesses` WHERE  `iCity` =  '$id' GROUP BY  `iIndustry` ORDER BY cind DESC  LIMIT 0 , 15");
$num_rows_m=MYSQL_NUM_ROWS($resm);
$o=0;
while($o<$num_rows_m)
{
//$iname=mysql_result($resm,$o,"sIndustryName");
$iid=mysql_result($resm,$o,"iIndustry");
@$res_ind1=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE id='$iid' Limit 0,2");
@$ind_name1=mysql_result($res_ind1,0,"sIndustryName");
@$ind_name2=str_replace(" ","+",$ind_name1);
echo "<img src='../../../../business-dir/img/article_bullet.png' /><a href='../../../../cities/uk/c/$city_rep/bid/$iid' rel='nofollow'> $ind_name1</a><br />";
echo "<hr>";
$o++;
}
?>
<!-- ------------------------>


<br /> <br />
<center><b>Quick Business Links</b></center><br />


<img src="../../../../business-dir/img/bullet1.png" /> <a href="../../../../city/<?php echo $city_rep; ?>" rel="nofollow"><?php echo $first_city_cap; ?> Home</a> <br /> <hr>
<img src="../../../../business-dir/img/bullet1.png" /> <a href="../../../../business-dir/<?php echo $city_rep; ?>" rel="nofollow"><?php echo $first_city_cap; ?> Business Directory</a> <br /> <hr>
<img src="../../../../business-dir/img/bullet1.png" /> <a href="../../../../business-dir/all-listing.php?c=<?php echo $c; ?>" rel="nofollow">All <?php echo $first_city_cap; ?> Local Business</a> <br /> <hr>
<img src="../../../../business-dir/img/bullet1.png" /> <a href="../../../../city/photos/c/<?php echo $city_rep; ?>" rel="nofollow"> Local <?php echo $first_city_cap; ?> Photos</a> <br /> <hr>
<img src="../../../../business-dir/img/bullet1.png" /> <a href="../../../../city/events/c/<?php echo $city_rep; ?>" rel="nofollow"><?php echo $first_city_cap; ?> Events</a> <br /> <hr>
<img src="../../../../business-dir/img/bullet1.png" /> <a href="../../../../city/property/c/<?php echo $city_rep; ?>" rel="nofollow"><?php echo $first_city_cap; ?> Properties</a> <br /> <hr>

<?php if(@$_SESSION['uid']!=""){ 
echo "<img src='../../../../business-dir/img/bullet1.png' /> <a href='../../../../add-business/index.php' rel='nofollow'>Add Your Business</a> <br /> <hr>";
echo "<img src='../../../../business-dir/img/bullet1.png' /> <a href='../../../../user/index.php' rel='nofollow'> View Your Account</a> <br /> <hr>";
}else{
echo "<img src='../../../../business-dir/img/bullet1.png' /> <a href='../../../../register.php' rel='nofollow'>Become A Member</a> <br /> <hr>";
echo "<img src='../../../../business-dir/img/bullet1.png' /> <a href='../../../../login.php' rel='nofollow'>Add Your Business</a> <br /> <hr>";
echo "<img src='../../../../business-dir/img/bullet1.png' /> <a href='../../../../login.php' rel='nofollow'>Login</a> <br /> <hr>";
}
?>

<br /><br />

<center><b>Popular <?php echo $c; ?> Searches</b></center><br />

<?php
$resm=mysql_query("SELECT category,id,logo FROM main_category ORDER BY count DESC Limit 0,15");
$num_rows_m=MYSQL_NUM_ROWS($resm);
$o=0;
while($o<$num_rows_m)
{
$cate=mysql_result($resm,$o,"category");
$cat_rep=str_replace(' ','+',$cate);
$logo=mysql_result($resm,$o,"logo");
echo "<a href='../../../../cities/c/$city_rep/b/$cat_rep' rel='nofollow'><img src='../../../../business-dir/img/$logo' />  $cate</a><br />";
echo "<hr color='#DDDDDD'>";
$o++;
}
?>

<br />
<br />


<!--  end -->
</div>
