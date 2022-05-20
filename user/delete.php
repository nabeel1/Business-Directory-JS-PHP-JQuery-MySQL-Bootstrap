<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="main" style=" height:900px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:540px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:10px; top:20px;" >

<table bgcolor="#F5FBFF">

<tr valign="top">

<td>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* blue add 336&#42;280 */
google_ad_slot = "2674535903";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</td>

<td>
<h2>Your Listing Deleted.</h2>
<a href="index.php">Go Back to Member Area.</a>
</td>
</tr>
</table>

<center><script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal 468&#42;60 */
google_ad_slot = "8481448804";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>


<!-- -->



<?php
$d=$_REQUEST['d'];
$uid=$_SESSION['uid'];
mysql_query("DELETE FROM tblbusinesses WHERE id='$d' AND iUserId='$uid'");
?>


</div>

<!-- -->
















</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
