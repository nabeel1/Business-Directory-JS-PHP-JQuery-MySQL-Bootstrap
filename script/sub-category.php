<?php
	


//db vars

$dbuser = "channels_city";
$dbpass = "city123";
$dbname = "channels_city";
$dbhost = "localhost";



$con = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname, $con);



$result = mysql_query("SELECT * FROM tblindustries ");
$num_rows=mysql_num_rows($result);
//mysql_close($con);
/*
$dbuser1 = "yasrashi_local";
$dbpass1 = "local123";
$dbname1 = "yasrashi_city";
$dbhost1 = "4mylocal.co.uk";

$status=0;
$paid="free";
$image_url="no-logo.jpg";

$con1 = mysql_connect($dbhost1,$dbuser1,$dbpass1);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname1, $con1);
*/
echo "<h1> Sucessfully Uploaded Following Rows </h1>";
$i=0;
while ($i<$num_rows)
{
$id=mysql_result($result,$i,"id");
$category=mysql_result($result,$i,"sIndustryName");
$title=$category;
$meta_keyword=$category;
$meta_desc1="";
$meta_desc1=$category;

$len=strlen($meta_desc1);

echo $id."<br>".$title."<br>".$meta_keyword."<br>".$meta_desc1."<br>".$len;



mysql_query("UPDATE tblindustries SET mtitle='$title' , mkeyword='$meta_keyword', mdesc='$meta_desc1'   WHERE id='$id'");


//ysql_close($con1);



$i++;
}




//mysql_close($con);

?>
