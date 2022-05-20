<?php
	


//db vars

$dbuser ="channels_city";
$dbpass =  "city123";
$dbname =  "channels_city"; //"city";
$dbhost = "localhost";



$con = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname, $con);



$result = mysql_query("SELECT * FROM city ");
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
$city=mysql_result($result,$i,"city");

$replace_and=str_replace("&","and","$city");

echo $id."<br>";

mysql_query("UPDATE city SET city='$replace_and' WHERE id='$id'");


//ysql_close($con1);



$i++;
}




//mysql_close($con);

?>
