<?php include 'header.php';?>
<?php  include 'leftbar.php';?>
<!-- Div for slider show -->



<!-- -->


<!-- -->


<div id="main" style=" height:900px; width:550px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:200px; top:216px; float:left; background-color:#EEEEEE;" >

<?php
$bid=addslashes($_REQUEST['bid']);
$m=addslashes($_REQUEST['m']);
$p=addslashes($_REQUEST['p']);

$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

$next = mktime(0,0,0,date("m")+$m,date("d"),date("Y"));

if($p=="p")
{

mysql_query("UPDATE tblbusinesses SET iPaid='premium' , dSubStartDate='$today' , dSubEndDate='$next' WHERE id='$bid' ");
}

if($p=="t")
{

mysql_query("UPDATE tblbusinesses SET  dSubStartDate='$today' , dSubEndDate='$next',iPaid='top'  WHERE id='$bid' ");

}


?>

<center><h3><font color="#32A4D5">You Successfully Renew The Listing </font></h3></center>



</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
