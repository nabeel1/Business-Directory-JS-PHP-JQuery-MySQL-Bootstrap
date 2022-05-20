<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:1870px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:520px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:20px; top:0px;" >

<h1><?php echo $first_city_cap; ?> Business Directory</h1>

<table>
<tr valign="top">

<!--<td>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal 336 */
google_ad_slot = "5324071638";
google_ad_width = 336;
google_ad_height = 280;
//--
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</td> -->

<td>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal main */
google_ad_slot = "6043445755";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</td>


<td><?php echo $cdesc; ?></td>
</tr>
</table>


<br />

<!-- for displaying sub category -->
<?php
@$res=mysql_query("SELECT id FROM city WHERE city='$c'");
@$id=mysql_result($res,0,"id");
$resm=mysql_query("SELECT iIndustry, COUNT( iIndustry ) AS cind FROM  `tblbusinesses` WHERE  `iCity` =  '$id' GROUP BY  `iIndustry` ORDER BY cind DESC  LIMIT 0 , 8");
@$num_rows_ind1=MYSQL_NUM_ROWS($resm);
?>
&nbsp;
<table>
<tr>

<?php
$i=0;
$city_rep=str_replace(' ','+',$c);
while(@$i<$num_rows_ind1)
{
	$iid=mysql_result($resm,$i,"iIndustry");
@$res_ind1=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE id='$iid' Limit 0,2");
@$ind_name1=mysql_result($res_ind1,0,"sIndustryName");
@$ind_name2=str_replace(" ","+",$ind_name1);

if($i==4)
{
	echo "</tr><tr>";
}

echo "<td><img src='img/article_bullet.png' />&nbsp;<a href='../cities/uk/c/$city_rep/bid/$iid'>".$ind_name1."</a></td>"; 

	$i++;
}
?>
</tr>

</table>

<!-- Display ADD-->
<?php
$resa=mysql_query("SELECT adds FROM advertise WHERE id='1'");
$city_add=mysql_result($resa,0,"adds");
?>

<table width="500px">
<tr>
<td bgcolor="#ffffff"><?php echo $city_add;?></td>
</tr>
</table>

<!-- ----   Premium Listing  ----- -->

<table width="500px">
<tr height="30px">
<td bgcolor="#1595D3"> <img src="img/icon-star.gif" /> <font color="#FFFFFF">Top Spot And Premium Listing</font></td>
</tr>
</table>

<table width="500px">

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
$tdesc=substr($tdesc,0,160);
?>
<tr height="100px" valign="top">
<td width="100px" bgcolor=""><img src="../resize-pro-pic/<?php echo $image_url;?>" /></td>

<td width="370" bgcolor="#EBF3F8">
<img src='img/bullet1.png' /><a href="../<?php echo $city_rep; ?>/<?php echo $id; ?>"> <b><?php echo $sBusinessName; ?></b></a>
<br /><br /><?php echo $tdesc.".."; ?>
<br /><br> 
	<img src="img/business-phone.gif" /><?php echo $phone;?> &nbsp;&nbsp;
	<img src="img/business-email.gif" /> <a rel="nofollow" href="../<?php echo $c; ?>/<?php echo $id; ?>">Email</a> &nbsp;&nbsp;
    <img src="img/business-pin.gif" />&nbsp; <a rel="nofollow" href="../<?php echo $c; ?>/<?php echo $id; ?>">Map</a> &nbsp;&nbsp;
        <a rel="nofollow" href="../<?php echo $city_rep; ?>/<?php echo $id; ?>"><img src='img/business-fulldetails.gif' /></a>
    
<br><br /> 
</td>


</tr>

<?php
$i++;
}
}else { echo "<td width='500px'>Not have any Business in Top Listing $c yet."; 

if(@$_SESSION['fname']!=""){echo " <a href='../add-business/index.php'>Be first to add your business.</a></td>";}
else{echo " <a href='../login.php' rel='nofollow'>Login</a> or <a href='../register.php' rel='nofollow'>Register</a> here to Add Business.</td>";}

}
?>

</table>



<!-- ----   PROPERTY  ----- -->

<table width="500px">
<tr height="30px">
<td bgcolor="#28AD0E"> <img src="img/icon-news.gif" /> <font color="#FFFFFF">Latest Property</font></td>
</tr>
</table>

<table>
<tr valign="top">
<?php

