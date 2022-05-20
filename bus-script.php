<?php include 'header.php';?>
<?php include 'leftbar.php';?>


<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:900px; width:710px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:236px; top:196px; float:left; background-color:#ffffff;" >


<!-- register form -->


<div id="register1" style=" height:300px; width:400px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:30px; top:10px; background-color:#32A4D5; " >

<br />

<font size="+1" color="#ffffff"><b>Please enter your details below:</b></font>
<br />




<br />

<table align="center">
<?php
$b=" ";
$res=mysql_query("SELECT * FROM  tblindustries WHERE main_category='$b' ");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
echo $num_rows;

while($i<$num_rows)
{
$cat=mysql_result($res,$i,"sIndustryName");
$id=mysql_result($res,$i,"id");
 mysql_query("UPDATE tblindustries SET main_category='uncategorized' WHERE id='$id'");
$i++;
}

/*while($i<$num_rows)
{
$cat=mysql_result($res,$i,"sIndustryName");
$id=mysql_result($res,$i,"id");

$substring = "Wedding Services"; 
if (strpos($cat, $substring) !== false) {
$bus="Weddings";
   mysql_query("UPDATE tblindustries SET main_category='$bus' WHERE id='$id'");
   echo "found<br />";
} else {
   // Nope, can't find '$substring' in '$string';
   // ... do something here?
}

$i++;
}*/

?>
</table>

</div>

<!-- -->



<!-- -->



</div>


<?php include 'footer.php' ?>
