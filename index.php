<?php include 'header.php';?>

<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:1250px; width:710px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:0px; top:100px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:670px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:30px; top:0px;" >

<font size="+2">Find local businesses, upcoming events and properties in your area. </font>


</div>

<!-- -->



<!-- Search bar for city -->

<script type="text/javascript">
function RemoveText()
	{
	document.getElementById("searchbycity").value="";
	}
	</script>

<div id="news" style=" height:50px; width:450px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:30px; top:50px; background-color:#0A4B62;" >

<div style=" position:absolute; top:10px;">
 <form method="post" action="search-city.php" id="search" />  
  <font size="+1" color="#ffffff">&nbsp;Find Your Area:</font>&nbsp;&nbsp;
  <input type="text" name="searchbycity" onclick="RemoveText()" type="submit" id="searchbycity" size="25" value="Search By Town/City"  />
        <input name="city"  type="submit" id="city" value="Search" />
		</form>
</div>


</div>


<div id="news" style=" height:20px; width:140px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:340px; top:100px; background-color:#32A4D5;" >

&nbsp;<a href="allcities.php"><font color="#FFFFFF">Browse A-Z of areas</font></a>


</div>


<!-- -->

<!-- Add Your Business -->

<div id="news" style=" height:50px; width:170px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:500px; top:50px; background-color:#32A4D5;" >

<div style=" position:absolute; top:10px;">

&nbsp;&nbsp;<img src="img/plus.jpg" /><a href="register.php"><font size="+1" color="#FFFFFF"> Add Your Business</font></a><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF">Fast,Easy And Free</font>

</div>


</div>

<!-- -->

<!-- Latest Featured -->

<div id="" style=" height:200px; width:160px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:30px; top:130px; background-color:#EEEEEE; text-align:left; border-bottom-width:thick; border-bottom-color:
#60D314;">


<img src="img/latest-featured.jpg" />
<br /><br />

<?php
$top="top";
$premium="premium";
$res=mysql_query("SELECT id,sBusinessName,iCity FROM tblbusinesses WHERE iPaid='$top' OR iPaid='$premium' ORDER BY id DESC LIMIT 0,8");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$pdesc=mysql_result($res,$i,"sBusinessName");
$id=mysql_result($res,$i,"id");
$city1=mysql_result($res,$i,"iCity");
$res1=mysql_query("SELECT city,id FROM city WHERE id='$city1'");
$city=mysql_result($res1,0,"city");
$desc=substr($pdesc,0,20);
$city_rep=str_replace(' ','+',$city);

echo "&nbsp;&nbsp;<img src='img/article_bullet.png' /> <a href='$city_rep/$id'>$desc</a><br />";
$i++;
}
?>


</div>

<!-- -->

<!-- Your Business -->

<script type="text/javascript">
/*function RemoveText1()
	{
	document.getElementById("username12").value="";
	document.getElementById("password12").value="";
	}
	</script>
	
	<script type="text/javascript">
function RemoveText2()
	{
	document.getElementById("bname").value="";
	document.getElementById("lcity").value="";

	} */
	</script>
	

<div id="" style=" height:200px; width:160px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:200px; top:130px; background-color:#EEEEEE; text-align:left; border-bottom-width:thick; border-bottom-color:
#666666;">

<img src="img/your-business.jpg" />

<table>
<form id="login-main" method="post" action="loginpro.php">

<tr><td>Enter Your Email</td></tr>
<tr>
<td><input type="text" onclick="RemoveText1()" name="username12" id="username12" value="" /></td>
</tr>

<tr><td>Enter Password</td></tr>
<tr>
<td><input type="password" onclick="RemoveText1()" name="password12" id="password12" value="" /></td>
</tr>

<tr><td>
<input type="image" src="img/sign-in.jpg" name="submit-index" align="right" />
</td></tr>
</form>
</table>


</div>

<!-- -->

<!-- Find Business -->

<div id="" style=" height:200px; width:160px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:370px; top:130px; background-color:#EEEEEE; text-align:left; border-bottom-width:thick; border-bottom-color:
#32A4D5;">

<img src="img/find-business.jpg" />

<table>
<form id="search-bus" method="post" action="search-bus.php">

<tr><td>Enter Business Name: </td></tr>
<tr>
<td><input type="text" onclick="RemoveText2()" name="bname" id="bname" value="" /></td>
</tr>


<tr><td>Enter Local City: </td></tr>
<tr>
<td><input type="text" onclick="RemoveText2()" name="lcity" id="lcity" value="" /></td>
</tr>

<tr>
<td align="right">
<input type="submit" name="submit-index" value="Search" align="right" />
</td></tr>
</form>
</table>



</div>

<!-- -->


<!-- Become Memeber -->

<div id="" style=" height:200px; width:160px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:540px; top:130px; background-color:#EEEEEE; text-align:left; border-bottom-width:thick; border-bottom-color:
#04D794;">

<img src="img/become-member.jpg" />

Why join Citylocal?
<ul type="square">
<li>Save Money</li>
<li><a href="register.php">Register – it's free!</a></li>
<li>Post free adverts</li>
<li>Your opinion heard</li>
<li><a href="register.php">Join Free</a></li>
<br />
</ul>


</div>

<!-- -->


<!-- local-events -->

<div id="" style=" height:200px; width:160px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:30px; top:370px; background-color:#EEEEEE; text-align:left; border-bottom-width:thick; border-bottom-color:
#013E5B;">

<img src="img/local-events.jpg" />
<br /><br />

