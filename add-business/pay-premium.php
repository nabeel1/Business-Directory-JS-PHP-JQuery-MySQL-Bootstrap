<?php include 'header.php';?>
<?php // include 'leftbar.php';?>
<!-- Div for slider show -->



<!-- -->


<div id="main" style=" height:900px; width:290px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:4px; top:216px; float:left; background-color:#fff;" >


<h3>Which listing is best for me?</h3>

<table width="280px">
<tr bgcolor="#32A4D5">
<td><font size="+1" color="#FFFFFF">Top Spot listing (£40 per month)</font></td>
</tr>

<tr bgcolor="#F0F0F0">
<td>
All of the features of a Free and Premium listing, plus:
<ul type="square">
<li><b>Your listing appears above all Free and Premium listings</b></li>
<br />
</ul>
</td>
</tr>
</table>

<br />
<br />


<table width="280px">
<tr bgcolor="#40AB05">
<td><font size="+1" color="#FFFFFF">Premium listing (£35 per month)</font></td>
</tr>

<tr bgcolor="#F0F0F0">
<td>
All of the features of a free listing, plus:
<ul type="square">
<li>Enter an unlimited business description</li>
<li>Add your business logo and pictures</li>
<li>Include a promotional video</li>
<li>Present your business with a slideshow</li>
<li>List your business in 4 categories</li>
<li>Add a link to your website</li>
<br />
</ul>
</td>
</tr>
</table>

<br />
<br />

<table width="280px">
<tr bgcolor="#383AB1">
<td><font size="+1" color="#FFFFFF">Free listing</font></td>
</tr>

<tr bgcolor="#F0F0F0">
<td>
<ul type="square">
<li>Display your business name</li>
<li>Display your business address</li>
<li>Display your telephone numbers</li>
<li>List your business in 1 category</li>
<li>People can add reviews of your business</li>
<br />
</ul>
</td>
</tr>
</table>




</div>

<!-- -->


<div id="main" style=" height:900px; width:450px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:300px; top:216px; float:left; background-color:#EEEEEE;" >

<?php
$bid=$_REQUEST['bid'];
?>

<center><h3><font color="#32A4D5">PAY NOW THEN COMEPLETE YOUR FURTHER BUSINESS INFORMATION </font></h3></center>


<table align="center" width="430px">

<tr height="125px">
<td><font size="+1" color="#383AB1"><b>Buy One Month MemberShip</b></font> <br /><font color="40AB05">(£35 Per Month)</font></td>
<td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="centerbodyshop@yahoo.co.uk">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="amount" value="35.00">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="0.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="return" value="http://www.workers2u.com/basic-tradesman-pro?bid=<?php echo $bid; ?>&m=<?php echo "1"; ?>">
<input type="hidden" name="cancel_return" value="http://www.workers2u.com/tradesman-upgrade-account.php">

<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</td>



<tr height="125px">
<td><font size="+1" color="#383AB1"><b>Buy SIX Month MemberShip</b></font> <br /><font color="40AB05">(£180 for six month)</font></td>
<td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="centerbodyshop@yahoo.co.uk">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="amount" value="180.00">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="0.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="return" value="http://www.workers2u.com/basic-tradesman-pro?bid=<?php echo $bid; ?>&m=<?php echo "6"; ?>">
<input type="hidden" name="cancel_return" value="http://www.workers2u.com/tradesman-upgrade-account.php">

<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</td>


</table>








</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
