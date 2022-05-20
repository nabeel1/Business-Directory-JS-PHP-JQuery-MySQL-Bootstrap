

<?php
	


//db vars

$dbuser = "yasrashi_local";
$dbpass = "local123";
$dbname = "yasrashi_city";
$dbhost = "4mylocal.co.uk";



$con = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname, $con);


$result = mysql_query("SELECT * FROM tblbusinesses WHERE id>'101' AND id<'201' ");
$num_rows=mysql_num_rows($result);
mysql_close($con);
$i=0;
while ($i<$num_rows)
{
$sBusinessName=mysql_result($result,$i,"sBusinessName");
$id=mysql_result($result,$i,"id");
$iIndustry=mysql_result($result,$i,"iIndustry");
$sAddress=mysql_result($result,$i,"sAddress");
$sAddress2=mysql_result($result,$i,"sAddress2");
$iCity=mysql_result($result,$i,"iCity");
$sPostcode=mysql_result($result,$i,"sPostcode");
$sTelephone=mysql_result($result,$i,"sTelephone");
$sMobile=mysql_result($result,$i,"sMobile");
$sFax=mysql_result($result,$i,"sFax");
$sURL=mysql_result($result,$i,"sURL");
$sContactEmail=mysql_result($result,$i,"sContactEmail");
$tDescription=mysql_result($result,$i,"tDescription");
$created=mysql_result($result,$i,"created");
$modified=mysql_result($result,$i,"modified");
$dSubStartDate=mysql_result($result,$i,"dSubStartDate");
$dSubEndDate=mysql_result($result,$i,"dSubEndDate");

echo $id;
/*
$dbuser1 = "yasrashi_local";
$dbpass1 = "local123";
$dbname1 = "yasrashi_city";
$dbhost1 = "4mylocal.co.uk";

$status=0;
$paid="free";
$image_url="no-logo.jpg";

$con1 = mysql_connect($dbhost1,$dbuser1,$dbpass1);
if (!$con1)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname1, $con1);



mysql_query("INSERT INTO tblbusinesses (sBusinessName,id,iIndustry,sAddress,sAddress2,iCity,sPostcode,sTelephone,sMobile,sFax,sContactEmail,sUrl,tDescription,created,modified,iStatus,iPaid,iFeatured,dSubStartDate,dSubEndDate,image_url) VALUES ('$sBusinessName','$id','$iIndustry','$sAddress','$sAddress2','$iCity','$sPostcode','$sTelephone','$sMobile','$sFax','$sContactEmail','$sURL','$tDescription','$created','$modified','$status','$paid','$paid','$dSubStartDate','$dSubEndDate','$image_url')");

mysql_close($con1);

*/

$i++;
}





//mysql_close($con);

?>
