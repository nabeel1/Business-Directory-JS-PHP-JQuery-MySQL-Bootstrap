<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:1400px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:524px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:0px; top:0px;" >

<h1>Recommend a Business to us</h1>

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
<p>
If you know of any business in <?php echo $c; ?> that provides oustanding service or fantastic products, please let us know so that we can spread the word!</p>
<p>
We work closely with Local Businesses in <?php echo $c; ?> and raise their awareness to the local public. Simply fill out the form below or call us on ....
</p>

</td>
</tr>
</table>

<table align="center">
<form action="recommend-pro.php" method="post">
<input type="hidden" name="c" id="c" value="<?php echo $c;?>" />

<tr height="40px"><td><b><font color="red">Your Email</font></b> </td>
<td width="50px"><input type="text" id="cemail" name="cemail" size="30" ></td>
</tr>

<tr height="40px"><td><b>Company Name</b> </td>
<td width="50px"><input type="text" id="company" name="company" size="30" ></td>
</tr>

<tr height="40px"><td><b>Contact Name</b> </td>
<td width="50px"><input type="text" id="cname" name="cname" size="30" ></td>
</tr>

<tr height="40px"><td><b>Contact Number</b> </td>
<td width="50px"><input type="text" id="cphone" name="cphone" size="30" ></td>
</tr>


<tr height="40px"><td><b>Address</b> </td>
<td width="50px"><textarea name="cdesc" id="cdesc" cols="30" rows="8"></textarea></td>
</tr>

<tr height="40px"><td><b>Recommended Because</b> </td>
<td width="50px"><textarea name="rdesc" id="rdesc" cols="30" rows="8"></textarea></td>
</tr>


<tr height="40px"><td></td>
<td width="50px"><input type="submit" name="submit" value="Submit Request" /></td>
</tr>


</form>
</table>





</div>

<!-- -->
















</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
