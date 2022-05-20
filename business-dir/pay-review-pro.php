<?php include 'pay-detail-header.php';?>
<?php include 'pay-rightbar.php';?>
<!-- Div for slider show -->

<?php
$desc=strip_tags(addslashes($_POST['desc']));
$c=strip_tags(addslashes($_POST['c']));
$bid=strip_tags(addslashes($_POST['bid']));

?>

<!-- -->


<div id="main" style=" height:2504px; width:750px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:190px; top:146px; float:left; background-color:#ffffff;" >

<br />

<h1><font color="#000000"> <?php echo $sBusinessName; ?></font></h1>


<table width="728px" bgcolor="#F5FBFF">
<tr>
<td>
<p><font color="#40AB05" size="+2">Your Comment Is Succesfully ADDED !!<a href="../<?php echo $city_rep;?>/<?php echo $bid;?>">Click Here to Go Back</a></font><br /><br />
<?php
$uid=$_SESSION['uid'];
mysql_query("INSERT INTO reviews (uid,bid,comment) VALUES ('$uid','$bid','$desc')");
?>
</p>
</td>
</tr>

<tr><td>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal blue 336 */
google_ad_slot = "0032584212";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</td></tr>

</table>



<!-- -->



</div>


<?php  include 'pay-business-footer.php' ?>
