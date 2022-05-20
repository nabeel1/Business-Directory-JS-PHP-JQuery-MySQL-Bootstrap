<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >


<h3>Start Searching Business Listing</h3>

<table align="center">
<form action="bus-listing.php" method="post">

<tr height="40px"><td>Starting ID to Search<font color="#FF0000">*</font> : </td>
<td><input type="text" id="start" name="start" size="20" > (like 100 etc)</td>
</tr>

<tr height="40px"><td>Ending ID to Search<font color="#FF0000">*</font> : </td>
<td><input type="text" id="end" name="end" size="20" > (like 1000 etc)</td>
</tr>
<?php
$resq=mysql_query("SELECT id FROM tblbusinesses ORDER BY id ASC Limit 0,1");
$counting=mysql_num_rows($resq);
$w_res=mysql_result($resq,0,"id");
?>

<tr height="40px"><td> </td>
<td> Rows Starting ID: <?php echo $w_res;?> </td>
</tr>

<?php
$resq=mysql_query("SELECT id FROM tblbusinesses ORDER BY id DESC Limit 0,1");
$counting=mysql_num_rows($resq);
$w_res=mysql_result($resq,0,"id");
?>

<tr height="40px"><td> </td>
<td> Rows Ending ID: <?php echo $w_res;?> </td>
</tr>


<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Start Search by ID" /></td>
</tr>



</form>
</table>

<br /><br />

<table align="center">
<form action="name-bus-listing.php" method="post">
<tr height="40px">
<td>Search By Listing Name<font color="#FF0000">*</font> : </td>
<td><input type="text" id="name" name="name" size="20" ></td>
</tr>
<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Search by name" /></td>
</tr>


</form>
</table>


<!-- -->

</div>


<?php include '../footer.php' ?>
