<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->

<?php
$res=mysql_query("SELECT * FROM advertise");
$num_rows=MYSQL_NUM_ROWS($res);
if($num_rows!="")
{
$city_add=mysql_result($res,0,"adds");
$main_add=mysql_result($res,1,"adds");
$sub_add=mysql_result($res,2,"adds");
$free_add=mysql_result($res,3,"adds");
}

?>


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >



<center><font size="+2">Place ADD on City Home Page</font></center>

<table align="center">
<form action="advert-pro.php" method="post">

<tr height="40px"><td>Place the code for city Home Page : </td>
<td>
<input type="hidden" name="p" value="city" />
<textarea name="home" id="home" cols="50" rows="10"><?php echo $city_add; ?></textarea>
</td>
</tr>

<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Add This Code to city Home Page" /></td>
</tr>


</form>
</table>

<hr />



<table align="center">
<form action="advert-pro.php" method="post">

<tr height="40px"><td>Place the code In Main Business Category : </td>
<td>
<input type="hidden" name="p" value="main" />
<textarea name="home" id="home" cols="50" rows="10"><?php echo $main_add; ?></textarea>
</td>
</tr>

<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Add This to Main Category" /></td>
</tr>


</form>
</table>

<hr />

<table align="center">
<form action="advert-pro.php" method="post">

<tr height="40px"><td>Place the code In SUB Business Category : </td>
<td>
<input type="hidden" name="p" value="sub" />
<textarea name="home" id="home" cols="50" rows="10"><?php echo $sub_add; ?></textarea>
</td>
</tr>

<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Add This to Sub Business Category" /></td>
</tr>


</form>
</table>

<hr />

<table align="center">
<form action="advert-pro.php" method="post">

<tr height="40px"><td>Place the code In Free Business Listing : </td>
<td>
<input type="hidden" name="p" value="free" />
<textarea name="home" id="home" cols="50" rows="10"><?php echo $free_add; ?></textarea>
</td>
</tr>

<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Add This to FREE LISTING" /></td>
</tr>


</form>
</table>

<hr />

<!-- -->

</div>


<?php include 'footer.php' ?>
