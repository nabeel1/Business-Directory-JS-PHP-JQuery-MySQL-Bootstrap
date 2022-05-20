
<?php include 'event-header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:auto; width:550px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:200px; top:216px; float:left; background-color:#ffffff; overflow:scroll;" >

<!-- -->

<table >
<tr>
<td align="right"><a href="event-details.php?c=<?php echo $c; ?>">Go BACK</a></td>
</tr>
</table>

<br />
<center><h2><font color="40AB05">Latest Property in <?php echo $c; ?></font></h2></center>
<br />

<?php

$city=$_REQUEST['city1'];
$start=$_REQUEST['datepicker'];
$end=$_REQUEST['datepicker1'];
$category=$_REQUEST['category'];

$start_date=strtotime($start);
$end_date=strtotime($end);

if($start=="" and $end=="" and $category=="all")
{
$resp=mysql_query("SELECT * FROM event WHERE city='$city' ORDER BY id DESC");
}
elseif($start!="" and $end=="" and $category=="all"){
$resp=mysql_query("SELECT * FROM event WHERE city='$city' AND start>'$start_date' ORDER BY id DESC");
}
elseif($start=="" and $end!="" and $category=="all"){
$resp=mysql_query("SELECT * FROM event WHERE city='$city' AND end<'$end_date' ORDER BY id DESC");
}
elseif($start=="" and $end=="" and $category!="all"){
$resp=mysql_query("SELECT * FROM event WHERE city='$city' AND category='$category' ORDER BY id DESC");
}
elseif($start!="" and $end!="" and $category=="all"){
$resp=mysql_query("SELECT * FROM event WHERE city='$city' AND start>'$start_date' AND end<'$end_date' ORDER BY id DESC");
echo "1";
}
elseif($start!="" and $end!="" and $category!="all"){
$resp=mysql_query("SELECT * FROM event WHERE city='$city' AND start>'$start_date' AND end<'$end_date'  AND category='$category' ORDER BY id DESC");
}


$num_rows=MYSQL_NUM_ROWS($resp);
$i=0;
while($i<$num_rows)
{
$start1=mysql_result($resp,$i,"start");
@$start=date('m-d-Y',$start1);
$end1=mysql_result($resp,$i,"end");
@$end=date('m-d-Y',$end1);
$event_name=mysql_result($resp,$i,"event_name");
$event_desc=mysql_result($resp,$i,"event_desc");
$city1=mysql_result($resp,$i,"city");
$contact_name=mysql_result($resp,$i,"contact_name");
$contact_num=mysql_result($resp,$i,"contact_num");
$category=mysql_result($resp,$i,"category");
$image_url=mysql_result($resp,$i,"image_url");
$eid=mysql_result($resp,$i,"id");
?>

<table>
<tr valign="top">
<td><img src="../resize-pro-pic/<?php echo $image_url; ?>" alt="" /></td>
<td><b><?php echo substr($event_name,0,55)."..."; ?></b><br />Start On:  <?php echo $start; ?><br /> End On:  <?php echo $end;?> <br />
<?php echo substr($event_desc,0,135)."..."; ?><br />
<a href="full-event-details.php?c=<?php echo $c; ?>&eid=<?php echo $eid; ?>">View Full Detail</a>
</td>
</tr>
</table>

<?php
$i++;
}
?>







</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
