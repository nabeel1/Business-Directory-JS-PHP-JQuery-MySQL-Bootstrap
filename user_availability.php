<?php include_once 'config.php'; 

//this varible contains the array of existing users
$existing_users=array('roshan','mike','jason');
//value got from the get metho
$user_name=$_POST['user_name'];
//checking weather user exists or not in $existing_users array

$res = mysql_query("SELECT * FROM user WHERE email='$user_name' ");
$no_rows=MYSQL_NUM_ROWS($res);


if ($no_rows!="")
{
 //user name is not available
 echo "no";
}
else
{
  //username available i.e. user name doesn't exists in array
  echo "yes";
}

?>