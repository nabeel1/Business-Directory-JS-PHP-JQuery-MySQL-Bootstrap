<?php  include '../config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="../style.css" rel="stylesheet" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<link type="text/css" href="../menubar.css" rel="stylesheet" />

<!-- File For Image Slider -->



<!-- -->

<style type="text/css">
/* rotator in-page placement */
    div.rotator {
	position:relative;
	height:280px;
	margin-left: -25px;
	display: none;
	clear:both;
}
/* rotator css */
	div.rotator ul li {
	float:left;
	position:absolute;
	list-style: none;
}
/* rotator image style */	
	div.rotator ul li img {
	border:1px solid #ccc;
	padding: 4px;
	background: #FFF;
}
    div.rotator ul li.show {
	z-index:500
}
</style>
 
 <!-- By Dylan Wagstaff, http://www.alohatechsupport.net -->
<script type="text/javascript">

function theRotator() {
	//Set the opacity of all images to 0
	$('div.rotator ul li').css({opacity: 0.0});
	
	//Get the first image and display it (gets set to full opacity)
	$('div.rotator ul li:first').css({opacity: 1.0});
		
	//Call the rotator function to run the slideshow, 6000 = change to next image after 6 seconds
	
	setInterval('rotate()',6000);
	
}

function rotate() {	
	//Get the first image
	var current = ($('div.rotator ul li.show')?  $('div.rotator ul li.show') : $('div.rotator ul li:first'));

    if ( current.length == 0 ) current = $('div.rotator ul li:first');

	//Get next image, when it reaches the end, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div.rotator ul li:first') :current.next()) : $('div.rotator ul li:first'));
	
	//Un-comment the 3 lines below to get the images in random order
	
	//var sibs = current.siblings();
    //var rndNum = Math.floor(Math.random() * sibs.length );
    //var next = $( sibs[ rndNum ] );
			

	//Set the fade in effect for the next image, the show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	
};



$(document).ready(function() {		
	//Load the slideshow
	theRotator();
	$('div.rotator').fadeIn(1000);
    $('div.rotator ul li').fadeIn(1000); // tweek for IE
});
</script>
 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
@$c=$_REQUEST['c'];
@$first_city_cap = ucfirst($c);
@$city_rep=str_replace(' ','+',$c);


@$bid=$_REQUEST['bid'];
@$res=mysql_query("SELECT * FROM tblbusinesses WHERE id='$bid'");
@$id=mysql_result($res,0,"id");

@$title=mysql_result($res,0,"sMetaTitle");
@$mdesc=mysql_result($res,0,"sMetaDescription");
@$keyword=mysql_result($res,0,"sMetaKeywords");
@$sTelephone=mysql_result($res,0,"sTelephone");
@$sMobile=mysql_result($res,0,"sMobile");
@$sFax=mysql_result($res,0,"sFax");
@$pcode=mysql_result($res,0,"sPostcode");
@$sAddress=mysql_result($res,0,"sAddress");
@$sAddress2=mysql_result($res,0,"sAddress2");
@$sBusinessName=mysql_result($res,0,"sBusinessName");
@$count=mysql_result($res,0,"count");
@$tDescription=mysql_result($res,0,"tDescription");
@$sContactEmail=mysql_result($res,0,"sContactEmail");
@$sUrl=mysql_result($res,0,"sUrl");
@$image_url=mysql_result($res,0,"image_url");
@$video=mysql_result($res,0,"video");
@$iPaid_h=mysql_result($res,0,"iPaid");
@$iCity=mysql_result($res,0,"iCity");
@$iIndustry=mysql_result($res,0,"iIndustry");
@$iIndustry_h=$iIndustry;
@$iIndustry2=mysql_result($res,0,"iIndustry2");
@$iIndustry3=mysql_result($res,0,"iIndustry3");
@$iIndustry4=mysql_result($res,0,"iIndustry4");

@$res_sub=mysql_query("SELECT id,sIndustryName FROM tblindustries WHERE id='$iIndustry'");
@$sub_id=mysql_result($res_sub,0,"id");
@$sub_cat_name=mysql_result($res_sub,0,"sIndustryName");



?>
<title><?php echo $title; ?></title>
<meta name="keywords" content="<?php echo $keyword; ?>" />
<meta name="description" content="<?php echo $mdesc; ?>" />
 
 <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBvhqRSfwuIK2SlWbjR4WQvp7RtPq1D80Q&sensor=false" type="text/javascript"></script> 
    <script type="text/javascript"> 

	  function initialize() {
	address=document.getElementById("address").value;  
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var myOptions = {
      zoom: 16,
      center: latlng,
    mapTypeControl: true,
    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
    navigationControl: true,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    if (geocoder) {
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
          map.setCenter(results[0].geometry.location);

            var infowindow = new google.maps.InfoWindow(
                { content: '<b>'+address+'</b>',
                  size: new google.maps.Size(150,50)
                });
    
            var marker = new google.maps.Marker({
                position: results[0].geometry.location,
                map: map, 
                title:address
            }); 
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });

          } else {
            //alert("No results found");
          }
        } else {
          //alert("Geocode was not successful for the following reason: " + status);
        }
      });
    }
  }
   </script> 	

    </script> 

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

