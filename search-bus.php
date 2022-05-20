<?php include 'search-header.php';?>
<?php include 'search-rightbar.php' ?>

<!-- Div for slider show -->



<!-- -->


<div id="leftbar" style=" height:1250px; width:750px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:190px; top:146px; float:left; background-color:#ffffff; " >

<?php
@$bname=addslashes($_REQUEST['bname']);
@$lcity=addslashes($_REQUEST['lcity']);

$lcity_len=strlen($lcity);
$bname_len=strlen($bname);
?>


<h1>Find "<?php echo $bname; ?>" in <?php echo $first_city_cap; ?></h1>



<?php
$found_search=0;
@$resc=mysql_query("SELECT id FROM city  WHERE city='$lcity'");
@$num_rows_c=MYSQL_NUM_ROWS($resc);


$id=mysql_result($resc,0,"id");
$res=mysql_query("SELECT id,sBusinessName,sTelephone,iPaid,dSubStartDate,dSubEndDate,image_url,sAddress,tDescription,iUserId,iIndustry FROM tblbusinesses  WHERE sBusinessName LIKE '%$bname%' AND iCity='$id' ORDER BY id DESC Limit 0,28");
$num_rows=MYSQL_NUM_ROWS($res);

if($num_rows!="0")
{
	$found_search=1;
?>

<table width="738px" bgcolor="#32A4D5">
<tr>
<td>
<font color="#FFFFFF" size="+1"><img src="business-dir/img/book.gif" /> Search for <?php echo $c." ".$bname." Businesses and Local ".$bname. " Listings";?> </font>
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
</script>  <br />

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
$i=0;
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
?>

<tr height="70px" valign="top">

<td width="428px" bgcolor="#EBF3F8">
<img src="business-dir/img/article_bullet.png" /><a href="<?php echo $city_rep; ?>/<?php echo $id; ?>"><b><?php echo $name; ?></b></a>
<br /><br />
<img src="business-dir/img/business-phone.gif" style="margin-left:10px;" /><?php echo $phone;?> 
&nbsp;&nbsp;
        <img src="business-dir/img/icon-industry.gif" style="margin-left:20px;" />&nbsp; <a href="cities/uk/c/<?php echo $city_rep; ?>/bid/<?php echo $iIndustry; ?>"><?php echo $ind_name1; ?></a> &nbsp;&nbsp;
        
 <a rel="nofollow" style="margin-left:20px; "  href="<?php echo $city_rep; ?>/<?php echo $id; ?>"><img src='business-dir/img/business-fulldetails.gif' /></a>

<td width="100px" bgcolor="#EBF3F8">
<?php if($iUserId==0){
echo "<img src='business-dir/img/NotClaimed2-new.jpg' />";
}else{
echo "<img src='business-dir/img/Verified2-new.jpg' />";
}
?>
</td>

<td width="200px" bgcolor="#EBF3F8">
<br /><br />
<a rel="nofollow" style="margin-left:20px; "  href="<?php echo $city_rep; ?>/<?php echo $id; ?>"><img src="business-dir/img/addareview.gif" /></a>
</td>
</tr>



<?php
$i++;
}

?>

</table>

<tr>
<td>
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
</td>
</tr>

</td></tr>
</table>


<?php
}else{
echo "<table width='728px' bgcolor='#F5FBFF'>";
?>
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

<?php
echo "<td>
No Found Such A Business In This City.You can add this business by <a href='login.php'>Login</a> and click on Add Your Business.<br /> OR you can Email to us with following things<b><br /><br /> Company Name ,<br /> Contact Name ,<br /> Address , <br />City Name<br /> at webmaster@".$_SERVER['SERVER_NAME']." </b>
</td>
";
}
?>
</tr>
</table>
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



<?php
// insert into searches
if($found_search==1)
{
	mysql_query("INSERT INTO searches (city_name,search_name,find) VALUES ('$lcity','$bname', '$found_search')");
	
}else{
	mysql_query("INSERT INTO searches (city_name,search_name,find) VALUES ('$lcity','$bname', '$found_search')");
}


?>

<!--  ----------    -->
</div>


<?php include 'search-footer.php' ?>
