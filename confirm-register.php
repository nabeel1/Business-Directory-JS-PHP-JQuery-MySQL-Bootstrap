<?php include 'header.php';?>
<?php include 'right-bar.php';?>


<div id="leftbar" style=" height:900px; width:310px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:306px; top:100px; float:left; background-color:#ffffff;" >


<!-- Success -->

	<div class="success" style=" height:400px; width:400px; position:absolute; left:30px; top:0px;"><font color="red" size="+1">You Sucessfully Activate your Acount</font><br /><a href="login.php">Login Here To Start Submit Your Business</a> 
<?php

$id=$_REQUEST['uid'];
$c=$_REQUEST['c'];

mysql_query("UPDATE user SET status = '0' WHERE id = '$id' AND random = '$c'"); // update status

$res = mysql_query("SELECT * FROM user WHERE id='$id' "); // get username to send email
	$no_rows=MYSQL_NUM_ROWS($res);

$fname=mysql_result($res,0,"fname");
$lname=mysql_result($res,0,"lname");
$email=mysql_result($res,0,"email");
	
$subject="Your account is active in ".$_SERVER['SERVER_NAME'];
$senderemail="From: ".$_SERVER['SERVER_NAME']."@".$_SERVER['SERVER_NAME'];

$message="Dear ".$fname." ".$lname.",
\n Congraulations !! Your account is active now in ".$_SERVER['SERVER_NAME'].". Login now to start submit free following. \n\n Add your business for free.\n Add your upcoming event.\n Advertise your property for buy and sale.\n\n  To Submit Business Log on to http://".$_SERVER['SERVER_NAME']."/login.php";

                 @mail($email, "$subject", $message, $senderemail);
  
?>

<br /><br />

<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal 336&#42;280 */
google_ad_slot = "9971235220";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</div>

<!-- -->


</div>

<?php include 'leftbar.php';?>
<?php include 'footer.php' ?>
