<?php include 'property-header.php';?>
<?php include 'photo-leftbar.php';?>



<div id="main" style=" height:auto; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff; " >


<table>
<tr>
<td><h2><font color="#000000">Properties for rent / sale in <?php echo $c; ?></font></h2></td> 

<td align="right"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
if(@$_SESSION['fname']!=""){
echo "<a href='../../../user/add-property.php'><img src='../../img/add-properties.png' /></a>";
}else{
echo "<a href='../../../login.php'><img src='../../img/add-properties.png' /></a>";
}
?>
</td>
</tr>
</table>



<!-- -->

<table>
<tr>
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

<td>

<table bgcolor="32A4D5" >
<form id="register" method="post" action="../../search-property.php?c=<?php echo $c; ?>">

<tr height="30px">
<td><font color="#FFFFFF" size="+1"><b><i>City</i></b></font></td>
<td><input type="text" name="searchp" id="searchp" value="<?php echo $c; ?>" /></td>
</tr>

<tr height="30px">
<td><font color="#FFFFFF" size="+1"><b><i>Price</i></b></font></td>
<td>
<select name="price" id="price">
<option value="any" >ANY</option>
<?php
$resp1=mysql_query("SELECT DISTINCT bedrooms,price,category,type FROM property WHERE city='$c'");
$num_rows_p=MYSQL_NUM_ROWS($resp1);
$p=0;
while($p<$num_rows_p)
{
$price_r=mysql_result($resp1,$p,"price");
echo "<option value='$price_r' >$price_r £</option>";
$p++;
}
?>
</select>
</td>
</tr>

<tr>
<td>
<font color="#FFFFFF" size="+1">Bedroom</font>
</td>
<td>
<select name="bedrooms" id="bedrooms">
<option value="any" >ANY</option>
<?php $p=0;
while($p<$num_rows_p)
{
$bedrooms=mysql_result($resp1,$p,"bedrooms");
echo "<option value='$bedrooms' >$bedrooms</option>";
$p++;
}
?>
</select>

</td>
</tr>

<tr height="30px">
<td><font color="#FFFFFF" size="+1"><b><i>Sale/Rent</i></b></font></td>
<td>
<select name="category" id="category">
<option value="any" >ANY</option>
<?php
$p=0;
while($p<$num_rows_p)
{
$category=mysql_result($resp1,$p,"category");
echo "<option value='$category' >$category</option>";
$p++;
}
?>
</select>
</td>

</tr>


<tr><td></td><td>
<input name="submit" type="submit" 
 style="background-color: #CCFFFF; 
 border-top: 2px solid #5f6c4d; 
 border-right: 2px solid #000000; 
 border-bottom: 2px solid #000000; 
 border-left: 2px solid #5f6c4d;
 width: 80px; height: 24px;
 font-weight: bold;" value="Search" />
</td>
</tr>
</form>
</table>


</td>
</tr>
</table>

<h3><font color="F4850F">New Local <?php echo $c; ?> Properties</font></h3>

<?php
$i=0;
while($i<$num_rows)
{
$ptitle=mysql_result($resp,$i,"title");
$category_p=mysql_result($resp,$i,"category");
$type=mysql_result($resp,$i,"type");
$address=mysql_result($resp,$i,"address");
$town=mysql_result($resp,$i,"town");
$city1=mysql_result($resp,$i,"city");
$code=mysql_result($resp,$i,"code");
$bedrooms=mysql_result($resp,$i,"bedrooms");
$price=mysql_result($resp,$i,"price");
$image_url=mysql_result($resp,$i,"image_url");
$name1=mysql_result($resp,$i,"name1");
$number=mysql_result($resp,$i,"number");
$pdesc=mysql_result($resp,$i,"pdesc");
$pid=mysql_result($resp,$i,"id");
?>

<table bgcolor="#F5FBFF">
<tr valign="top">
<td width="380px">
<a href="../../properties/pid/<?php echo $pid; ?>/c/<?php echo $city_rep; ?>"><font size="+1"><b><?php echo $ptitle; ?></b></font></a> <br />
<br /> £<?php echo $price; ?> &nbsp;&nbsp; *<?php echo $category;?>* <br /><br />

<?php echo substr($pdesc,0,135)."..."; ?><br /><br />

<?php echo $type; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="../../properties/pid/<?php echo $pid; ?>/c/<?php echo $city_rep; ?>"><img src="../../img/business-fulldetails.gif" /></a>

</td>
<td><img src="../../../resize-pro-pic/<?php echo $image_url; ?>" alt="" /></td>
</tr>
</table>



<?php
$i++;
}
?>


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

<?php echo $mdesc;?>. It's great chance for you people to promote your new properties by following easy steps.

     <h3>How to share upcoming latest properties of <?php echo $c;?> different area and town</h3>
     
     <ul>
     <li> <a href="../../login.php">Login</a> or <a href="../../register.php">register</a> now</li>
     <li>Go to member area after login</li>
     <li>Click on Add properties button</li>
     <li>Share upcoming properties of <?php echo $c;?> different area</li>
     <li>Your properties will appear after our admin approve</li>
     </ul>


</div>

<?php include 'events-rightbar.php';?>
<?php include 'footer-photos.php' ?>
