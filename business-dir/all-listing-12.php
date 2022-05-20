<?php include 'all-listing-header.php';?>
<?php include 'all-listing-rightbar.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:12898px; width:750px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:190px; top:146px; float:left; background-color:#ffffff; overflow:scroll;" >

<br /><br />

<a name="top"></a>

<?php

$alphabets = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

for($i = 0; $i < 26; $i++)
	{
		echo "&nbsp;<font size='+1'><a href='#$alphabets[$i]'>$alphabets[$i]</a></font>&nbsp;&nbsp;";
	}
echo "<br />";
?>

<br />
<table width="680px" bgcolor="#000000">
<tr>
<td>
<font color="#FFFFFF" size="+1">A-Z Business listing of <?php echo $c;?> </font>
</td>
</tr>
</table>
<br />



<?php
$result=mysql_query("SELECT id FROM city WHERE city='$c'");
@$cid=mysql_result($result,0,"id");

 $sql=mysql_query("SELECT SUBSTRING(sBusinessName, 1, 1) AS letter, sBusinessName, id FROM tblbusinesses WHERE iCity='$cid'  ORDER BY sBusinessName  ASC ");
$num_rows=mysql_num_rows($sql);

for($i=0; $i<26; $i++)
{
echo "<table><tr><td><a href='#top'>Go to top</a> <a name='$alphabets[$i]'><h1>$alphabets[$i]</h1></a> </td>";
$j=0;
	while($j<$num_rows)
	{
	$m=mysql_result($sql,$j,"letter");
		if($alphabets[$i]==$m)
		{
		$cname=mysql_result($sql,$j,"sBusinessName");
		$bid=mysql_result($sql,$j,"id");
		$city_rep=str_replace(' ','+',$cname);
		echo "<td  width='300px'><a href='../$c/$bid'><font size='+1'>$cname</font></a></td>";
		if($j%3==0)
		{
		echo "</tr><tr>";
		}
		}

		$j++;
	}
   echo "</tr></table><hr>";
}


?>








</div>



<?php include 'all-listing-footer.php' ?>
