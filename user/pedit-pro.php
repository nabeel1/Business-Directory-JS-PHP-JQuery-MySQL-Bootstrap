<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="main" style=" height:900px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:540px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:10px; top:20px;" >



<table align="center" width="430px">
<tr><td>
<?php
$bid1=strip_tags(addslashes($_REQUEST['bid1']));
$bus_name=strip_tags(addslashes($_REQUEST['bus-name']));
$cname=strip_tags(addslashes($_REQUEST['cname']));

$address=strip_tags(addslashes($_REQUEST['address']));
$address2=strip_tags(addslashes($_REQUEST['address2']));
$city=strip_tags(addslashes($_REQUEST['city']));
$pcode=strip_tags(addslashes($_REQUEST['pcode']));
$phone=strip_tags(addslashes($_REQUEST['phone']));
$mobile=strip_tags(addslashes($_REQUEST['mobile']));
$fax=strip_tags(addslashes($_REQUEST['fax']));
$email=strip_tags(addslashes($_REQUEST['email']));
$cat=strip_tags(addslashes($_REQUEST['cat']));




$bus_len=strlen($bus_name);
$add_len=strlen($address);
$pcode_len=strlen($pcode);
$phone_len=strlen($phone);
$email_len=strlen($email);

$date=date("d/m/Y");
$status=0;
$uid=$_SESSION['uid'];
if($bus_len=="" or $add_len=="" or $pcode_len=="" or $phone_len=="" or $email=="" or $cat=="-1")
{
echo "not insert here";
}else{
mysql_query("UPDATE tblbusinesses SET sBusinessName='$bus_name',iIndustry='$cat',cname='$cname',sAddress='$address',sAddress2='$address2',iCity='$city',sPostcode='$pcode',sTelephone='$phone',sMobile='$mobile',sFax='$fax',sContactEmail='$email',modified='$date' WHERE id='$bid1' AND iUserId='$uid'");

}

?>
</td></tr>
</table>



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
<h2>Your Business Edited Successfully.</h2>
<a href="index.php">Go Back to Member Area.</a> <br /> <br />

<?php
@$c_res=mysql_query("SELECT id,city FROM city WHERE id='$city' ");
@$c_name=mysql_result($c_res,0,"city");
@$c_city_rep=str_replace(' ','+',$c_name);
?>

<a href="../<?php echo $c_city_rep; ?>/<?php echo $bid1; ?>">View your Business.</a>
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





<!-- mat cheer mangana lo  --------------->

</div>

<!-- -->











</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
