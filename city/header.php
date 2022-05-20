<?php  include '../config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="../style.css" rel="stylesheet" />

<link type="text/css" href="menubar.css" rel="stylesheet" />

  <script type="text/javascript" src="jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
@$c=$_REQUEST['c'];
@$first_city_cap = ucfirst($c);
@$city_rep=str_replace(' ','+',$c);


@$res=mysql_query("SELECT * FROM city WHERE city='$c'");
@$id=mysql_result($res,0,"id");
@$state=mysql_result($res,0,"state");
@$title=mysql_result($res,0,"title");
@$mdesc=mysql_result($res,0,"mdesc");
@$keyword=mysql_result($res,0,"keyword");
@$cdesc=mysql_result($res,0,"cdesc");
?>
<title><?php echo $title; ?></title>
<meta name="keywords" content="<?php echo $keyword; ?>" />
<meta name="description" content="<?php echo $mdesc; ?>" />
 

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

<div id="first-main" style="background-color:#0E94CE; position:absolute; width:950px; height:30px; padding:0em; top:10px; left:0px; border-style:solid; border-width:0px;  display:block;">




<table width="950px">
<tr>
<td align="left" width="475px"><a href="../index.php"><img src="img/arrow-left-national.gif" /><font color="#FFFFFF" ><b>National Home </b></font></a> 
</td>
<td align="right" width="475px"><font color="#FFFFFF">
<?php 
if(@$_SESSION['fname']!=""){
 echo "<a href='../add-business/index.php'><font color='#ffffff'>Add Your Business</font></a> | <a href='../contactus.php'><font color='#FFFFFF'>Conatct us</font></a> | <a href='../user/index.php'><font color='#FFFFFF'>My Account</font></a> | Welcome ".$_SESSION['fname'];
echo " ";
echo $_SESSION['lname']." | <a href='../logout.php'><font color='#FFFFFF'>Logout</font></a>";
}
else
{
echo "<a href='../allcities.php'><font color='#ffffff'>Add Your Business</font></a> | <a href='../login.php'><font color='#FFFFFF'>Login</font></a> | <a href='../register.php'><font color='#FFFFFF'>Become A Member</font></a> | <a href='../contactus.php'><font color='#FFFFFF'>Contact us</font></a>";
} ?>

</font>
</td>
</tr>
</table>



</div>


<!-- -->


<!-- Div for cover background -->

<div id="header" style="background-color:#ffffff; position:absolute; width:950px; height:2088px; padding:0em; top:32px; left:0px; border-style:solid; border-width:0px;">

<!-- Div for header -->

<div id="header" style=" background-image:url(img/Untitled-4.gif); background-repeat:repeat-x; position:absolute; width:950px; height:150px; padding:0em; top:0px; left:0px; border-style:solid; border-width:0px;">



<div style="height:100px; width:600px; position:absolute; top:10px; left:40px;">
<h1><font color="#000000">Uk Local Business Directory</font></h1>
</div>


<div style="height:100px; width:600px; position:absolute; top:30px; left:680px;">
<img src="img/topbanner-pin.png" />
</div>

<div style="height:100px; width:600px; position:absolute; top:10px; left:700px;">
<p><h1><font color="#FFFFFF"><?php echo @$first_city_cap; ?></font></h1></p>
</div>

<div style="height:100px; width:600px; position:absolute; top:60px; left:800px;">
<a style="" href="../allcities.php"><img src="img/topbanner-changelocation.png" /></a>
</div>


</div>




<!-- Div for NAV BAR -->

<div id="header" style="  position:absolute; width:950px; height:138px; padding:0em; top:80px; left:4px; border-style:solid; border-width:0px;">


<div id="menubar">
<ul>
<li class="firstitem"><img src="images/menu-left.png" width="14" height="38" ></li>
<li id="house"><a href="<?php echo $city_rep; ?>">Local Home</a></li>
<li id="business-dir"><a href="../business-dir/<?php echo $city_rep;?>">Business Directory</a></li>
<li id="photo"><a href="photos/c/<?php echo $city_rep;?>">Local Photos</a></li>
<li id="wolfram"><a href="events/c/<?php echo $city_rep;?>">Local Event</a></li>
<li id="key"><a href="property/c/<?php echo $city_rep;?>">Local Property</a></li>

<?php if(@$_SESSION['uid']!=""){ 
echo "<li id='add'><a href='../add-business/index.php'>Add Your Business</a></li>";
echo "<li id='banda'><a href='../user/index.php'>Account</a></li>";
}else{
echo "<li id='add'><a href='../login.php'>Add Your Business</a></li>";
echo "<li id='banda'><a href='../login.php'>Login</a></li>";
}
?>
<li class="lastitem" ><img src="images/menu-right.png" width="14" height="38" ></li>

</ul>
</div>

<div id="header" style="  position:absolute; width:550px; height:25px; padding:0em; top:46px; left:4px; border-style:solid; border-width:0px; ">
<font color="#DDDDDD">You are Here: <a href="http://citybusinessdirectory.co.uk/">Home</a> > <a href="<?php echo $city_rep; ?>"> <?php echo $first_city_cap; ?> City Directory</a> > HomePage</font>
</div>

<!--<div id="header" style="  position:absolute; width:750px; height:90px; padding:0em; top:46px; left:140px; border-style:solid; border-width:0px; ">
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


<!--
<img src="../nav/nav-localhome-top.gif" alt="" />
<img src="../nav/nav-business-top.gif" alt="" />
<img src="../nav/nav_photos_top.gif" alt="" />
<img src="../nav/nav-youraccount-top.gif" alt="" />
<img src="../nav/nav-property-bot.gif" alt="" />
-->

</div>