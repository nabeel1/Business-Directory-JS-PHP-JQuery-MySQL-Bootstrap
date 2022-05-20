<?php include 'header-allcities.php';?>

<!-- Div for slider show -->



<!-- -->


<div id="leftbar" style=" height:11198px; width:710px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:10px; top:100px; float:left; background-color:#ffffff;" >

<?php

$alphabets = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

for($i = 0; $i < 26; $i++)
	{
		echo "&nbsp;<font size='+1'><a href='#$alphabets[$i]'>$alphabets[$i]</a></font>&nbsp;&nbsp;";
	}
echo "<br />";
?>

<br />
<table width="680px" bgcolor="#0E94CE">
<tr>
<td>
<font color="#FFFFFF" size="+1">A-Z List of Areas </font>
</td>
</tr>
</table>

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
&nbsp;&nbsp;
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


<?php

 $sql=mysql_query("SELECT SUBSTRING(city, 1, 1) AS letter, city, id FROM city  ORDER BY city ASC ");
$num_rows=mysql_num_rows($sql);




for($i=0; $i<26; $i++)
{
echo "<table><tr><td> <a name='$alphabets[$i]'><h1>$alphabets[$i]</h1></a></td>";
$j=0;
	while($j<$num_rows)
	{
	$m=mysql_result($sql,$j,"letter");
		if($alphabets[$i]==$m)
		{
		$c=mysql_result($sql,$j,"city");
		$city_rep=str_replace(' ','+',$c);
		echo "<td  width='300px'><a href='city/$city_rep'><font size='+1'>$c</font></a></td>";
		if($j%4==0)
		{
		echo "</tr><tr>";
		}
		}

		$j++;
	}
   echo "</tr></table><hr>";
}


?>

<!-- -->



</div>

<?php include 'leftbar.php';?>
<?php include 'footer-allcities.php' ?>
