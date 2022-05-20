<?php include 'header.php';?>

<?php  include 'leftbar-1.php';?>



	<script type="text/javascript">

	function validateForm()

	{

	var bname=document.forms["form1"]["bus-name"].value;

	var address=document.forms["form1"]["address"].value;

	var pcode=document.forms["form1"]["pcode"].value;

	var phone=document.forms["form1"]["phone"].value;

	var mobile=document.forms["form1"]["mobile"].value;

	var fax=document.forms["form1"]["fax"].value;

	var cat=document.forms["form1"]["cat"].value;

	var myemail=document.forms["form1"]["email"].value;

	var desc=document.forms["form1"]["desc"].value;

		

		var atpos=myemail.indexOf("@");

var dotpos=myemail.lastIndexOf(".");

	

	if (bname==null || bname=="" || address==null || address=="" || pcode==null || pcode=="" || phone==null || phone=="" || cat=="-1" || desc==null || desc=="")

	{

		alert("Fill All (*) Form Fields");

		return false;

	}else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=myemail.length)

	{

		alert("Not valid e-mail address");

		return false;

	}else if (isNaN(phone)==true)

	{

		alert("Not Valid Telephone No. Only Digits Allowed");

		return false;

	}else{

		return true;

	}

}

	

	</script>





<div id="main" style=" height:966px; width:458px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:290px; top:136px; float:left; background-color:#EBF3F8;" >







<center><h1><font color="#32A4D5">ADD Your Business</font></h1></center>



<table align="center" width="430px">

<form name="form1" action="add-bus-pro.php"  method="post" onSubmit="return validateForm()">



<tr height="30px"><td width="125px">Business Name<font color="#FF0000">*</font> : </td>

<td><input type="text" id="bus-name" name="bus-name" size="30" ></td>

</tr>



<tr height="30px"><td width="125px">Contact Name : </td>

<td><input type="text" id="cname" name="cname" size="30" ></td>

</tr>





<tr height="30px"><td width="125px">Address<font color="#FF0000">*</font> : </td>

<td><input type="text" id="address" name="address" size="30" ></td>

</tr>





<tr height="30px"><td width="125px">Address 2 : </td>

<td><input type="text" id="address2" name="address2" size="30" ></td>

</tr>



<tr height="30px"><td width="125px">City/Town<font color="#FF0000">*</font> : </td>

<td><select name="city">

<?php 

$res=mysql_query("SELECT  * FROM city WHERE city='$c'");

$id=mysql_result($res,0,"id");

?>

<option value="<?php echo $id; ?>"><?php echo $c; ?></option>

<?php 

$res=mysql_query("SELECT * FROM city ORDER BY city ASC");

$num_rows=MYSQL_NUM_ROWS($res);

$i=0;

while($i<$num_rows)

{

$city=mysql_result($res,$i,"city");

$id=mysql_result($res,$i,"id");



echo "<option value='$id'>$city</option>";

$i++;

}

?>

</select>

</td>

</tr>



<tr height="30px"><td width="125px">Post Code<font color="#FF0000">*</font> : </td>

<td><input type="text" id="pcode" name="pcode" size="30" ></td>

</tr>



<tr height="30px"><td width="125px">Telephone<font color="#FF0000">*</font> : </td>

<td><input type="text" id="phone" name="phone" size="30" ></td>

</tr>



<tr height="30px"><td width="125px">Mobile : </td>

<td><input type="text" id="mobile" name="mobile" size="30" ></td>

</tr>



<tr height="30px"><td width="125px">Fax : </td>

<td><input type="text" id="fax" name="fax" size="30" ></td>

</tr>



<tr height="30px"><td width="125px">Email Address<font color="#FF0000">*</font> : </td>

<td><input type="text" id="email" name="email" size="30" ></td>

</tr>



<tr height="30px"><td width="125px">Business Category<font color="#FF0000">*</font> : </td>

<td><select name="cat" style="width:250px;">

<option value="-1">Select Business Category</option>

<?php 

$res=mysql_query("SELECT id,sIndustryName FROM tblindustries ORDER BY sIndustryName ASC");

$num_rows=MYSQL_NUM_ROWS($res);

$i=0;

while($i<$num_rows)

{

$city=mysql_result($res,$i,"sIndustryName");

$id=mysql_result($res,$i,"id");



echo "<option value='$id'>$city</option>";

$i++;

}

?>

</select>

</td>

</tr>



<tr height="30px"><td width="125px">Business Description / Reviews<font color="#FF0000">*</font> : </td>

<td><textarea name="desc" id="desc" cols="25" rows="5"></textarea></td>

</tr>



<tr height="30px"><td width="125px">Select Listing Type<font color="#FF0000">*</font> : </td>

<td><input type="radio" name="type" value="free" checked> Free<br>

<input type="radio" name="type" value="premium" /> Premium <br />

<input type="radio" name="type" value="top" /> Top Spot </td>

</tr>



<tr height="30px"><td></td>

<td><input type="submit" name="submit" value="Add Your Business" /></td>

</tr>





</form>

</table>







<table align="center">
<tr valign="top">
<td>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* blue add 336&#42;280 */
google_ad_slot = "2674535903";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</td>
</tr>
</table>










<!-- --->
</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>

