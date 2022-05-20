<?php

$con = mysql_connect("localhost","channels_city","city123") or die(mysql_error());
mysql_select_db("channels_city")  or die(mysql_error());;

$query = "select * from `fulldata` where `id`>1062295 and `id`<1062296 ";
$count=0;
$res = mysql_query($query) or die(mysql_error);
while ($row=mysql_fetch_array($res))
{
	$row['County'] = str_replace("'","\'",$row['County']);
	$row['CompanyName'] = str_replace("'","\'",$row['CompanyName']);
	$row['Address'] = str_replace("'","\'",$row['Address']);
	$row['Address2'] = str_replace("'","\'",$row['Address2']);
	$row['Locality'] = str_replace("'","\'",$row['Locality']);
	$row['Town'] = str_replace("'","\'",$row['Town']);
	$row['Postcode'] = str_replace("'","\'",$row['Postcode']);
	$row['BusinessType'] = str_replace("'","\'",$row['BusinessType']);
	$row['TelephoneNumber'] = str_replace("'","\'",$row['TelephoneNumber']);
	$row['FaxNumber'] = str_replace("'","\'",$row['FaxNumber']);
	$row['WebsiteAddress'] = str_replace("'","\'",$row['WebsiteAddress']);
	$row['EmailAddresses'] = str_replace("'","\'",$row['EmailAddresses']);
	
	$town=$row['Town'];
	$country=$row['County'];
	
	$CompanyName=$row['CompanyName'];
	$sBusinessName=$row['BusinessType'];
	$sAddress=$row['Address'];
	$sAddress2=$row['Address2'];
	$sPostcode=$row['Postcode'];
	$sTelephone=$row['TelephoneNumber'];
	$sMobile=" ";
	$sFax=$row['FaxNumber'];
	$sURL=$row['WebsiteAddress'];
	$tDescription=" ";
	$created="0000-00-00 00:00:00";
	$modified="0000-00-00 00:00:00";
	$dSubStartDate="0000-00-00";
	$dSubEndDate="0000-00-00";
	$sContactEmail=$row['EmailAddresses'];
	
	
	
	//echo $row['CompanyName']."<br>";
	$query = "select `id` from `state` where `state`='".$row['County']."'";
	$res2 = mysql_query($query) or die(mysql_error);
	//exit();
	if (mysql_affected_rows()==0)
	{
		$query = "Insert into `state` (`state`) values('".$row['County']."')";
		mysql_query($query) or die(mysql_error);	
		$cntryid = mysql_insert_id($con);
		echo "after adding id is: ".$cntryid;
	}
	else
	{
		
		$temp = mysql_fetch_array($res2);
		$cntryid = $temp['id'];
		echo "waise he";
	}

	$query = "select `id` from `city` where `city`='".$row['Town']."'";
	$res2 = mysql_query($query) or die(mysql_error);
	if (mysql_affected_rows()==0)
	{
		$query = "Insert into `city` (`city`,`state_id`,`state`) values('$town','$cntryid','$country')";
		mysql_query($query) or die(mysql_error);
		$cityid =  mysql_insert_id($con);
		echo "adding new cities".$cityid;
	}
	else
	{
		$temp =  mysql_fetch_array($res2);
		$cityid = $temp['id'];
		echo "city already added";
	}
	
	$query = "select `id` from `tblindustries` where `sIndustryName`='".$row['BusinessType']."'";
	$res2 = mysql_query($query) or die(mysql_error);
	if (mysql_affected_rows()==0)
	{$uncategorized="uncategorized";
		$query = "insert into `tblindustries` (`sIndustryName`,`main_category`) values('".$row['BusinessType']."','$uncategorized')";
		mysql_query($query) or die(mysql_error);
		$indid =  mysql_insert_id($con);
	echo " new business added";
	}
	else
	{
		$temp = mysql_fetch_array($res2);
		$indid = $temp['id'];
		echo "business already exist";
	}
	//echo "<br>$cntryid<br>$cityid<br>$indid";

$status=0;
$paid="free";
$image_url="no-logo.jpg";
$userid=0;
$temp_title1=explode(' ',$sBusinessName);
$temp_title2=$temp_title1[count($temp_title1)-1];

$meta_title=$CompanyName." in ".$town." ,".$sBusinessName." in ".$town;

$meta_des=$CompanyName." is featured in City Business ".$town.".Location of ".$CompanyName." is ".$sAddress." ".$sAddress2." ".$sPostcode;

$meta_keyword=$CompanyName." in ".$town.",".$town." ".$CompanyName.",".$sBusinessName." in ".$town.",".$town." ".$sBusinessName.",".$temp_title1[0]." ".$town.",".$temp_title2." ".$town.",".$temp_title1[0]." in ".$town.",".$temp_title2." in ".$town;

$tDescription=$CompanyName." is located in ".$sAddress." ".$sAddress2." , ".$sPostcode;

mysql_query("INSERT INTO tblbusinesses (sBusinessName,iIndustry,sAddress,sAddress2,iCity,sPostcode,sTelephone,sMobile,sFax,sContactEmail,sUrl,tDescription,created,modified,iStatus,iPaid,iFeatured,dSubStartDate,dSubEndDate,image_url,iUserId,sMetaTitle,sMetaKeywords,sMetaDescription) VALUES ('$CompanyName','$indid','$sAddress','$sAddress2','$cityid','$sPostcode','$sTelephone','$sMobile','$sFax','$sContactEmail','$sURL','$tDescription','$created','$modified','$status','$paid','$paid','$dSubStartDate','$dSubEndDate','$image_url','$userid','$meta_title','$meta_keyword','$meta_des')");

/*	
	$query = "insert into `tblbusinesses` (`iUserId`,`sBusinessName`,`sMetaTitle`,`sMetaKeywords`,`sMetaDescription`,`iIndustry`,`sAddress`,`sAddress2`,`iCity`,`sPostcode`,`sTelephone`,`sFax`,`sContactEmail`,`sURL`,`iStatus`,`iPaid`,`iFeatured`) values('16','".$row['CompanyName']."','".$row['CompanyName']." ".$row['Town']." ".$row['County']." Find Business Jobs Vacancies Properties Events Local Reviews | Uk Business Directory','".$row['CompanyName'].",".$row['Town'].",".$row['County'].",businessdirectory,links,uk,buy,about,find,unitedkingdom,directories,businesses,company,companies,information,England,accommodation,services,employment,jobs,hotels,industrial,supplies,advertising,manufacture,maps,news,events,property,rent,sell,travel&tourism,Vacancies,events,Opportunities,Review,free listing,free ads','Find jobs vacancies offers business listing ads reviews in ".$row['CompanyName'].",".$row['Town'].",".$row['County']."','".$indid."','".$row['Address']."','".$row['Address2'].",".$row['Locality']."','".$cityid."','".$row['Postcode']."','".$row['TelephoneNumber']."','".$row['FaxNumber']."','".$row['EmailAddresses']."','".$row['WebsiteAddress']."','1','0','0')";
	mysql_query($query) or die(mysql_error());
	//exit();
	$count++;
	echo "[".$count."]<br>";
	*/
}
?>


