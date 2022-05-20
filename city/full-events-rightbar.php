<div id="leftbar" style=" height:1670px; width:180px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:760px; top:156px; float:left; background-color:#ffffff;" >

<img src="../../../../../img/find-business.jpg" alt="" />

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
<form id="search" method="post" action="../../../../../search-bus.php">

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
<a href="../../../../recommend.php?c=<?php echo $c; ?>"><img src="../../../../img/bullet.gif"  /> Can't find a business?<br /> Recommend to US !!</a></center>

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />


<table height="160px" width="180px" bgcolor="#EBF3F8">
<tr valign="top"><td><center><font color="red" size="+1">Hot Spot Listing</font></center>
<?php
if($num_rows_s<=2)
{
@$bname=mysql_result(@$res_s,1,"sBusinessName");
@$iPaid=mysql_result(@$res_s,1,"iPaid");
@$sid=mysql_result(@$res_s,1,"id");
@$phone=mysql_result(@$res_s,1,"sTelephone");
@$city1=mysql_result(@$res_s,1,"iCity");
@$iIndustry=mysql_result($res_s,1,"iIndustry");
@$res_ind=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE id='$iIndustry' Limit 0,1");
@$ind_id=mysql_result($res_ind,0,"id");
@$ind_name=mysql_result($res_ind,0,"sIndustryName");

if($iPaid=="free")
{echo "<p><img src='../../../../img/article_bullet.png' /><a href='../../../../../$city_rep/$sid'><b>$bname</b></a></p>";}
else {echo "<p><img src='../../../../img/article_bullet.png' /><a href='../../../../../$city_rep/$sid'><b>$bname</b></a></p>";}
echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;<img src='../../../../img/icon-industry.gif' /> <a href='../../../../../cities/uk/c/$city_rep/bid/$ind_id'>$ind_name</a> </p>";
echo "<img src='../../../../img/phone-trans.png' /> ".$phone;
echo "<p><a href='../../../../../$city_rep/$sid' rel='nofollow'><img src='../../../../img/business-fulldetails.gif' /></a></p>";
}
else{echo "Not Found Any Spot Listing. Be First to add your Business";}
?>

</td></tr>
</table>




<br />
<br />

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />

<center>
<a href="../../../../../business-dir/all-listing.php?c=<?php echo $city_rep; ?>"> <img src="../../../../img/bullet1.png" /> <b> Browse A-Z Business listing of <?php echo $c?></b></a></center>

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />

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
echo "<img src='../../../../img/article_bullet.png' /><a href='../../../../../cities/uk/c/$city_rep/bid/$iid'> $ind_name1</a><br />";
echo "<hr>";
$o++;
}
?>


<br /> <br />
<center><b>Quick Links</b></center><br />

<?php if(@$_SESSION['uid']!=""){ 
echo "<img src='../../../../img/bullet1.png' /> <a href='../../../../../add-business/index.php' rel='nofollow'>Add Your Business</a> <br /> <hr>";
echo "<img src='../../../../img/bullet1.png' /> <a href='../../../../../user/index.php' rel='nofollow'> View Your Account</a> ";
}else{
echo "<img src='../../../../img/bullet1.png' /> <a href='../../../../../register.php' rel='nofollow'>Become A Member</a> <br /> <hr>";
echo "<img src='../../../../img/bullet1.png' /> <a href='../../../../../login.php' rel='nofollow'>Add Your Business</a> <br /> <hr>";
echo "<img src='../../../../img/bullet1.png' /> <a href='../../../../../login.php' rel='nofollow'>Login</a> ";
}
?>




<!--  end -->
</div>
