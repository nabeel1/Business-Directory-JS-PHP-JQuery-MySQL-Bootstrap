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



$result = mysql_query("SELECT * FROM city ");
$num_rows=mysql_num_rows($result);

echo "<h1> Sucessfully Uploaded Following Rows </h1>";
$i=0;
while ($i<$num_rows)
{
$id=mysql_result($result,$i,"id");
$city=mysql_result($result,$i,"city");

$title=$city." business directory, Search & add free ".$city." Business Listings";

$meta_keyword="businesses in ".$city.", ".$city." directory, ".$city." business, ".$city."  business listings, ".$city." companies directory";

$meta_desc=$city." Business Directory is place where you can find & add businesses of ".$city.". Search and read online local bussinesses, listings and company directories.";

$cdesc="<b>Welcome to ".$city." business directory and guide</b>. Find ".$city." businesses at your local community portal of ".$_SERVER['SERVER_NAME'].". Become a member and add your local business for free.";

echo $id."<br>";

mysql_query("UPDATE city SET title='$title', mdesc='$meta_desc', keyword='$meta_keyword', cdesc='$cdesc' WHERE id='$id'");


//ysql_close($con1);



$i++;
}




//mysql_close($con);

?>
