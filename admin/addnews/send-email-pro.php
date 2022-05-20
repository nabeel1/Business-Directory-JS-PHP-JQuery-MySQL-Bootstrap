<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >


<table align="center">

<?php


$message=$_REQUEST['message'];

$message_len=strlen($message);

if($message_len!="")
{
mysql_query("UPDATE news SET message='$message' WHERE id='1'");
echo "<font size='+2' color='#009900'> News Sucessfully Added </font>";
}
else
{
echo "<font size='+2' color='#009900'> News Not Added Please Go Back</font>";
}
?>
</table>
<!-- -->

<br />
<a href="send-email.php">GO Back</a>


</div>


<?php include '../footer.php' ?>
