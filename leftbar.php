

<div id="leftbar" style=" height:1250px; width:220px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:720px; top:100px; float:left; background-color:#F0F0F0;" >

<br />
<div style="height:220px; width:200px;border-style:solid;border-color:#26B4D9;  border-width:0px; position:absolute; left:10px;">


<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal 200&#42;200 */
google_ad_slot = "2344511714";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

	 <!-- 
<marquee behavior="scroll"direction="up" scrollamount="1"><center><b>News And Event</b><br /> 

<?php /*
$res_show=mysql_query("SELECT message FROM news WHERE id='1' ");
$num_rows_show=MYSQL_NUM_ROWS($res_show);
$i=0;
while($i<$num_rows_show)
{
$message=mysql_result($res_show,$i,"message");
echo $message;
$i++;
}
*/?>

</center></marquee> -->

</div>




<div style="height:600px; width:220px; position:absolute; top:280px; left:0px; border-style:solid;border-color:#26B4D9;  border-width:0px;">

<center><font size="+1" color="#60D314"><a href="allcities.php"><img src="img/back-Arrow-icon.png" />Browse A-Z of areas</a></font></center><br /><br />

<center><font size="+1" color="#60D314">Featured Areas</font></center><br />
<table>
<tr>
<td>
<font size="+1" color="#000000"><b>England</b></font><br />
<?php
$res=mysql_query("SELECT id,city FROM city WHERE state='england' ORDER BY id ASC LIMIT 0,25");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$city_rep=str_replace(' ','+',$city);
echo "<a href='city/$city_rep'>$city</a><br />";
$i++;
}
?>
<br />
<font size="+1" color="#000000"><b>Wales</b></font><br />
<?php
$res=mysql_query("SELECT id,city FROM city WHERE state='wales' ORDER BY id ASC LIMIT 0,25");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$city_rep=str_replace(' ','+',$city);
echo "<a href='city/$city_rep'>$city</a><br />";
$i++;
}
?>

</td>

<td>
<font size="+1" color="#000000"><b>London</b></font><br />
<?php
$res=mysql_query("SELECT id,city FROM city WHERE state='London' ORDER BY id ASC LIMIT 0,25");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$city_rep=str_replace(' ','+',$city);
echo "<a href='city/$city_rep'>$city</a><br />";
$i++;
}
?>
<font size="+1" color="#000000"><b>Scotland</b></font><br />
<?php
$res=mysql_query("SELECT id,city FROM city WHERE state='Scotland' ORDER BY id ASC LIMIT 0,25");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$city_rep=str_replace(' ','+',$city);
echo "<a href='city/$city_rep'>$city</a><br />";
$i++;
}
?>

<font size="+1" color="#000000"><b>Ireland</b></font><br />
<?php
$res=mysql_query("SELECT id,city FROM city WHERE state='Ireland' ORDER BY id ASC LIMIT 0,25");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$city_rep=str_replace(' ','+',$city);
echo "<a href='city/$city_rep'>$city</a><br />";
$i++;
}
?>
</td>

</tr>
</table>


</div>



</div>
