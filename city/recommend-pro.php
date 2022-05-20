<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:1400px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:524px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:0px; top:0px;" >

<h1>Thanks for Recommending a Business to us</h1>

<?php
$cemail=addslashes($_REQUEST['cemail']);
$cname=addslashes($_REQUEST['cname']);
$phone=addslashes($_REQUEST['cphone']);
$company=addslashes($_REQUEST['company']);
$cdesc=addslashes($_REQUEST['cdesc']);
$rdesc=addslashes($_REQUEST['rdesc']);

$subject="New Business Request";

$senderemail="From: Recommend@".$_SERVER['SERVER_NAME'];

$message="New Business Requested Generated \n Submitted Email".$cemail."\nCompany Name: ".$company."\n Contact Name: ".$cdesc."\n Contact Phone".$phone."\n Reason: ".$rdesc;

 @mail("nabeel.nasar1@gmail.com", "Subject: $subject", $message, $senderemail );

?>


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

<td><font color="#EE0000">Thanks for submitting, we Will See Your Request within 24 hour and reply to you accordingly on your Email address.</font>

</td>
</tr>
</table>





</div>

<!-- -->
















</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
