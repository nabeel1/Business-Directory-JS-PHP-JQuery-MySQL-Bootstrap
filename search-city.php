<?php include 'header.php';?>
<?php include 'right-bar.php';?>
<!-- Div for slider show -->




<div id="leftbar" style=" height:1250px; width:410px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:294px; top:106px; float:left; background-color:#ffffff; " >

<?php
$search=addslashes($_POST['searchbycity']);
$search_len=strlen($search);
if($search_len!="")
{
?>

<table width="410px" bgcolor="#32A4D5">
<tr height="30px" valign="top">
<td> <img src="img/search-icon-1.png" />&nbsp;&nbsp; <font size="+1" color="#FFFFFF">Searching For <?php echo $search; ?></font></td>
</tr>
</table>

<table width="410px">
<?php
$res=mysql_query("SELECT city,id FROM city  WHERE city LIKE '%$search%'");
$num_rows=MYSQL_NUM_ROWS($res);

if($num_rows!="0")
{
$i=0;
while($i<$num_rows)
{
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$city_rep=str_replace(' ','+',$city);
?>
<tr height="40px" bgcolor="#EBF3F8">
<td>
<a href="city/<?php echo $city_rep; ?>"><font size="+1"><?php echo $city; ?></font></a><br />
</td>
</tr>
<?php
$i++;
}
}
else{
echo "<br><u>No Found Such City.</u><br /> If you want to suggest this city in our directory <b>please email to us on webmaster@".$_SERVER['SERVER_NAME']."</b>";
}
}else {echo "<br> <u>Go Back And Enter Some city</u>. If you want to suggest this city in our directory <b>please email to us on webmaster@".$_SERVER['SERVER_NAME']."</b>";}
?>
</table>

<br />
<center>
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
</center>







</div>

<?php include 'leftbar.php';?>
<?php include 'footer.php' ?>