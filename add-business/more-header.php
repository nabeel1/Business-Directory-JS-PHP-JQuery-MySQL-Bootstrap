<?php  include '../config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="../style.css" rel="stylesheet" />

<link type="text/css" href="menubar.css" rel="stylesheet" />

  <script type="text/javascript" src="jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
 
 
 <?php
 $bid=$_REQUEST['bid'];
 $m=$_REQUEST['m'];
 $rand=uniqid();
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
		
		upload_url: "upload-file.php?bid=<?php echo $bid; ?>&r=<?php echo $rand; ?>",
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

 
</head>

<body bgcolor="#C1CDE1" >
<!-- div for centering -->

<div style="width:100%; height:100%; border:thick #990033;">

<!-- div for relative  -->

<div style="margin-left:auto; margin-right:auto; width:950px; height:auto; position:relative; background-color:#0033FF; border-width:3px; border-color:#33CC99;">

<!-- Main Div Menu -->

<div id="first-main" style="background-color:#B5C5B6; position:absolute; width:950px; height:30px; padding:0em; top:10px; left:0px; border-style:solid; border-width:0px;  display:block;">




<table width="950px">
<tr>
<td align="left" width="475px"><a href="../index.php"<font color="#FFFFFF" ><b>National Home </b></font></a> 
<a href="../feed/city.php?c=<?php echo $c; ?>"> <img src="../rss.png" height="10"> </a>
</td>
<td align="right" width="475px"><font color="#FFFFFF">
<?php 
if(@$_SESSION['fname']!=""){
 echo "<a href='../contactus.php'>Conatct us</a> | <a href='../user/index.php'>My Account</a> | Welcome ".$_SESSION['fname'];
echo " ";
echo $_SESSION['lname']." | <a href='../logout.php'>Logout</a>";
}
else
{
echo "<a href='../login.php'>Login</a> | <a href='../register.php'>Become A Member</a> | <a href='../contactus.php'>Contact us</a>";
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

<div id="header" style="background-color:#ffffff; position:absolute; width:950px; height:1204px; padding:0em; top:32px; left:0px; border-style:solid; border-width:0px;">

<!-- Div for header -->

<div id="header" style=" background-image:url(img/Untitled-5.gif); background-repeat:repeat-x; position:absolute; width:950px; height:150px; padding:0em; top:0px; left:0px; border-style:solid; border-width:0px;">



<div style="height:100px; width:600px; position:absolute; top:10px; left:40px;">
<img src="../logo.gif" />
</div>



</div>




<!-- Div for NAV BAR -->

<div id="header" style="  position:absolute; width:950px; height:38px; padding:0em; top:154px; left:4px; border-style:solid; border-width:0px;">

<?php
$c=@$_SESSION['city'];
?>

<div id="menubar">
<ul>
<li class="firstitem"><img src="images/menu-left.png" width="14" height="38" ></li>
<li id="house"><a href="../city/index.php?c=<?php echo $c; ?>">Local Home</a></li>
<li id="business-dir"><a href="../business-dir/index.php?c=<?php echo $c; ?>">Business Directory</a></li>
<li id="photo"><a href="../city/photos.php?c=<?php echo $c; ?>">Local Photos</a></li>
<li id="wolfram"><a href="../city/event-details.php?c=<?php echo $c; ?>">Local Event</a></li>
<li id="key"><a href="../city/property-details.php?c=<?php echo $c; ?>">Local Property</a></li>

<?php if(@$_SESSION['uid']!=""){ 
echo "<li id='add'><a href='index.php'>Add Your Business</a></li>";
echo "<li id='banda'><a href='../user/index.php'>Account</a></li>";
}else{
echo "<li id='add'><a href='../login.php'>Add Your Business</a></li>";
echo "<li id='banda'><a href='../login.php'>Login</a></li>";
}
?>
<li class="lastitem" ><img src="images/menu-right.png" width="14" height="38" ></li>

</ul>
</div>

<!--
<img src="../nav/nav-localhome-top.gif" alt="" />
<img src="../nav/nav-business-top.gif" alt="" />
<img src="../nav/nav_photos_top.gif" alt="" />
<img src="../nav/nav-youraccount-top.gif" alt="" />
<img src="../nav/nav-property-bot.gif" alt="" />
-->

</div>