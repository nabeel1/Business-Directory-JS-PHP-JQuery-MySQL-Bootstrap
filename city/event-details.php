<?php include 'event-header.php';?>
<?php include 'photo-leftbar.php';?>



<div id="main" style=" height:1870px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff; " >

<table>
<tr>
<td><h2><font color="#000000">Upcoming Events in <?php echo $c; ?></font></h2></td> 

<td align="right"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
if(@$_SESSION['fname']!=""){
echo "<a href='../../../user/add-event.php'><img src='../../img/Add-events.png' /></a>";
}else{
echo "<a href='../../../login.php'><img src='../../img/Add-events.png' /></a>";
}
?>
</td>
</tr>
</table>


<!-- -->

<table>
<tr><td>

<table bgcolor="#32A4D5" width="220px" height="250px" >
<form id="register" method="post" action="../../search-event.php?c=<?php echo $c; ?>">

<tr height="30px">
<td><font color="#FFFFFF" size="+1"><b>City:</b></font></td>
<td><input type="text" name="city1" id="city1" value="<?php echo $c; ?>" />
</td>
</tr>

<tr height="30px">
<td><font color="#FFFFFF" size="+1"><b>Start: </b></font></td>
<td><input type="text" name="datepicker" id="datepicker"> </td>
</td>
</tr>

<tr height="30px">
<td><font color="#FFFFFF" size="+1"><b>Until: </b></font></td>
<td><input type="text" name="datepicker1" id="datepicker1"> 
</td>
</tr>


<tr height="30px">
<td><font color="#FFFFFF" size="+1"><b>Event:</b></font></td>
<td>


<select name="category" id="category">
<option value="all" >ALL EVENTS</option>
							<option value="Art, Culture, &amp; Exhibitions" >Art, Culture, &amp; Exhibitions</option> 
								<option value="Business Networking" >Business Networking</option> 
								<option value="Cinemas &amp; Films" >Cinemas &amp; Films</option> 
								<option value="Dance, Clubbing &amp; Parties" >Dance, Clubbing &amp; Parties</option> 
								<option value="Festivals" >Festivals</option> 
								<option value="Music" >Music</option> 
								<option value="Food &amp; Drink" >Food &amp; Drink</option> 
								<option value="Walks" >Walks</option> 
								<option value="Theatre &amp; Comedy" >Theatre &amp; Comedy</option> 
								<option value="Fairs &amp; Markets" >Fairs &amp; Markets</option> 
								<option value="Sporting Events" >Sporting Events</option> 
								<option value="Lectures &amp; Education" >Lectures &amp; Education</option> 
								<option value="Kids &amp; Family" >Kids &amp; Family</option> 
</select>
</td>
</tr>


<tr valign="top"><td></td><td>
<input name="submit" type="submit" 
 style="background-color: #CCFFFF; 
 border-top: 2px solid #5f6c4d; 
 border-right: 2px solid #000000; 
 border-bottom: 2px solid #000000; 
 border-left: 2px solid #5f6c4d;
 width: 80px; height: 24px;
 font-weight: bold;" value="Search" />
</td>
</tr>
</form>
</table>


</td>
<td>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal main */
google_ad_slot = "6043445755";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</td>
</tr>
</table>

<h3><font color="F4850F">New Local <?php echo $c; ?> Events</font></h3>


<?php
$i=0;
while($i<$num_rows)
{
$start=mysql_result($resp,$i,"start");
$end=mysql_result($resp,$i,"end");
$event_name=mysql_result($resp,$i,"event_name");
$event_desc=mysql_result($resp,$i,"event_desc");
$city1=mysql_result($resp,$i,"city");
$contact_name=mysql_result($resp,$i,"contact_name");
$contact_num=mysql_result($resp,$i,"contact_num");
$category=mysql_result($resp,$i,"category");
$image_url=mysql_result($resp,$i,"image_url");
$eid=mysql_result($resp,$i,"id");
$start1=date("d M Y", $start);
$end1=date("d M Y", $end);
?>

<table bgcolor="#F5FBFF">
<tr valign="top">
<td>
<a href="../eid/<?php echo $eid; ?>/c/<?php echo $city_rep; ?>"><b><font size="+1"><?php echo $event_name; ?></font></b></a><br />
<?php echo substr($event_desc,0,135)."..."; ?><br />

<font size="-1" color="#AAAAAA">Start Date:</font>  <?php echo $start1; ?>  &nbsp;&nbsp; <font size="-1" color="#AAAAAA"> until: </font> <?php echo $end1;?> &nbsp;&nbsp; 
<a href="../eid/<?php echo $eid; ?>/c/<?php echo $city_rep; ?>"><img src="../../img/business-fulldetails.gif" /></a>
</td>
<td><img src="../../../resize-pro-pic/<?php echo $image_url; ?>" alt="" /></td>
</tr>
</table>


<?php
$i++;
}
?>


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

<br /><br />

<?php echo $mdesc;?> It's great chance for you people to promote your upcoming events by following easy steps.

     <h3>How to share upcoming latest event of <?php echo $c;?> different area and town</h3>
     
     <ul>
     <li> <a href="../../login.php">Login</a> or <a href="../../register.php">register</a> now</li>
     <li>Go to member area after login</li>
     <li>Click on Add event button</li>
     <li>Share upcoming events of <?php echo $c;?> different area</li>
     <li>Your Events will appear after our admin approve</li>
     </ul>


</div>

<?php include 'events-rightbar.php';?>

<?php include 'footer-photos.php' ?>
