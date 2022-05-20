<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="main" style=" height:900px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:216px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:540px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:10px; top:20px;" >



<br />

<center><h1><font color="#32A4D5">ADD PROCESSING !!</font></h1></center>


<table align="center" width="430px">
<tr><td>
<?php
$bid1=strip_tags(addslashes($_REQUEST['bid1']));
$type=strip_tags(addslashes($_REQUEST['type']));
$m=strip_tags(addslashes($_REQUEST['update']));

 $today = mktime(0,0,0,date("m"),date("d"),date("Y"));
 $tom = mktime(0,0,0,date("m")+$m,date("d"),date("Y"));


if($type=="top" or $type=="premium")
{
mysql_query("UPDATE tblbusinesses SET iPaid='$type' , iFeatured='$type' , dSubStartDate='$today' , dSubEndDate='$tom' WHERE id='$bid1' ");
}else{
mysql_query("UPDATE tblbusinesses SET iPaid='premium' , iFeatured='premium' , dSubStartDate='$today' , dSubEndDate='$tom' WHERE id='$bid1' ");
}





?>
</td></tr>
</table>



<br />
<a href="select-bus.php">GO Back</a>



</div>

<!-- -->











</div>



<?php include '../footer.php' ?>
