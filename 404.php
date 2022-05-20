<?php  include 'config.php';?>
<?php $baseurl="http://".$_SERVER['HTTP_HOST']; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="<?php echo $baseurl;?>/style.css" rel="stylesheet" />
  <script type="text/javascript" src="jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php $title="Uk Business Directory | 404 Error page"; ?>
<title>Uk Business Directory | 404 Error page</title>
<meta name="description" content="Online UK Business directory 404 error page." /> 
 
<meta name="keywords" content="uk business directory 404 error page." /> 


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
<td align="left" width="475px"><a href="<?php echo $baseurl;?>/index.php"><img src="<?php echo $baseurl;?>/img/arrow-left-national.gif" /><font color="#ffffff" >National Home</font></a></td>
<td align="right" width="475px"><font color="#FFFFFF">
<?php 
if(@$_SESSION['fname']!=""){
 echo "<a href='$baseurl/add-business/index.php'><font color='#ffffff'>Add Your Business</font></a> | <a href='$baseurl/contactus.php'><font color='#ffffff'>Conatct us</font></a> | <a href='$baseurl/user/index.php'><font color='#ffffff'>My Account</font></a> | Welcome ".$_SESSION['fname'];
echo " ";
echo $_SESSION['lname']." | <a href='$baseurl/logout.php'><font color='#ffffff'>Logout</font></a>";
}
else
{
echo "<a href='$baseurl/allcities.php'><font color='#ffffff'>Add Your Business</font></a> | <a href='javascript:toggle();'><font color='#ffffff'>Login</font></a> | <a href='$baseurl/register.php'><font color='#ffffff'>Become A Member</font></a> | <a href='$baseurl/contactus.php'><font color='#ffffff'>Contact us</font></a>";
} ?>

</font>
</td>
</tr>
</table>



</div>

<div id="toggle-first" style="background-color:#0E94CE; position:absolute; width:950px; height:30px; padding:0em; top:0px; left:0px; border-style:solid; border-width:0px; display:none;">

<form method="post" action="<?php echo $baseurl;?>/loginpro.php" id="login_form" />  
          &nbsp;&nbsp;  <font color="#FFFFFF">Email:</font>&nbsp;&nbsp;<input type="text" name="username1" id="username1" size="14" value="" />
		
     &nbsp;&nbsp;   <font color="#FFFFFF">Password:</font>&nbsp;&nbsp;<input type="password" name="password1" id="password1" size="14" value="" />
        
        <input name="sub" type="submit" id="sub" value="Login" />
&nbsp;&nbsp;&nbsp;&nbsp; <a href="ret-login.php"><font color="#FFFFFF">Retrieve your password</font></a>
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

<div id="header" style="background-color:#ffffff; position:absolute; width:950px; height:1450px; padding:0em; top:32px; left:0px; border-style:solid; border-width:0px;">

<!-- Div for header -->

<div id="header" style=" background-image:url(<?php echo $baseurl;?>/img/Untitled-4.gif); background-repeat:repeat-x; position:absolute; width:950px; height:190px; padding:0em; top:0px; left:0px; border-style:solid; border-width:0px;">




<div style="height:100px; width:600px; position:absolute; top:10px; left:40px;">
<h1><font color="#000000">Uk Local Business Directory</font></h1>
</div>

<div style="height:100px; width:600px; position:absolute; top:30px; left:780px;">
<img src="<?php echo $baseurl;?>/img/topbanner-pin.png" />
</div>

<div style="height:100px; width:600px; position:absolute; top:10px; left:800px;">
<h1><font color="#000000">UK</font></h1> <br />
</div>

<div style="height:100px; width:600px; position:absolute; top:60px; left:800px;">
<a style="" href="<?php echo $baseurl;?>/allcities.php"><img src="<?php echo $baseurl;?>/img/topbanner-changelocation.png" /></a>
</div>


<!--<div style="height:100px; width:728px; position:absolute; top:94px; left:90px;">

<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal main 780&#42;90 */
google_ad_slot = "2816087964";
google_ad_width = 728;
google_ad_height = 90;
//--
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</div> -->


</div>


<!---          End of header       -------->


<div id="leftbar" style=" height:1254px; width:710px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:10px; top:100px; float:left; background-color:#ffffff;" >

<table bgcolor="#F5FBFF">

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

<td>
<h2>Sorry, 404 page error!</h2>
<p>You are here because the Link you are looking is shifted or might be some due to some server error.</p>
<p>you can try following things.</p>

<ul>
<li><a href="<?php echo $baseurl;?>/login.php">Login</a> or <a href="<?php echo $baseurl;?>/register.php">Register Now</a> to add your business freely.</li>
<li><a href="<?php echo $baseurl;?>/login.php">Login</a> or <a href="<?php echo $baseurl;?>/register.php">Register Now</a> to advertise your properties.</li>
<li><a href="<?php echo $baseurl;?>/login.php">Login</a> or <a href="<?php echo $baseurl;?>/register.php">Register Now</a> to add current local events in town.</li>
</ul>

</td>

</tr>
</table>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal blue 336 */
google_ad_slot = "0032584212";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


<table width="710px" bgcolor="#32A4D5">
<tr>
<td>
<img src="<?php echo $baseurl;?>/business-dir/img/book.gif" /><font color="#FFFFFF" size="+1"> Try out some other UK Cities  </font>
</td>
</tr>
</table>

<!-- -->

<table width="710px" bgcolor="" >
<tr height="60px" valign="top">
<?php
$res=mysql_query("SELECT id,city FROM city ORDER BY id ASC LIMIT 0,42");
$num_rows=MYSQL_NUM_ROWS($res);