<body bgcolor="#C1CDE1" onload="initialize()">
<!-- div for centering -->

<div style="width:100%; height:100%; border:thick #990033;">

<!-- div for relative  -->

<div style="margin-left:auto; margin-right:auto; width:950px; height:auto; position:relative; background-color:#0033FF; border-width:3px; border-color:#33CC99;">

<!-- Main Div Menu -->

<div id="first-main" style="background-color:#0E94CE; position:absolute; width:950px; height:30px; padding:0em; top:10px; left:0px; border-style:solid; border-width:0px;  display:block;">



<table width="950px">
<tr>
<td align="left" width="475px"><a href="../index.php"><img src="../img/arrow-left-national.gif" /><font color="#FFFFFF" ><b>National Home </b></font></a> 
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

<div id="header" style="background-color:#ffffff; position:absolute; width:950px; height:2654px; padding:0em; top:32px; left:0px; border-style:solid; border-width:0px;">

<!-- Div for header -->

<div id="header" style=" background-image:url(../img/Untitled-4.gif); background-repeat:repeat-x; position:absolute; width:950px; height:150px; padding:0em; top:0px; left:0px; border-style:solid; border-width:0px;">

<div style="height:100px; width:600px; position:absolute; top:10px; left:40px;">
<h1><font color="#000000">Uk Local Business Directory</font></h1>
</div>


<div style="height:100px; width:600px; position:absolute; top:30px; left:680px;">
<img src="../img/topbanner-pin.png" />
</div>

<div style="height:100px; width:600px; position:absolute; top:10px; left:700px;">
<p><h1><font color="#FFFFFF"><?php echo @$c; ?></font></h1></p>
</div>

<div style="height:100px; width:600px; position:absolute; top:60px; left:800px;">
<a style="" href="../allcities.php"><img src="../img/topbanner-changelocation.png" /></a>
</div>


</div>




<!-- Div for NAV BAR -->

<div id="header" style="  position:absolute; width:950px; height:38px; padding:0em; top:80px; left:4px; border-style:solid; border-width:0px;">


<div id="menubar">
<ul>
<li class="firstitem"><img src="../images/menu-left.png" width="14" height="38" ></li>
<li id="house"><a href="../city/<?php echo $city_rep; ?>">Local Home</a></li>
<li id="business-dir"><a href="../business-dir/<?php echo $city_rep;?>">Business Directory</a></li>
<li id="photo"><a href="../city/photos/c/<?php echo $city_rep; ?>">Local Photos</a></li>
<li id="wolfram"><a href="../city/events/c/<?php echo $city_rep; ?>">Local Event</a></li>
<li id="key"><a href="../city/property/c/<?php echo $city_rep; ?>">Local Property</a></li>

<?php if(@$_SESSION['uid']!=""){ 
echo "<li id='add'><a href='../add-business/index.php'>Add Your Business</a></li>";
echo "<li id='banda'><a href='../user/index.php'>Account</a></li>";
}else{
echo "<li id='add'><a href='../login.php'>Add Your Business</a></li>";
echo "<li id='banda'><a href='../login.php'>Login</a></li>";
}
?>
<li class="lastitem" ><img src="../images/menu-right.png" width="14" height="38" ></li>

</ul>
</div>


<div id="header" style="  position:absolute; width:800px; height:25px; padding:0em; top:46px; left:4px; border-style:solid; border-width:0px; ">
<font color="#8DA7C2" size="1">You are Here: <a href="../city/<?php echo $city_rep; ?>"> <?php echo $first_city_cap; ?> </a> >  <a href="../business-dir/<?php echo $city_rep; ?>"> Business <?php echo $c ?> Directory</a> > 
<a href="../cities/uk/c/<?php echo $city_rep; ?>/bid/<?php echo $sub_id; ?>"><?php echo $sub_cat_name;?></a> > <?php echo $sBusinessName; ?> in <?php echo $c;?> </font>
</div>

<!--<div id="header" style="  position:absolute; width:750px; height:90px; padding:0em; top:44px; left:140px; border-style:solid; border-width:0px; ">
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
</div>-->

<!--
<img src="../nav/nav-localhome-top.gif" alt="" />
<img src="../nav/nav-business-top.gif" alt="" />
<img src="../nav/nav_photos_top.gif" alt="" />
<img src="../nav/nav-youraccount-top.gif" alt="" />
<img src="../nav/nav-property-bot.gif" alt="" />
-->

</div>