

<div id="leftbar" style=" height:900px; width:180px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:760px; top:130px; float:left; background-color:#ffffff;" >


<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />

<center><a href="../business-dir/all-listing.php?c=<?php echo $c; ?>">Browse A-Z Business listing of <?php echo $c?></a></center>

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" /> <br />



<img src="../img/find-business.jpg" alt="" />


<script type="text/javascript">
function RemoveText2()
	{
	document.getElementById("bname").value="";
	}
	function RemoveText3()
	{
	document.getElementById("lcity").value="";
	}
	</script>


<table>
<form id="search" method="post" action="../search-bus.php">

<tr><td>Business Name:</td></tr>
<tr height="40px">
<td><input type="text" onclick="RemoveText2()" name="bname" id="bname" value="Name of business" /></td>
</tr>


<tr><td>Local City</td></tr>
<tr height="40px">
<td><input type="text" onclick="RemoveText3()" name="lcity" id="lcity" value="<?php echo $c;?>" /></td>
</tr>

<tr><td>
<input type="submit" value="Search" name="submit-index" />
</td></tr>
</form>
</table>


<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />


<br /><br />

<center><b>Popular <?php echo $c; ?> Searches</b></center><br />

<?php
$resm=mysql_query("SELECT category,id,logo FROM main_category ORDER BY count DESC Limit 0,13");
$num_rows_m=MYSQL_NUM_ROWS($resm);
$o=0;
while($o<$num_rows_m)
{
$cate=mysql_result($resm,$o,"category");
$cat_rep=str_replace(' ','+',$cate);
$logo=mysql_result($resm,$o,"logo");
echo "<a href='../cities/c/$city_rep/b/$cat_rep' rel='nofollow'><img src='../business-dir/img/$logo' />  $cate</a><br />";
echo "<hr color='#DDDDDD'>";
$o++;
}
?>

<br />
<br />





<!--  end -->
</div>
