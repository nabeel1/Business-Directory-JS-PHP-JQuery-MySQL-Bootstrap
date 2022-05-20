<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="main" style=" height:900px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:1150px; width:540px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:10px; top:0px; background-color:#F5FBFF;" >

<center><h1><font color="#32A4D5">ADD Property for Sale/Rent</font></h1></center>

<table align="center">
<form action="add-property-pro.php" method="post" enctype="multipart/form-data"/>

<tr height="40"><td>Category : <font color="#FF0000"> *</font> </td>
<td><select name="category">
<option value="sale">For Sale</option>
<option value="rent">For Rent</option>
</select></td>
</tr>

<tr height="40"><td>Type: </td>
<td>
<select name="type">
								<option value="Apartment" >Apartment</option>
								<option value="Terraced">Terraced</option>				
								<option value="End Terraced" >End Terraced</option>				
								<option value="Semi-Detached" >Semi-Detached</option>				
								<option value="Detached" >Detached</option>				
								<option value="Mews" >Mews</option>				
								<option value="Cluster House" >Cluster House</option>				
								<option value="Ground Flat" >Ground Flat</option>				
								<option value="Flat" >Flat</option>				
								<option value="Studio" >Studio</option>				
								<option value="Ground Maisonette" >Ground Maisonette</option>				
								<option value="Maisonette" >Maisonette</option>				
								<option value="Bungalow" >Bungalow</option>				
								<option value="Terraced Bungalow" >Terraced Bungalow</option>				
								<option value="Semi-Detached Bungalow" >Semi-Detached Bungalow</option>				
								<option value="Detached Bungalow" >Detached Bungalow</option>				
								<option value="Mobile Home" >Mobile Home</option>				
								<option value="Hotel" >Hotel</option>				
								<option value="Guest House" >Guest House</option>				
								<option value="Commercial Property" >Commercial Property</option>				
								<option value="Land" >Land</option>				
								<option value="Link Detached House" >Link Detached House</option>				
								<option value="Town House" >Town House</option>				
								<option value="Cottage" >Cottage</option>				
								<option value="Chalet" >Chalet</option>				
								<option value="Unique" >Unique</option>				
								<option value="House" >House</option>				
								<option value="Villa" >Villa</option>				
								<option value="Apartment" >Apartment</option>				
								<option value="Penthouse" >Penthouse</option>				
								<option value="Finca" >Finca</option>
</select>
</td>
</tr>

<tr height="40"><td>Street Address: </td>
<td><input type="text" name="address" id="address" value="" size="38"  /></td>
</tr>

<tr height="40"><td>Town: </td>
<td><input type="text" name="town" id="town" value="" size="38"  /></td>
</tr>


<tr height="40"><td>Post Code : <font color="#FF0000"> *</font> </td>
<td><input type="text" name="code" id="code" value="" size="18"  /></td>
</tr>


<tr height="40px"><td>Select City<font color="#FF0000"> *</font> : </td>
<td><select name="city">
<option value="<?php echo $_SESSION['city']; ?>"><?php echo $_SESSION['city']; ?></option>
<?php 
$res=mysql_query("SELECT * FROM city ORDER BY city ASC ");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$city=mysql_result($res,$i,"city");
$id=mysql_result($res,$i,"id");

echo "<option value='$city'>$city</option>";
$i++;
}
?>
</select>
</td>
</tr>

<tr><td>Number of Bedrooms </td>
<td>
<select name="bedrooms"> 
			<option  value="0">0</option> 
			<option  value="1">1</option> 
			<option  value="2">2</option> 
			<option  value="3">3</option> 
			<option  value="4">4</option> 
			<option  value="5">5</option> 
			<option  value="6">6+</option> 
		</select> 
</td>
</tr>

<tr height="40"><td>Sale Price or montly Rental<font color="#FF0000"> £ </font> </td>
<td><input type="text" name="price" id="price" value="" size="18"  /></td>
</tr>

<tr><td>Price Type</td>
<td>
<select name="way"> 
			<option value="POA" >POA</option>				
								<option value="Guide Price" >Guide Price</option>				
								<option value="Fixed Price" >Fixed Price</option>				
								<option value="Offers Over" >Offers Over</option>				
								<option value="OIRO" >OIRO</option>				
								<option value="Sale by Tender" >Sale by Tender</option>				
								<option value="From" >From</option> 
		</select> 
</td>
</tr>

<tr height="40"><td>Contact Name<font color="#FF0000">* </font> :  </td>
<td><input type="text" name="name1" id="name1" value="" size="38"  /></td>
</tr>

<tr height="40"><td>Contact Number<font color="#FF0000">* </font>: </td>
<td><input type="text" name="number" id="number" value="" size="38"  /></td>
</tr>


<tr height="40"><td>Upload Picture<font color="#FF0000"> </font> </td>
<td><input type="file" name="form_data" size="20"></td>
</tr>

<tr height="40"><td>Property Description<font color="#FF0000"> </font> </td>
<td><textarea name="desc" id="desc" rows="8" cols="30"></textarea></td>
</tr>

<tr height="40"><td>Property Title<font color="#FF0000">* </font>: </td>
<td><input type="text" name="title1" id="title1" value="" size="38"  /></td>
</tr>

<tr><td></td>
<td><input type="submit" name="submit" value="ADD Property" /> </td>
</tr>

</form>
</table>



<center><script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* blue add 336&#42;280 */
google_ad_slot = "2674535903";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></center>



<!-- -->

</div>

<!-- -->



</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
