<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >



<center><h1><font color="#32A4D5">EDIT Your Business</font></h1></center>

<?php
$bid1=addslashes($_REQUEST['bid']);
$type=addslashes($_REQUEST['type']);

?>

<table align="center" width="430px">
<form action="upgrade-listing-pro.php" method="post">
<input type="hidden" name="bid1" id="bid1" value="<?php echo $bid1; ?>" />
<input type="hidden" name="type" id="type" value="<?php echo $type; ?>" />

<tr height="40px"><td width="350px">MONTH To ADD  : </td>
<td><select name="update">

<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>


</select>
</td>
</tr>


<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Upgrade this Business" /></td>
</tr>


</form>
</table>




<!-- -->

</div>


<?php include '../footer.php' ?>