$i=0;
while($i<$num_rows)
{
$city_n=mysql_result($res,$i,"city");
$city_link=str_replace(" ","+",$city_n);

echo "<td width='320px' bgcolor='#EBF3F8'><img src='$baseurl/business-dir/img/article_bullet.png' /><a href='$baseurl/city/$city_link'><font size='+1'>$city_n</font></a></td>";


if($i%3==2 )
{
echo "</tr>";
echo "<tr height='60px' valign='top'>";

}
$i++;
}
?>

</tr>
</table>

</div>

<!--------------    End of main body ------------------------->


<!------------- Start of leftbar       ----------------------->



<div id="leftbar" style=" height:1250px; width:220px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:720px; top:100px; float:left; background-color:#F0F0F0;" >

<br />
<div style="height:220px; width:200px;border-style:solid;border-color:#26B4D9;  border-width:0px; position:absolute; left:10px;">

<script type="text/javascript"><!--
google_ad_client = "pub-8322854526941107";
/* 200x200, created 4/11/11 */
google_ad_slot = "4641757452";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
	 <!-- 
<marquee behavior="scroll"direction="up" scrollamount="1"><center><b>News And Event</b><br /> 

<?php /*
$res_show=mysql_query("SELECT message FROM news WHERE id='1' ");
$num_rows_show=MYSQL_NUM_ROWS($res_show);
$i=0;
while($i<$num_rows_show)
{
$message=mysql_result($res_show,$i,"message");
echo $message;
$i++;
}
*/?>

</center></marquee> -->

</div>




<div style="height:600px; width:220px; position:absolute; top:280px; left:0px; border-style:solid;border-color:#26B4D9;  border-width:0px;">

<center><font size="+1" color="#60D314"><a href="allcities.php">Browse A-Z of areas</a></font></center><br /><br />

<center><font size="+1" color="#60D314">Featured Areas</font></center><br />
<table>
<tr>
<td>
<font size="+1" color="#000000"><b>England</b></font><br />
<?php
$res=mysql_query("SELECT id,city FROM city WHERE state='england' ORDER BY id ASC LIMIT 0,25");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$city_rep=str_replace(' ','+',$city);
echo "<a href='$baseurl/city/$city_rep'>$city</a><br />";
$i++;
}
?>
<br />
<font size="+1" color="#000000"><b>Wales</b></font><br />
<?php
$res=mysql_query("SELECT id,city FROM city WHERE state='wales' ORDER BY id ASC LIMIT 0,25");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$city_rep=str_replace(' ','+',$city);
echo "<a href='$baseurl/city/$city_rep'>$city</a><br />";
$i++;
}
?>

</td>

<td>
<font size="+1" color="#000000"><b>London</b></font><br />
<?php
$res=mysql_query("SELECT id,city FROM city WHERE state='London' ORDER BY id ASC LIMIT 0,25");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$city_rep=str_replace(' ','+',$city);
echo "<a href='$baseurl/city/$city_rep'>$city</a><br />";
$i++;
}
?>
<font size="+1" color="#000000"><b>Scotland</b></font><br />
<?php
$res=mysql_query("SELECT id,city FROM city WHERE state='Scotland' ORDER BY id ASC LIMIT 0,25");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$city_rep=str_replace(' ','+',$city);
echo "<a href='$baseurl/city/$city_rep'>$city</a><br />";
$i++;
}
?>

<font size="+1" color="#000000"><b>Ireland</b></font><br />
<?php
$res=mysql_query("SELECT id,city FROM city WHERE state='Ireland' ORDER BY id ASC LIMIT 0,25");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$city_rep=str_replace(' ','+',$city);
echo "<a href='$baseurl/city/$city_rep'>$city</a><br />";
$i++;
}
?>
</td>

</tr>
</table>


</div>



</div>


<!--------- end of leftbar               -------------------------->

<!------- start of footer              ------------------>


<div id="footer" style="background-color:#ffffff; background-image:url(<?php echo $baseurl;?>/business-dir/img/Untitled-6.gif); position:absolute; width:950px; height:auto; padding:0em; top:1454px; left:0px; border-style:solid; border-width:0px; border-color:#B8B8B8;">

<br />

<table>
<tr>
<td width="150px"><b>Quick Link</b></td>
<td width="150px"><b>Business Link</b></td>
<td width="150px"><b>Find Business</b></td>
<td width="150px"><b>Other Services</b></td>
<td width="150px"><b>CityDirectory Info</b></td>
</tr>

<tr>
<td width="150px"><a href="<?php echo $baseurl;?>/login.php" rel="nofollow">Log in</a></td>
<td width="300px"><a href="<?php echo $baseurl;?>/login.php" rel="nofollow">Add Your Business</a></td>
<td width="150px"><a href="<?php echo $baseurl;?>/allcities.php" rel="nofollow">Browse All cities</a></td>
<td width="150px"><a href="<?php echo $baseurl;?>/contactus.php" rel="nofollow">Contact us</a></td>
</tr>

<tr>
<td><a href="<?php echo $baseurl;?>/register.php">Register</a></td>

</tr>

<tr>
<td></td>
<td></td>
<td width="350px"></td>

</tr>


</table>



<center>Copyright 2010-2012. All Rights Reserved for citybusinessdirectory.co.uk - <?php echo $title?></center>

<br />


<!-- end of main div -->

</div>

</div>

</div>

</body>
</html>



<!---- end of footer               ----------------------->
