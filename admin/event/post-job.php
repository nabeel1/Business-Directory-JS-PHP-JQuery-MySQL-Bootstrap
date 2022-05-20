<?php include 'header.php';?>
<?php include 'buyer-leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:900px; width:740px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:210px; top:196px; float:left; background-color:#ffffff;" >

<br /><br />

<center><font size="+2" color="#EB2E9F">Post Your Job</font></center>

<br />
<br />

<div style=" position:absolute; left:40px;">



<table>
<form method="post" action="post-job-pro.php" id="register_buyer" enctype="multipart/form-data"/>
<tr><td> Title:</td><td><input type="text" name="title" id="title" size="25" value="" /></td></tr>
<tr><td>Max Budget:</td><td><font color="red">£</font><input type="text" name="budget" id="budget" size="25" value="" /></td></tr>
<tr><td>Deliver Within Date</td><td><input type="text" name="date" id="date" size="25" value="" />dd/mm/yyyy format</td></tr>
<tr><td>Job Type:</td><td>
<select name="type" id="type"> 
<option value="car garage services">Car Garage Servies</option> 
<option value="tradesman">Tradesman (plumber,electricans,builders,heating engineers)</option> 
</select></td></tr>
<tr><td>Description:</td><td><textarea name="des" id="des" rows="7" cols="24"></textarea></td></tr>
<tr><td>Picture:</td><td><input type="file" name="form_data" size="20"> </td></tr>
 <tr><td></td><td><input name="submit" type="submit" id="submit" value="Post Job" /></td></tr>
		</form>

</table>

</div>

<!-- -->








</div>


<?php include 'footer.php' ?>
