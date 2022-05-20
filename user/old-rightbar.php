

<div id="leftbar" style=" height:900px; width:180px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:760px; top:216px; float:left; background-color:#ffffff;" >




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

<center>
<a href="../city/recommend.php?c=<?php echo $c; ?>">Can't find a business?<br /> Recommend to US !!</a></center>

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />


<table height="160px" width="180px" bgcolor="#EBF3F8">
<tr valign="top"><td>
<?php
if($num_rows_s<=2)
{
@$bname=mysql_result(@$res_s,1,"sBusinessName");
@$iPaid=mysql_result(@$res_s,1,"iPaid");
@$sid=mysql_result(@$res_s,1,"id");
@$phone=mysql_result(@$res_s,1,"sTelephone");
@$city1=mysql_result(@$res_s,1,"iCity");
if($iPaid=="free")
{echo "<p><a href='../business-dir/free-details.php?c=$c&bid=$sid'>$bname</a></p><br>";}
else {echo "<p><a href='../business-dir/pay-details.php?c=$c&bid=$sid'>$bname</a></p><br>";}
echo "Call on: ".$phone;
}
else{echo "Not Have Spot Listing";}
?>
</td></tr>
</table>


<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />



<br />
<br />

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />

<center>
<a href="../business-dir/all-listing.php?c=<?php echo $c; ?>">Browse A-Z Business listing of <?php echo $c?></a></center>

<hr style="border-style:solid; border-width:1px; border-color:#F0F0F0;" />


<!--  end -->
</div>
