<?php include 'header.php';?>
<?php include 'rightbar.php';?>
<!-- Div for slider show -->

<!-- -->


<div id="main" style=" height:2480px; width:750px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:190px; top:146px; float:left; background-color:#ffffff;" >

<h2>Welcome To <?php echo $c; ?> Business Directory  </h2>

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
</script>-->

<br />

<table width="728px" bgcolor="#32A4D5">
<tr>
<td>
<img src="img/book.gif" /><font color="#FFFFFF" size="+1"> Find Your <b>Businesses in <?php echo $c; ?> Directory<b></font>
</td>
</tr>
</table>

<!-- Display ADD-->
<?php
$resa=mysql_query("SELECT adds FROM advertise WHERE id='2'");
$city_add=mysql_result($resa,0,"adds");
?>

<table width="500px">
<tr>
<td bgcolor="#ffffff"><?php echo $city_add;?></td>
</tr>
</table>

<!-- -->

<table width="728px" bgcolor="">
<tr height="100px" valign="top">
<?php
$res=mysql_query("SELECT category,pdesc,logo FROM main_category ORDER BY category ASC");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$category=mysql_result($res,$i,"category");
$pdesc=mysql_result($res,$i,"pdesc");
$logo=mysql_result($res,$i,"logo");
$pdesc1=substr($pdesc,0,170);
$cat_rep=str_replace(' ','+',$category);

$resb=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE main_category='$category' ORDER BY sIndustryName ASC LIMIT 0,5");
$num_rows1=MYSQL_NUM_ROWS($resb);

echo "<td width='300px' bgcolor='#EBF3F8'> <table><tr> <td><img src='img/$logo' style='margin-left:5px;' /></td> <td><p style='margin-left:5px;'><a href='../cities/c/$city_rep/b/$cat_rep' ><b>$category</b></a><br>";

$b=0;
while($b<$num_rows1)
{
	$subid=mysql_result($resb,$b,"id");
	$iname=mysql_result($resb,$b,"sIndustryName");
	echo "<a href='../cities/uk/c/$city_rep/bid/$subid' rel='nofollow'>$iname</a>, ";
	$b++;
}

echo "<br />  <a href='../cities/c/$city_rep/b/$cat_rep' style='margin-left:260px;' rel='nofollow'>More</a> <img src='img/downarrow.gif' />  </p> </td></tr></table>   </td>";


if($i%2==1 )
{
echo "</tr>";
echo "<tr height='100px' valign='top'>";

}

$i++;
}
?>


</tr>
</table>

<!--<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal leaderboard */
google_ad_slot = "5741010794";
google_ad_width = 728;
google_ad_height = 90;
//--
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>-->



</div>

<?php //include 'rightbar.php';?>

<?php include 'footer.php' ?>
