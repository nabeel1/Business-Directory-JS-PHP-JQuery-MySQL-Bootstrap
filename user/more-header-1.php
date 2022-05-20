<?php  include '../config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="../style.css" rel="stylesheet" />
<link type="text/css" href="menubar.css" rel="stylesheet" />

  <script type="text/javascript" src="jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
$userid=$_SESSION['uid'];
@$res_u=mysql_query("SELECT * FROM user WHERE id='$userid'");
@$fname=mysql_result($res_u,0,"fname");
@$lname=mysql_result($res_u,0,"lname");
?>

<title><?php echo $fname." ".$lname; ?> | Member Area <?php echo $_SERVER['SERVER_NAME'];?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
 
 
 <?php
 @$rand=uniqid();
 @$city=$_SESSION['city']; 
 ?>
 
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/swfupload/swfupload.js"></script>
<script type="text/javascript" src="js/jquery.swfupload.js"></script>

<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/swfupload/swfupload.js"></script>
<script type="text/javascript" src="js/jquery.swfupload.js"></script>
<script type="text/javascript">

$(function(){
	$('#swfupload-control').swfupload({
		
		upload_url: "upload-file-user.php?c=<?php echo $city; ?>&r=<?php echo $rand; ?>",
		file_post_name: 'uploadfile',
		file_size_limit : "1024",
		file_types : "*.jpg;*.png;*.gif",
		file_types_description : "Image files",
		file_upload_limit : 5,
		flash_url : "js/swfupload/swfupload.swf",
		button_image_url : 'js/swfupload/wdp_buttons_upload_114x29.png',
		button_width : 114,
		button_height : 29,
		button_placeholder : $('#button')[0],
		debug: false
	})
		.bind('fileQueued', function(event, file){
			var listitem='<li id="'+file.id+'" >'+
				'File: <em>'+file.name+'</em> ('+Math.round(file.size/1024)+' KB) <span class="progressvalue" ></span>'+
				'<div class="progressbar" ><div class="progress" ></div></div>'+
				'<p class="status" >Pending</p>'+
				'<span class="cancel" >&nbsp;</span>'+
				'</li>';
			$('#log').append(listitem);
			$('li#'+file.id+' .cancel').bind('click', function(){
				var swfu = $.swfupload.getInstance('#swfupload-control');
				swfu.cancelUpload(file.id);
				$('li#'+file.id).slideUp('fast');
			});
			// start the upload since it's queued
			$(this).swfupload('startUpload');
		})
		.bind('fileQueueError', function(event, file, errorCode, message){
			alert('Size of the file '+file.name+' is greater than limit');
		})
		.bind('fileDialogComplete', function(event, numFilesSelected, numFilesQueued){
			$('#queuestatus').text('Files Selected: '+numFilesSelected+' / Queued Files: '+numFilesQueued);
		})
		.bind('uploadStart', function(event, file){
			$('#log li#'+file.id).find('p.status').text('Uploading...');
			$('#log li#'+file.id).find('span.progressvalue').text('0%');
			$('#log li#'+file.id).find('span.cancel').hide();
		})
		.bind('uploadProgress', function(event, file, bytesLoaded){
			//Show Progress
			var percentage=Math.round((bytesLoaded/file.size)*100);
			$('#log li#'+file.id).find('div.progress').css('width', percentage+'%');
			$('#log li#'+file.id).find('span.progressvalue').text(percentage+'%');
		})
		.bind('uploadSuccess', function(event, file, serverData){
			var item=$('#log li#'+file.id);
			item.find('div.progress').css('width', '100%');
			item.find('span.progressvalue').text('100%');
			
				var rand=<?php echo "\"$rand\""; ?>
			
			var pathtofile='<a href="../uploads/'+rand+file.name+'" target="_blank" >Uploaded &raquo;</a>';
			item.addClass('success').find('p.status').html('Done!!! | '+pathtofile);
		})
		.bind('uploadComplete', function(event, file){
			// upload has completed, try the next one in the queue
			$(this).swfupload('startUpload');
		})
	
});	

