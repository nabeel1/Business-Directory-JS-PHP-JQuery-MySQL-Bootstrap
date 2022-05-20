<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >

<?php $lid=$_REQUEST['lid']; ?>

<table align="center">
<form action="add-premiumship-pro.php" method="post">

<input type="hidden" name="lid" id="lid" value="<?php echo $lid; ?>" />

<tr height="40px"><td>Select Listing Type<font color="#FF0000"> *</font> : </td>
<td><select name="category">
<option value="-1">Select Main Category</option>
<option value="0">Free</option>
<option value="1">Premium</option>
<option value="2">Top</option>
</select>
</td>
</tr>



<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Upgrade" /></td>
</tr>


</form>
</table>



<!-- -->

</div>


<?php include '../footer.php' ?>