<?php
$res=mysql_query("SELECT id,event_name,city FROM event WHERE Active='1' ORDER BY id DESC LIMIT 0,8");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$event_name=mysql_result($res,$i,"event_name");
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$ee=substr($event_name,0,18);
$city_rep=str_replace(' ','+',$city);
echo "&nbsp;&nbsp;<img src='img/article_bullet.png' /><a href='city/events/eid/$id/c/$city_rep'>$ee</a><br />";
$i++;
}
?>




</div>

<!-- -->

<!-- property -->

<div id="" style=" height:200px; width:160px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:200px; top:370px; background-color:#EEEEEE; text-align:left; border-bottom-width:thick; border-bottom-color:
#40AB05; ">

<img src="img/property.jpg" />
<br /><br />
<?php
$res=mysql_query("SELECT id,pdesc,city,title FROM property WHERE Active='1' ORDER BY id DESC LIMIT 0,8");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$ptitle=mysql_result($res,$i,"title");
$pdesc=mysql_result($res,$i,"pdesc");
$id=mysql_result($res,$i,"id");
$city=mysql_result($res,$i,"city");
$desc=substr($ptitle,0,18);
$city_rep=str_replace(' ','+',$city);
echo "&nbsp;&nbsp;<img src='img/article_bullet.png' /><a href='city/properties/pid/$id/c/$city_rep'>$desc</a><br />";
$i++;
}
?>




</div>

<!-- -->

<!-- Free Listing -->

<div id="" style=" height:200px; width:160px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:370px; top:370px; background-color:#EEEEEE; text-align:left; border-bottom-width:thick; border-bottom-color:
#383AB1;">

<img src="img/free-listings.jpg" />
<br /><br />

<?php
$free="free";

$res=mysql_query("SELECT id,sBusinessName,iCity FROM tblbusinesses WHERE iPaid='$free' ORDER BY id DESC LIMIT 0,8");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$pdesc=mysql_result($res,$i,"sBusinessName");
$id=mysql_result($res,$i,"id");
$city1=mysql_result($res,$i,"iCity");
$res1=mysql_query("SELECT city,id FROM city WHERE id='$city1'");
$city=mysql_result($res1,0,"city");
$desc=substr($pdesc,0,18);
$city_rep=str_replace(' ','+',$city);
echo "&nbsp;&nbsp;<img src='img/article_bullet.png' /><a href='$city_rep/$id'>$desc</a><br />";
$i++;
}
?>
<br />



</div>

<!-- -->

<div id="" style=" height:200px; width:160px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:540px; top:370px; background-color:#EEEEEE; text-align:left; border-bottom-width:thick; border-bottom-color:
#000000; ">

<img src="img/latest-members.jpg" />
<br /><br />


<?php
$res=mysql_query("SELECT id,fname,lname FROM user ORDER BY id DESC LIMIT 0,8");
$num_rows=MYSQL_NUM_ROWS($res);
$i=0;
while($i<$num_rows)
{
$fname=mysql_result($res,$i,"fname");
$id=mysql_result($res,$i,"id");
$lname=mysql_result($res,$i,"lname");

echo "&nbsp;&nbsp;<img src='img/article_bullet.png' /><a href='profile/uid/$id'>$fname $lname</a><br />";
$i++;
}
?>



</div>



<!-- latest-reviews -->

<div id="" style=" height:200px; width:160px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:30px; top:600px; background-color:#EEEEEE; text-align:left; border-bottom-width:thick; border-bottom-color:
#FF8005;">

<img src="img/latest-reviews.jpg" />
<br /><br />

<?php
$free="free";

$res1=mysql_query("SELECT * FROM reviews ORDER BY id DESC LIMIT 0,8");
$num_rows1=mysql_num_rows($res1);

$i=0;
while($i<$num_rows1)
{
$comment=mysql_result($res1,$i,"comment");
$bid=mysql_result($res1,$i,"bid");

@$res=mysql_query("SELECT id,iCity,iPaid,sBusinessName FROM tblbusinesses WHERE id='$bid'");

@$iPaid=mysql_result($res,0,"iPaid");
@$city1=mysql_result($res,0,"iCity");

@$res2=mysql_query("SELECT city,id FROM city WHERE id='$city1'");
@$city=mysql_result($res2,0,"city");
@$desc=substr($comment,0,18);
$city_rep=str_replace(' ','+',$city);
if($iPaid=="free")
{
echo "&nbsp;&nbsp;<img src='img/article_bullet.png' /><a href='$city_rep/$bid'>$desc</a><br />";
}
else{
echo "&nbsp;&nbsp;<img src='img/article_bullet.png' /><a href='$city_rep/$bid'>$desc</a><br />";
}
$i++;
}
?>


</div>

<!-- -->



<!-- Latest Member -->




<!-- Search bar for city -->

<script type="text/javascript">
function RemoveText()
	{
	document.getElementById("searchbycity").value="";
	}
	</script>

<div id="news" style=" height:200px; width:470px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:230px; top:600px; background-color:#F5FBFF;" >

<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal 468&#42;60 */
google_ad_slot = "8481448804";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<br /><br /><br /><br /><br />
Welcome to <b>City44.co.uk Local Business Directory and guide</b>. Become a part of city44 directory and start submitting your business, events and properties for free, so that it become visible on our high traffic. Submit your listing so you can able to generate traffic on your businesses.


</div>


<!-- -->



</div>

<?php include 'leftbar.php';?>

<?php include 'footer.php' ?>
