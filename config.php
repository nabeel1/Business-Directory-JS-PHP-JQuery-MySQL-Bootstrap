<?php

$dbhost = "localhost";
$dbuser = "channels_city";
$dbpass = "city123";
$dbname = "channels_city";
	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());


@session_start(); 

//$_SESSION['uid']="";
//$_SESSION['pass']="";
//$_SESSION['value']="";


?>