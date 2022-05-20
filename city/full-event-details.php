<?php include 'full-event-detail-header.php';?>
<?php include 'full-event-leftbar.php';?>



<div id="main" style=" height:1870px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >

<h1><font color="#000000"><?php echo $event_name;?></font></h1>


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
<font size="-1" color="#AAAAAA">Start date: </font><?php echo $start1; ?> <br />
<font size="-1" color="#AAAAAA">end date: </font><?php echo $end1; ?> <br />
<font size="-1" color="#AAAAAA">Contact Name: </font><?php echo $contact_name; ?> <br />
<font size="-1" color="#AAAAAA">Contact Details: </font><?php echo $contact_num; ?> <br />
</td>

</tr>
</table>


<br />

<h2><font color="#000000">Upcoming event <?php echo $event_name;?> in <?php echo $c;?></font></h2>

<table>
<tr valign="top">
<td><img src="../../../../../resize-pro-pic/<?php echo $image_url; ?>" alt="" /></td>
<td><?php echo $event_desc; ?></td>
</tr>
</table>

<font size="-1" color="#AAAAAA">Start date: </font><?php echo $start1; ?>  &nbsp;&nbsp;&nbsp;&nbsp;
<font size="-1" color="#AAAAAA">until: </font><?php echo $end1; ?> 

<br /><br />

<h3><font color="#000000">Contact details for <?php echo $event_name;?></font></h3>

Willing to join this event? then what you are waiting for? Contact now on following detail to become part of upcoming event in your area. <br /><br />

Name: <b><?php echo $contact_name; ?></b><br />
Contact at: <b><?php echo $contact_num; ?></b><br />
Mailing Address : <b><?php echo $event_email; ?></b><br /> <br />

<i><b>Venue: <?php echo $event_address; ?></b></i>

<br /><br />

<font color="#FF0000">Please mention</font> <font color="#0000FF" size="+1"><?php echo $_SERVER['SERVER_NAME'];?> (<?php echo $c; ?>) </font> <font color="#FF0000">when contacting this event organizer. Thank you</font>

<!-- -->





</div>

<?php include 'full-events-rightbar.php';?>

<?php include 'footer-full-event-detail.php' ?>