$res_p=mysql_query("SELECT id,category,type,price,image_url,title FROM property WHERE city='$c' ORDER BY id DESC LIMIT 0,2");
$num_rows_p=MYSQL_NUM_ROWS($res_p);
?>

<?php $i=0;
if($num_rows_p!=0)
{
while($i<$num_rows_p)
{
$image_url=mysql_result($res_p,$i,"image_url");
$category=mysql_result($res_p,$i,"category");
$price=mysql_result($res_p,$i,"price");
$type=mysql_result($res_p,$i,"type");
$pid=mysql_result($res_p,$i,"id");
$ptitle=mysql_result($res_p,$i,"title");

?>
<td width="125px">
<img src="../resize-pro-pic/<?php echo $image_url; ?>" width="110px" />
</td>
<td width="125px">
<a href="properties/pid/<?php echo $pid; ?>/c/<?php echo $city_rep;?>"><?php echo $ptitle;?></a> <br />
<font color="#FF0000"> £ </font><?php echo $price; ?> For <?php echo $category; ?> <br />
<?php echo $type; ?> <br />
<a href="properties/pid/<?php echo $pid; ?>/c/<?php echo $city_rep;?>"><img src='img/business-fulldetails.gif' /></a>
</td>

<?php
$i++;
}
}else { echo "<td width='500px'>Not found any Property in $c";

if(@$_SESSION['fname']!=""){echo " <a href='../add-business/index.php'>Be first to add your business.</a></td>";}
else{echo " <a href='../login.php' rel='nofollow'>Login</a> or <a href='../register.php' rel='nofollow'>Register</a> here to Add Property.</td>";}

}
?>
</tr>
</table>

<!-- ----  LATEST EVENT  ----- -->

<table width="500px">
<tr height="30px">
<td bgcolor="#F4850F"> <img src="img/icon-calendar.gif" /> <font color="#FFFFFF">Latest EVENT</font></td>
</tr>
</table>

<table>
<tr valign="top">
<?php
$res_e=mysql_query("SELECT id,event_name,start,end,category,image_url FROM event WHERE city='$c' ORDER BY id DESC LIMIT 0,2");
$num_rows_e=MYSQL_NUM_ROWS($res_e);
?>

<?php $i=0;
if($num_rows_e!=0)
{
while($i<$num_rows_e)
{
$eid=mysql_result($res_e,$i,"id");
$image_url=mysql_result($res_e,$i,"image_url");
$category=mysql_result($res_e,$i,"category");
$event_name=mysql_result($res_e,$i,"event_name");
$start=mysql_result($res_e,$i,"start");
$end=mysql_result($res_e,$i,"end");
$event_name1=substr($event_name,0,30);

$start1=date("d M Y", $start);
$end1=date("d M Y", $end);


?>
<td width="125px">
<img src="../resize-pro-pic/<?php echo $image_url; ?>" width="110px" />
</td>
<td width="125px">
<a href="events/eid/<?php echo $eid; ?>/c/<?php echo $city_rep;?>"><b><?php echo $event_name1; ?></b></a> <br />
<font size="-1" color="#0E94CE">Start on:</font> <?php echo $start1; ?> <br />
<font size="-1" color="#0E94CE">until:</font> <?php echo $end1; ?> <br />
<a href="events/eid/<?php echo $eid; ?>/c/<?php echo $city_rep;?>"><img src='img/business-fulldetails.gif' /></a>
</td>

<?php
$i++;
}
}else { echo "<td width='500px'>Not have any $c Event yet";
if(@$_SESSION['fname']!=""){echo " <a href='../add-business/index.php'>Be first to add your business.</a></td>";}
else{echo " <a href='../login.php' rel='nofollow'>Login</a> or <a href='../register.php' rel='nofollow'>Register</a> here to Add Events.</td>";}
}
?>
</tr>
</table>

<!-- ----   MEMBER  ----- -->


<table width="500px">
<tr height="30px">
<td bgcolor="#595959"><img src="img/icon-members.gif" /> <font color="#ffffff">Latest MEMBER</font></td>
</tr>
</table>

<table>
<tr valign="top">
<?php
$res_m=mysql_query("SELECT fname,lname,id FROM user WHERE city='$c' ORDER BY id DESC LIMIT 0,3");
$num_rows_m=MYSQL_NUM_ROWS($res_m);
?>

