<?php include 'header.php';?>
<?php include 'leftbar-1.php';?>

<!-- Div for slider show -->



<div id="main" style=" height:966px; width:458px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:290px; top:136px; float:left; background-color:#EBF3F8;" >



<?php

$bid1=addslashes($_REQUEST['bid']);

$resb=mysql_query("SELECT * FROM tblbusinesses WHERE id='$bid1'");
$num_rows_b=mysql_num_rows($resb);

$name1=mysql_result($resb,0,"sBusinessName");
$pay_type=mysql_result($resb,0,"iPaid");
$iCity_id=mysql_result($resb,0,"iCity");

$resc=mysql_query("SELECT city FROM city WHERE id='$iCity_id'");
$iCity_name=mysql_result($resc,0,"city");
@$city_name_rep=str_replace(' ','+',$iCity_name);
?>



<center><h3><font color="#32A4D5">Last Step: PAY NOW TO Active</font> <?php echo $name1; ?>  <font color="#32A4D5">Business</font></h3></center>





<table align="center" width="430px">



<?php

if($pay_type=="top")

{

?>

<tr height="125px">

<td><font size="+1" color="#383AB1"><b>Permanent Business MemberShip</b></font> <br /><font color="40AB05">(£39.90 Per Year)</font></td>

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

</tr>

<?php

}else

{

?>

<tr height="125px">

<td><font size="+1" color="#383AB1"><b>One Year Business MemberShip</b></font> <br /><font color="40AB05">(£14 Per Year)</font></td>

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
</tr>

<?php
}
?>
</table>



<font color="#FF0000"><b><u>Important:</u></b> <font color="#000000"><?php echo $name1; ?></font> Business will be active after you done with payment step.<br />For Double check You will receive your business approval email from our admin within 24 hours.

<br /><br />

After payment you can view your business at all <font color="#000000">(<?php echo $iCity_name;?>)</font> city Local Pages.<br /> And you can also see your listing always here: <br /> <br />
<a href="../<?php echo $city_name_rep;?>/<?php echo $bid1; ?>">http://<?php echo $_SERVER['HTTP_HOST']; ?>/<?php echo $city_name_rep;?>/<?php echo $bid1; ?></a> 

</font>

<br /><br /> In case if you not receive approval email from our admin then feel free to contact us at <b>webmaster@<?php echo $_SERVER['HTTP_HOST']; ?></b>



<br /> <br />



<?php echo "After approval you can edit your Business at any time by <a href='../user/index.php'>Visiting Member Area (Your Account)</a>";  ?>





<?php	

	$subject="Paid business request".$bid1;
	$message="active business id: ".$bid1;



                   @mail("nabeel.nasar1@gmail.com", "Subject: $subject",

  $message, "From: citybusinessdirectory@citybusinessdirectory.co.uk" );

?>



</div>



<?php include 'rightbar.php';?>



<?php include 'footer.php' ?>

