
<?php include 'property-header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:auto; width:550px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:200px; top:216px; float:left; background-color:#ffffff; overflow:scroll;" >

<!-- -->

<table >
<tr>
<td align="right"><a href="property-details.php?c=<?php echo $c; ?>">Go BACK</a></td>
</tr>
</table>

<br />
<center><h2><font color="40AB05">Latest Property in <?php echo $c; ?></font></h2></center>
<br />

<?php

$city=$_REQUEST['searchp'];
$price=$_REQUEST['price'];
$bedrooms=$_REQUEST['bedrooms'];
$category=$_REQUEST['category'];

if($price=="any" and $bedrooms=="any" and $category=="any")
{
$resp=mysql_query("SELECT * FROM property WHERE city='$city'");
}
elseif($price!="any" and $bedrooms=="any" and $category=="any"){
$resp=mysql_query("SELECT * FROM property WHERE city='$city' AND price='$price'");
}
elseif($price=="any" and $bedrooms!="any" and $category=="any"){
$resp=mysql_query("SELECT * FROM property WHERE city='$city' AND bedrooms='$bedrooms'");
}
elseif($price=="any" and $bedrooms=="any" and $category!="any"){
$resp=mysql_query("SELECT * FROM property WHERE city='$city' AND category='$category'");
}
elseif($price!="any" and $bedrooms!="any" and $category=="any"){
$resp=mysql_query("SELECT * FROM property WHERE city='$city' AND price='$price' AND bedrooms='$bedrooms'");
}
elseif($price!="any" and $bedrooms=="any" and $category!="any"){
$resp=mysql_query("SELECT * FROM property WHERE city='$city' AND price='$price' AND category='$category'");
}
elseif($price=="any" and $bedrooms!="any" and $category!="any"){
$resp=mysql_query("SELECT * FROM property WHERE city='$city' AND bedrooms='$bedrooms' AND category='$category'");
}
elseif($price!="any" and $bedrooms!="any" and $category!="any"){
$resp=mysql_query("SELECT * FROM property WHERE city='$city' AND price='$price' AND bedrooms='$bedrooms' AND category='$category'");
}

$num_rows=MYSQL_NUM_ROWS($resp);
$i=0;
while($i<$num_rows)
{
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

<table>
<tr valign="top">
<td><img src="../resize-pro-pic/<?php echo $image_url; ?>" alt="" /></td>
<td><b><?php echo substr($pdesc,0,55)."..."; ?></b><br />Price: <?php echo $price; ?>£ For <?php echo $category;?> <br />
* <?php echo $type; ?> * * Bedrooms<?php echo $bedrooms; ?> * <br /> <?php echo substr($pdesc,0,135)."..."; ?><br />
<a href="full-property-details.php?c=<?php echo $c; ?>&pid=<?php echo $pid; ?>">View Full Detail</a>
</td>
</tr>
</table>


<?php
$i++;
}
?>







</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