<?php $i=0;
if($num_rows_m!=0)
{
while($i<$num_rows_m)
{
$fname=mysql_result($res_m,$i,"fname");
$lname=mysql_result($res_m,$i,"lname");
$userid=mysql_result($res_m,$i,"id");

?>
<td width="125px">
<img src="../resize-pro-pic/members-noimg.jpg" width="100px" />
</td>
<td width="125px">
<a href="../profile/uid/<?php echo $userid;?>"><?php echo $fname." ".$lname; ?></a> <br />
</td>

<?php
$i++;
}
}else { echo "<td width='500px'>Not have any member in $c";

if(@$_SESSION['fname']!=""){echo " <a href='../add-business/index.php'>Be first to add your business.</a></td>";}
else{echo " <a href='../login.php' rel='nofollow'>Login</a> or <a href='../register.php' rel='nofollow'>Register</a> here to become member.</td>";}

}
?>
</tr>
</table>

<!-- ----   FREE LISTING  ----- -->
<br />

<table width="500px">
<tr height="30px">
<td bgcolor="#1595D3"> <img src="img/icon-flame.gif" /> <font color="#ffffff">  Latest FREE LISTING</font></td>
</tr>
</table>


<table>
<tr height="100px" valign="top">
<?php
$top="free";
$city_rep=str_replace(' ','+',$c);
$res_p=mysql_query("SELECT id,sBusinessName,iIndustry FROM tblbusinesses WHERE iCity='$cid' AND iPaid='$top' ORDER BY id DESC Limit 0,9");
$num_rows_p=MYSQL_NUM_ROWS($res_p);
?>

<?php $i=0;
if($num_rows_p!=0)
{
while($i<$num_rows_p)
{
$id=mysql_result($res_p,$i,"id");
$iIndustry=mysql_result($res_p,$i,"iIndustry");
$res_ind=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE id='$iIndustry' Limit 0,1");
$ind_id=mysql_result($res_ind,0,"id");
$ind_name=mysql_result($res_ind,0,"sIndustryName");
$sBusinessName=mysql_result($res_p,$i,"sBusinessName");
@$ind_name2=str_replace(" ","+",$ind_name);
if($i==3 or $i==6)
{
	echo "</tr><tr>";
}

?>


<td width="160" bgcolor="#EBF3F8">
<img src='img/bullet1.png' /> <a href="../<?php echo $city_rep; ?>/<?php echo $id; ?>"><b><?php echo $sBusinessName; ?></b></a><br /><br>
<img src="img/icon-industry.gif" />&nbsp;<a href="../cities/uk/c/<?php echo $city_rep; ?>/bid/<?php echo $ind_id;?>"><?php echo $ind_name;?></a>
<br /><br /><a rel="nofollow" href="../<?php echo $city_rep; ?>/<?php echo $id; ?>"><img src="img/business-fulldetails.gif" /></a>
</td>
<?php
$i++;
}
}else { echo "<td width='500px'>Not found any Business in $c. ";

if(@$_SESSION['fname']!=""){echo " <a href='../add-business/index.php'>Be first to add your business.</a></td>";}
else{echo " <a href='../login.php' rel='nofollow'>Login</a> or <a href='../register.php' rel='nofollow'>Register</a> here to add business.</td>";}

}
?>
</tr>
</table>


<center><script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal 336 */
google_ad_slot = "5324071638";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>



<!-- ----   Latest Searches  ----- -->

<table width="500px">
<tr height="30px" valign="top">
<td bgcolor="#2174A0"> <font color="#FFFFFF"><img src="img/search-icon.png" /> Search By User</font></td>
</tr>
</table>

<table width="500px">
<tr valign="top">
<?php
$res_s=mysql_query("SELECT id,search_name FROM searches WHERE city_name='$c' ORDER BY id DESC LIMIT 0,4");
$num_rows_s=MYSQL_NUM_ROWS($res_s);
?>

<?php $i=0;
if($num_rows_s!=0)
{
while($i<$num_rows_s)
{
$search_name=mysql_result($res_s,$i,"search_name");
$searchid=mysql_result($res_s,$i,"id");

?>
<td width="100px">
<a href="../searches/bname/<?php echo $search_name; ?>/lcity/<?php echo $city_rep;?>"><?php echo $search_name; ?></a>
</td>

<?php
$i++;
}
}else { echo "<td width='500px'>Not found any search result in $c. Start searching bussiness in $c city uk.</td>";


}
?>
</tr>
</table>



<!-- --------    Is ko ni cheerna    ------------->

</div>

<!-- -->
















</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
