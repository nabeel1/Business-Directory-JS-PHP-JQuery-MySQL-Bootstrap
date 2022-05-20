<?php include 'free-detail-header.php';?>
<?php // include 'leftbar.php';?>
<!-- Div for slider show -->

<?php
$desc=strip_tags(addslashes($_POST['desc']));
$c=strip_tags(addslashes($_POST['c']));
$bid=strip_tags(addslashes($_POST['bid']));

?>

<!-- -->


<div id="main" style=" height:2760px; width:750px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:4px; top:216px; float:left; background-color:#ffffff;" >

<br />

<h2><font color="#1497CB"> <?php echo $sBusinessName; ?></font></h2>


<table width="740px" bgcolor="#EBF3F8">
<tr>
<td>
<p><font color="#40AB05" size="+2">Your Comment Is Succesfully ADDED !!<a href="free-details.php?c=<?php echo $c;?>&bid=<?php echo $bid;?>">Click Here to Go Back</a></font><br /><br />
<?php
$uid=$_SESSION['uid'];
mysql_query("INSERT INTO reviews (uid,bid,comment) VALUES ('$uid','$bid','$desc')");
?>
</p>
</td>
</tr>
</table>

<br />


<!-- -->





<hr color="#6A876D" style="size:2px;" />


</div>

<?php include 'rightbar.php';?>

<?php  include 'business-footer.php' ?>
