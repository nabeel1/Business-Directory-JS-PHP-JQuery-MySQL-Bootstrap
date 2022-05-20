<?php include 'full-prop-detail-header.php';?>
<?php include 'full-event-leftbar.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:1870px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >


<h2><?php echo $ptitle;?></h2><br />


<table bgcolor="#F5FBFF" width="550px" border="0">
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
<img src="../../../../../resize-pro-pic/<?php echo $image_url; ?>" alt="" /> <br />
<font size="-1" color="#AAAAAA">Type: </font><?php echo $category_p; ?> <br />
<font size="-1" color="#AAAAAA">Price: </font>£<?php echo $price; ?> <br />
<font size="-1" color="#AAAAAA">Contact Name: </font><?php echo $name1; ?> <br />
<font size="-1" color="#AAAAAA">Contact Details: </font><?php echo $number; ?> <br />
</td>

</tr>
</table>



<h3><font color="#000000">view property <?php echo $ptitle;?> in <?php echo $c;?></font></h3>

<?php echo $pdesc; ?><br /><br />

Address: <?php echo $address." ".$town." ".$city1." ".$code; ?><br /><br />

<table>
<tr valign="top">
<td><img src="../../../../../resize-pro-pic/<?php echo $image_url; ?>" alt="" /></td>
<td>
<font color="#0E94CE">
Type: <?php echo $category_p; ?><br />
Price: £<?php echo $price; ?> <br />
Category: <?php echo $type; ?><br />
Bedrooms: <?php echo $bedrooms; ?> <br />
Address: <?php echo $address." ".$town." ".$city1." ".$code; ?><br />
</font>
</td>
</tr>
</table>


<u>Contact Information</u><br /><br />

<b>NAME: <?php echo $name1; ?><br />
PHONE NO: <?php echo $number; ?><br />
</b>

<br /><br />

<font color="#FF0000">Please mention</font> <font color="#0000FF" size="+1"><?php echo $_SERVER['SERVER_NAME'];?> (<?php echo $c; ?>) </font> <font color="#FF0000">when contacting this property advertiser. Thank you</font>






</div>

<?php include 'full-events-rightbar.php';?>
<?php include 'footer-full-event-detail.php' ?>
