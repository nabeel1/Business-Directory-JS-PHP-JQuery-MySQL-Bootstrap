<?php include 'header.php';?>


	<script type="text/javascript">

	function validateForm()
	{
		var email=document.forms["form1"]["email"].value;
		var phone=document.forms["form1"]["phone"].value;
		var desc=document.forms["form1"]["desc"].value;
		
		if(email==0)
		{
			alert("Enter email address");
			return false;
		}else if(desc==0)
		{
			alert("Enter email Query description");
			return false;
		}else{
			return true;	
		}
	}
	
	</script>


<div id="leftbar" style=" height:900px; width:710px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:3px; top:100px; float:left; background-color:#ffffff;" >


<h1>Contact Us</h1>

Feel free to contact on following email address regarding respective queries.

<ul>
<li>To contact advertising manager:&nbsp;&nbsp; <font color="#3333FF">adverts@<?php echo $_SERVER['SERVER_NAME'];?></font></li>
<li>To contact Administrator: 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#3333FF">webmaster@<?php echo $_SERVER['SERVER_NAME'];?></font></li>
<li>For report any business/events/photos etc: &nbsp;&nbsp; <font color="#3333FF">report@<?php echo $_SERVER['SERVER_NAME'];?></font></li>
<li>For any other queries: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color="#3333FF">info@<?php echo $_SERVER['SERVER_NAME'];?></font></li>
</ul>

<br />

<h3>Direct Contact us by filling following web form</h3>

<table align="center" width="430px">
<form name="form1" action="contactus-pro.php"  method="post" onSubmit="return validateForm()">

<tr height="30px"><td width="125px">Your Email<font color="#FF0000">*</font> : </td>
<td><input type="text" id="email" name="email" size="30" ></td>
</tr>

<tr height="30px"><td width="125px">Your Phone : </td>
<td><input type="text" id="phone" name="phone" size="30" ></td>
</tr>


<tr height="30px"><td width="125px">Business Category<font color="#FF0000">*</font> : </td>
<td>
<select name="cat" style="width:220px;">
<option value="advertise">want to advertise</option>
<option value="General Information">General Information</option>
<option value="advertise">want to advertise</option>
</select>
</td>
</tr>

<tr height="30px"><td width="125px">Query Description: <font color="#FF0000">*</font> : </td>
<td><textarea name="desc" id="desc" cols="25" rows="5"></textarea></td>
</tr>


<tr height="30px"><td></td>
<td><input type="submit" name="submit" value="Send Request" /></td>
</tr>


</form>
</table>





<!-- -->



</div>

<?php include 'leftbar.php';?>
<?php include 'footer.php' ?>
