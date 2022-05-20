<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >



<table>
<form action="post-job-pro.php" method="post" enctype="multipart/form-data" />

<tr height="40"><td>Category : <font color="#FF0000"> *</font> </td>
<td><select name="category">
<option value="-1">Select a Category</option> 
						<option value="Art, Culture, &amp; Exhibitions" >Art, Culture, &amp; Exhibitions</option> 
								<option value="Business Networking" >Business Networking</option> 
								<option value="Cinemas &amp; Films" >Cinemas &amp; Films</option> 
								<option value="Dance, Clubbing &amp; Parties" >Dance, Clubbing &amp; Parties</option> 
								<option value="Festivals" >Festivals</option> 
								<option value="Music" >Music</option> 
								<option value="Food &amp; Drink" >Food &amp; Drink</option> 
								<option value="Walks" >Walks</option> 
								<option value="Theatre &amp; Comedy" >Theatre &amp; Comedy</option> 
								<option value="Fairs &amp; Markets" >Fairs &amp; Markets</option> 
								<option value="Sporting Events" >Sporting Events</option> 
								<option value="Lectures &amp; Education" >Lectures &amp; Education</option> 
								<option value="Kids &amp; Family" >Kids &amp; Family</option> 
						
</select>
</td>
</tr>

<tr height="40"><td>START DATE : </td>
<td>
<select name="form_day"> 
		<option value="<?php echo date("d");?>"><?php echo date("d");?></option>
		<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>		</select> /

<select name="form_month"> 
		<option value="<?php echo date("m");?>"><?php echo date("m");?></option>
		<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>		</select> /

<select name="form_year"> 
		<option value="<?php echo date("Y");?>"><?php echo date("Y");?></option>
		<option value="<?php echo (date("Y")-1);?>"><?php echo (date("Y")-1)?></option>
        <option value="<?php echo (date("Y")+1);?>"><?php echo (date("Y")+1)?></option>
        <option value="<?php echo (date("Y")+2);?>"><?php echo (date("Y")+2)?></option> 
		</select> 
(dd/mm/yyyy)
</td>
</tr>

<tr height="40"><td>END DATE : </td>
<td>
<select name="end_day"> 
		<option value="<?php echo date("d")+1;?>"><?php echo date("d")+1;?></option>
		<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>		</select> /

<select name="end_month"> 
		<option value="<?php echo date("m")+1;?>"><?php echo date("m")+1;?></option>
		<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>		</select> /

	<select name="end_year"> 
		<option value="<?php echo date("Y");?>"><?php echo date("Y");?></option>
		<option value="<?php echo (date("Y")-1);?>"><?php echo (date("Y")-1)?></option>
        <option value="<?php echo (date("Y")+1);?>"><?php echo (date("Y")+1)?></option>
        <option value="<?php echo (date("Y")+2);?>"><?php echo (date("Y")+2)?></option> 
	</select> 
</td>
</tr>

<tr height="40"><td>Event Name : </td>
<td><input type="text" name="event_name" id="event_name" value="" size="45"  /></td>
</tr>

<tr height="40"><td>Event Description </td>
<td><textarea name="event_desc" id="event_desc" rows="8" cols="40"></textarea></td>
</tr>


<tr height="40px"><td>Select City<font color="#FF0000"> *</font> : </td>
<td><select name="city">
<option value="-1">Select City</option>
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



<tr height="40"><td>Contact Name: <font color="#FF0000"> </font> </td>
<td><input type="text" name="name1" id="name1" value="" size="40"  /></td>
</tr>

<tr height="40"><td>Contact Number: <font color="#FF0000"> </font> </td>
<td><input type="text" name="number" id="number" value="" size="40"  /></td>
</tr>

<tr height="40"><td>Contact Email: <font color="#FF0000"> </font> </td>
<td><input type="text" name="event_email" id="event_email" value="" size="40"  /></td>
</tr>

<tr height="40"><td>Venue/ Address<font color="#FF0000"> </font> </td>
<td><input type="text" name="event_addr" id="event_addr" value="" size="40"  /></td>
</tr>



<tr height="40"><td>Upload Picture<font color="#FF0000"> </font> </td>
<td><input type="file" name="form_data" size="20"></td>
</tr>




<tr><td></td>
<td><input type="submit" name="submit" value="ADD Event" /> </td>
</tr>

</form>
</table>



</div>


<?php include '../footer.php' ?>
