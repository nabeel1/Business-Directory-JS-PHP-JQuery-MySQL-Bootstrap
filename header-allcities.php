<?php  include 'config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="style.css" rel="stylesheet" />
  <script type="text/javascript" src="jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>View all area and cities of UK, Browse A-Z of areas</title>
<meta name="description" content="View cities of uk map. UK business directory for Browse all area of uk. Find and view UK cities and add your local uk business, advertise property, add events and photos for free." /> 
<meta name="keywords" content="area of uk, uk business directory, uk cities map" /> 

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5607347-44']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body bgcolor="#C1CDE1">
<!-- div for centering -->

<div style="width:100%; height:100%; border:thick #990033;">

<!-- div for relative  -->

<div style="margin-left:auto; margin-right:auto; width:950px; height:auto; position:relative; background-color:#0033FF; border-width:3px; border-color:#33CC99;">

<!-- Main Div Menu -->

<div id="first-main" style="background-color:#0E94CE; position:absolute; width:950px; height:30px; padding:0em; top:10px; left:0px; border-style:solid; border-width:0px; text-align:right; display:block;">

<table width="950px">
<tr>
<td align="left" width="475px"><a href="index.php"><img src="img/arrow-left-national.gif" /><font color="#ffffff" >National Home</font></a></td>
<td align="right" width="475px"><font color="#FFFFFF">
<?php 
if(@$_SESSION['fname']!=""){
 echo "<a href='add-business/index.php'><font color='#ffffff'>Add Your Business</font></a> | <a href='contactus.php'><font color='#ffffff'>Conatct us</font></a> | <a href='user/index.php'><font color='#ffffff'>My Account</font></a> | Welcome ".$_SESSION['fname'];
echo " ";
echo $_SESSION['lname']." | <a href='logout.php'><font color='#ffffff'>Logout</font></a>";
}
else
{
echo "<a href='allcities.php'><font color='#ffffff'>Add Your Business</font></a> | <a href='javascript:toggle();'><font color='#ffffff'>Login</font></a> | <a href='register.php'><font color='#ffffff'>Become A Member</font></a> | <a href='contactus.php'><font color='#ffffff'>Contact us</font></a>";
} ?>

</font>
</td>
</tr>
</table>



</div>

<div id="toggle-first" style="background-color:#0E94CE; position:absolute; width:950px; height:30px; padding:0em; top:0px; left:0px; border-style:solid; border-width:0px; display:none;">

<form method="post" action="../loginpro.php" id="login_form" />  
          &nbsp;&nbsp;  <font color="#FFFFFF">Email:</font>&nbsp;&nbsp;<input type="text" name="username1" id="username1" size="14" value="" />
		
     &nbsp;&nbsp;   <font color="#FFFFFF">Password:</font>&nbsp;&nbsp;<input type="password" name="password1" id="password1" size="14" value="" />
        
        <input name="sub" type="submit" id="sub" value="Login" />
&nbsp;&nbsp;&nbsp;&nbsp; <a href="../ret-login.php"><font color="#FFFFFF">Retrieve your password</font></a>
		</form>



</div>

<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggle-first");
	var text = document.getElementById("first-main");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "show";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "hide";
	}
} 
</script>

<!-- -->


<!-- Div for cover background -->

<div id="header" style="background-color:#ffffff; position:absolute; width:950px; height:13198px; padding:0em; top:32px; left:0px; border-style:solid; border-width:0px;">

<!-- Div for header -->

<div id="header" style=" background-image:url(img/Untitled-4.gif); background-repeat:repeat-x; position:absolute; width:950px; height:150px; padding:0em; top:0px; left:0px; border-style:solid; border-width:0px;">




<div style="height:100px; width:600px; position:absolute; top:10px; left:40px;">
<h1><font color="#000000">Uk Local Business Directory</font></h1>
</div>



</div>




