<?php include 'pay-premium-header.php';?>
<?php  include 'leftbar.php';?>
<!-- Div for slider show -->


<div id="main" style=" height:1050px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#F5FBFF;" >

<?php
$bid=$_REQUEST['bid'];

$resb=mysql_query("SELECT * FROM tblbusinesses WHERE id='$bid'");
$num_rows_b=mysql_num_rows($resb);

$name=mysql_result($resb,0,"sBusinessName");
$phone=mysql_result($resb,0,"sTelephone");
$paid=mysql_result($resb,0,"iPaid");
$image_url=mysql_result($resb,0,"image_url");
$id=mysql_result($resb,0,"id");
$icity=mysql_result($resb,0,"iCity");
$iIndustry=mysql_result($resb,0,"iIndustry");
$iIndustry2=mysql_result($resb,0,"iIndustry2");
$iIndustry3=mysql_result($resb,0,"iIndustry3");
$iIndustry4=mysql_result($resb,0,"iIndustry4");
$sAddress=mysql_result($resb,0,"sAddress");
$sAddress2=mysql_result($resb,0,"sAddress2");
$sPostcode=mysql_result($resb,0,"sPostcode");
$sMobile=mysql_result($resb,0,"sMobile");
$sFax=mysql_result($resb,0,"sFax");
$sContactEmail=mysql_result($resb,0,"sContactEmail");
$tDescription=mysql_result($resb,0,"tDescription");
$sUrl=mysql_result($resb,0,"sUrl");
$id=mysql_result($resb,0,"id");
$id=mysql_result($resb,0,"id");
$cname=mysql_result($resb,0,"cname");
$video=mysql_result($resb,0,"video");

@$c_res=mysql_query("SELECT id,city FROM city WHERE id='$icity' ");
@$c_name=mysql_result($c_res,0,"city");
@$city_name_rep=str_replace(' ','+',$c_name);


?>

<center><h2><font color="#32A4D5">Buy Membership for: <?php echo $name; ?>  </font></h2></center>


<table align="center" width="540px">

<tr height="125px">
<td><font size="+1" color="#383AB1"><b>Buy Permanent Membership (One time cost)</b></font> <br /><font color="40AB05">(£39.90 one time cost)</font></td>
<td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="paypal@redmutex.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="amount" value="39.90">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="0.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="return" value="">
<input type="hidden" name="cancel_return" value="">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</td>



<tr height="125px">
<td><font size="+1" color="#383AB1"><b>Buy One Year Membership</b></font> <br /><font color="40AB05">(£14 per year)</font></td>
<td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="paypal@redmutex.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="amount" value="14.00">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="0.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="return" value="">
<input type="hidden" name="cancel_return" value="">

<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</td>


</table>



<font color="#FF0000"><b><u>Important:</u></b></font> <font color="#000000"><?php echo $name; ?></font> <font color="#0000FF">Business will be Upgraded after completion of payment process.<br /> You will notify on email address after our admin approve your upgradation request within 5 working hours.</font>
<br /><br />

<b>Follow simple step to update your information after approval</b>

<ul>
<li>Login to <?php echo $_SERVER['SERVER_NAME'];?>.</li>
<li>Go to member area.</li>
<li>Click on advance tab in front of business.</li>
<li>Update information.</li>
</ul>

<br />

<b>Benefit of upgradation</b>

<ul>
<li>Add your business logo and pictures.</li>
<li>Include a promotional video.</li>
<li>Present your business with a slideshow.</li>
<li>List your business in 4 categories.</li>
<li>Add a link to your website.</li>
<li>Your listing appears In All City Pages.</li>
<li>Enter an unlimited business description.</li>
<li><b>Your listing appear on all local <?php echo $c_name;?> pages. </b></li>
</ul>

<br /><br /> 
You can always see your listing on: <a href="../<?php echo $city_name_rep;?>/<?php echo $bid; ?>">http://<?php echo $_SERVER['HTTP_HOST']; ?>/<?php echo $city_name_rep;?>/<?php echo $bid; ?></a> 


<br /><br /> 
If you do not receive approval email from our admin then contact us at: <b>webmaster@<?php echo $_SERVER['SERVER_NAME'];?></b>

 <br /> <br />

<img src="img/Gantt-Chart-Guarantee.png" /> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="img/satguarantee_seal_white.png" />

<!-- upgraded -->
<?php

 $today = mktime(0,0,0,date("m"),date("d"),date("Y"));
 $tom = mktime(0,0,0,date("m"),date("d"),date("Y")+1);
 $premium="premium";

//mysql_query("UPDATE tblbusinesses SET dSubEndDate='$tom',iPaid='$premium',iFeatured='$premium',dSubStartDate='$today' WHERE id='$bid' ");


?>

<!-- email to admin for upgradtion  -->
<?php	
	$subject="Upgraded Paid business request".$bid;
	$message="upgrdaed business id active business id: ".$bid;
	$senderemail="From ".$_SERVER['SERVER_NAME']."@".$_SERVER['SERVER_NAME'];



                   @mail("nabeel.nasar1@gmail.com", "Subject: $subject", $message, $senderemail);

?>


<!--  is ko mat tang kero --->

</div>

<?php include 'rightbar.php';?>
<?php include 'footer.php' ?>
