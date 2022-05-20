<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >


<table align="center">

<?php

$city1=$_REQUEST['city1'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$cdesc=$_REQUEST['cdesc'];
$title=$_REQUEST['title'];
$mdesc=$_REQUEST['mdesc'];
$keyword=$_REQUEST['keyword'];

$city_len=strlen($city);
$cdesc_len=strlen($cdesc);

if($city_len=="" or $cdesc_len=="" or $state=="-1")
{
echo "<font size='+2' color='#009900'> Please Fill All * Field</font>";
}
else
{
$res=mysql_query("SELECT * FROM state WHERE state='$state'");
$state_id=mysql_result($res,0,"id");

//mysql_query("INSERT INTO city (city,state_id,state,title,mdesc,keyword,cdesc) VALUES ('$city','$state_id','$state','$title','$mdesc','$keyword','$cdesc')");

mysql_query("UPDATE city SET city='$city' , state_id='$state_id' ,state='$state' , title='$title' , mdesc='$mdesc',keyword='$keyword' ,cdesc='$cdesc' WHERE city='$city1' ");

echo "<font size='+2' color='#009900'> City/Town Added Sucessfully </font>";
}
?>
</table>
<!-- -->

<br />
<a href="edit-city.php">GO Back</a>


</div>


<?php include '../footer.php' ?>