</script>
<style type="text/css" >
#swfupload-control p{ margin:10px 5px; font-size:0.9em; }
#log{ margin:0; padding:0; width:500px;}
#log li{ list-style-position:inside; margin:2px; border:1px solid #ccc; padding:10px; font-size:12px; 
	font-family:Arial, Helvetica, sans-serif; color:#333; background:#fff; position:relative;}
#log li .progressbar{ border:1px solid #333; height:5px; background:#fff; }
#log li .progress{ background:#999; width:0%; height:5px; }
#log li p{ margin:0; line-height:18px; }
#log li.success{ border:1px solid #339933; background:#ccf9b9; }
#log li span.cancel{ position:absolute; top:5px; right:5px; width:20px; height:20px; 
	background:url('js/swfupload/cancel.png') no-repeat; cursor:pointer; }
</style>

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

<body bgcolor="#C1CDE1" >
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

<?php 

if(@$_SESSION['uid']=="")
{
	echo "<script type='text/javascript'>
window.location = '../index.php';
 </script>"; 
}
?>


<!-- -->


<!-- Div for cover background -->

<div id="header" style="background-color:#ffffff; position:absolute; width:950px; height:2104px; padding:0em; top:32px; left:0px; border-style:solid; border-width:0px;">

<!-- Div for header -->

<div id="header" style=" background-image:url(img/Untitled-4.gif); background-repeat:repeat-x; position:absolute; width:950px; height:150px; padding:0em; top:0px; left:0px; border-style:solid; border-width:0px;">


<?php
$c=@$_SESSION['city'];
@$first_city_cap = ucfirst($c);
@$city_rep=str_replace(' ','+',$c);
?>


<div style="height:100px; width:600px; position:absolute; top:5px; left:20px;">
<h1><font color="#000000">Uk Local Business Directory</font></h1>
</div>



<div style="height:100px; width:600px; position:absolute; top:20px; left:660px;">
<img src="../img/topbanner-pin.png" />
</div>

<div style="height:100px; width:600px; position:absolute; top:5px; left:680px;">
<p><h1><font color="#FFFFFF"><?php echo @$first_city_cap; ?></font></h1></p>
</div>

<div style="height:100px; width:600px; position:absolute; top:54px; left:800px;">
<a style="" href="../allcities.php"><img src="../img/topbanner-changelocation.png" /></a>
</div>



</div>




<!-- Div for NAV BAR -->

<div id="header" style="  position:absolute; width:950px; height:38px; padding:0em; top:80px; left:4px; border-style:solid; border-width:0px;">


<div id="menubar">
<ul>
<li class="firstitem"><img src="images/menu-left.png" width="14" height="38" ></li>
<li id="house"><a href="../city/<?php echo $city_rep; ?>">Local Home</a></li>
<li id="business-dir"><a href="../business-dir/<?php echo $city_rep; ?>">Business Directory</a></li>
<li id="photo"><a href="../city/photos/c/<?php echo $city_rep; ?>">Local Photos</a></li>
<li id="wolfram"><a href="../city/event/c/<?php echo $city_rep; ?>">Local Event</a></li>
<li id="key"><a href="../city/property/c/<?php echo $city_rep; ?>">Local Property</a></li>
<?php if(@$_SESSION['uid']!=""){ 
echo "<li id='add'><a href='../add-business/index.php'>Add Your Business</a></li>";
echo "<li id='banda'><a href='index.php'>Account</a></li>";
}else{
echo "<li id='add'><a href='../login.php'>Add Your Business</a></li>";
echo "<li id='banda'><a href='../login.php'>Login</a></li>";
}
?>
<li class="lastitem" ><img src="images/menu-right.png" width="14" height="38" ></li>
</ul>

</div>

<div id="header" style="  position:absolute; width:550px; height:25px; padding:0em; top:46px; left:4px; border-style:solid; border-width:0px; ">
<font color="#DDDDDD">You are Here: <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>">Home</a> > <a href="../city/<?php echo $city_rep; ?>"> <?php echo $first_city_cap; ?> </a> > Member Area</font>
</div>


<!--
<img src="../nav/nav-localhome-top.gif" alt="" />
<img src="../nav/nav-business-top.gif" alt="" />
<img src="../nav/nav_photos_top.gif" alt="" />
<img src="../nav/nav-youraccount-top.gif" alt="" />
<img src="../nav/nav-property-bot.gif" alt="" />
-->

</div>