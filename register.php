<?php include 'header.php';?>
<?php include 'right-bar.php';?>


<script type="text/javascript">

$(document).ready(function(){  
    $("form#register").submit(function() {  
    // we want to store the values from the form input box, then send via ajax below  
    var email     = $('#email').attr('value');
	var fname     = $('#fname').attr('value');  
    var lname     = $('#lname').attr('value');
	var location     = $('#location').attr('value');
	var pass     = $('#password').attr('value');
	var cpass     = $('#cpassword').attr('value');
	
	var atpos=email.indexOf("@");
var dotpos=email.lastIndexOf(".");
	
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  {
  alert("Not a valid e-mail address");
  
  }
	
//alert(email+fname+lname+location+pass+cpass);

var email_length=email.length;
var lname_length=lname.length;
var fname_length=fname.length;
var pass_length=pass.length;
var cpass_length=cpass.length;
var location_length=location.length;


if(email_length==0 || lname_length==0 || fname_length==0 || pass!=cpass || location=="-1"  || atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
{
		$.ajax({  
            //type: "POST",  
            //url: "signup.php",  
           // data: "fname="+ fname +"& lname="+ lname +"& user="+ username+ "& pass="+ pass + "& sex="+ sex + "& month="+ month + "& day="+day+"&year="+year ,  
            success: function(){  
               // $('form#submit').hide(function(){$('div.fillall').fadeIn();});  
  			$('div.fillallabc').show();
            }  
        });
		
		
}else{	  
           $.ajax({  
            type: "POST",  
             url: "user_availability.php",  
             data: "user_name="+ email ,  
            success: function(data){
	
			if(data=="no")
			{  
                //$('form#submit').hide(function(){$('div.fillall').fadeIn();});  
  			$('div.fillall').show();
			$('div.fillallabc').hide();
			}
			else
			{
			$.ajax({  
            type: "POST",  
            url: "signup.php",  
             data: "fname="+ fname +"& lname="+ lname + "& pass="+ pass + "& email="+email+"& location="+location , 
 
 
            success: function(){  
                $('#register1').hide(function(){$('div.success').fadeIn();});  
  			$('div.fillall').hide();
			$('div.fillallabc').hide();
            }  
        });
			
			}
            }
			  
        });
		
	
		
	}
    return false;  
    });  
});  


</script>

<!-- Div for slider show -->



<div id="leftbar" style=" height:900px; width:310px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:306px; top:100px; float:left; background-color:#ffffff;" >



<!-- register form -->

	<div class="success" style="display:none; height:200px; width:400px; position:absolute; left:0px; top:0px;"><font color="red" size="+1">Registration Complete.<br /> Please See your <u>Inbox or Spam box</u> for account activation Link. If you do not receive email then reply us on webmaster@<?php echo $_SERVER['SERVER_NAME'];?></font></div> 

<div id="register1" style=" height:440px; width:400px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:0px; top:6px; background-color:#32A4D5; " >



	<div class="fillall" style="display:none;"><font color="red" size="+1">Email Already Exist...!!</font><a href=""><font size="+1" color="#FFFFFF">Retrieve Your Password</font></a></div>
	<div class="fillallabc" style="display:none;"><font color="red" size="+1"> Please Fill All Field Form Properly</font></div>


<br />

<table align="center">
<form id="register" method="post">

<tr height="40px">
<td><font color="#FFFFFF" size="+1"><b><i>First Name</i></b></font></td>
<td><input type="text" name="fname" id="fname" value="" /></td>
</tr>

<tr height="40px">
<td><font color="#FFFFFF" size="+1"><b><i>Last Name</i></b></font></td>
<td><input type="text" name="lname" id="lname" value="" /></td>
</tr>

<tr height="40px">
<td><font color="#FFFFFF" size="+1"><b><i>Email</i></b></font></td>
<td><input type="text" name="email" id="email" value="" /></td>
</tr>

<tr>
<td></td>
<td><font color="#FFFFFF" size="1">(This will not be displayed publically)</font></td>
</tr>


<tr height="40px">
<td><font color="#FFFFFF" size="+1"><b><i>Password</i></b></font></td>
<td><input type="password" name="password" id="password" value="" /></td>
</tr>

<tr height="40px">
<td><font color="#FFFFFF" size="+1"><b><i>Confirm Password</i></b></font></td>
<td><input type="password" name="cpassword" id="cpassword" value="" /></td>
</tr>

<tr>
<td></td>
<td><font color="#FFFFFF" size="1">(This must match the password above)</font></td>
</tr>

<tr height="40px"><td><font color="#FFFFFF" size="+1"><b><i>Local Area</i></b></font></td>
<td>
<select class="select" name="location" id="location">
<option value="-1">Please Select City</option>
<?php 
$res=mysql_query("SELECT * FROM city ORDER BY id ASC");
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

<tr>
<td></td>
<td><font color="#FFFFFF" size="1">(Please enter a town or city)</font></td>
</tr>

<tr><td></td><td>
<input name="submit" type="submit" 
 style="background-color: #CCFFFF; 
 border-top: 2px solid #5f6c4d; 
 border-right: 2px solid #000000; 
 border-bottom: 2px solid #000000; 
 border-left: 2px solid #5f6c4d;
 width: 80px; height: 24px;
 font-weight: bold;" value="Sign Up" />
</td>
</tr>

</form>
</table>

</div>

<!-- -->



<!-- -->



</div>

<?php include 'leftbar.php';?>
<?php include 'footer.php' ?>
