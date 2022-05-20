<?php include 'header.php';?>
<?php include 'leftbar.php';?>

<!-- Div for slider show -->





<!-- -->





<div id="leftbar" style=" height:900px; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:110px; top:156px; float:left; background-color:#ffffff;" >




<div style=" position:absolute; left:40px;">



<?php

 

 $un=uniqid();

 

 $data = @file_get_contents($_FILES['form_data']['tmp_name']);
 $data = mysql_real_escape_string($data);
 $name  = $_FILES['form_data']['name'];
 $type  = $_FILES['form_data']['type'];
 $size  = $_FILES['form_data']['size'];

 

 $bid  = strip_tags(addslashes($_POST['bid']));

 //$m  = strip_tags(addslashes($_POST['m']));

 //$cdesc  = strip_tags(addslashes($_POST['cdesc']));

 $video  = $_POST['video'];
 $website  = strip_tags(addslashes($_POST['website']));
 $cat2  = $_POST['cat2'];
 $cat3  = $_POST['cat3'];
 $cat4  = $_POST['cat4'];



 $today = mktime(0,0,0,date("m"),date("d"),date("Y"));
 $tom = mktime(0,0,0,date("m"),date("d"),date("Y")+1);

 

 

 $name=$un.$name;

// $uid=$_SESSION['uid'];

 

// $date=date("d/m/Y");

 

// echo $title;

 if($data=="")

 {

 $status="open";

 $pp="no-logo.jpg";

mysql_query("UPDATE tblbusinesses SET sUrl='$website' ,video='$video' , dSubStartDate='$today' , dSubEndDate='$tom',iIndustry2='$cat2' ,iIndustry3='$cat3' ,iIndustry4='$cat4' ,image_url='$pp' WHERE id='$bid' ");


 }

 else if($data!="")

 {

 $status="open";

mysql_query("UPDATE tblbusinesses SET  sUrl='$website' ,video='$video' , dSubStartDate='$today' , dSubEndDate='$tom',iIndustry2='$cat2' ,iIndustry3='$cat3' ,iIndustry4='$cat4' ,image_url='$name' WHERE id='$bid' ");




  }

 



 

 $add="../org-pro-pic/".$name; // the path with the file name where the file will be stored, upload is the directory name. 

 if(move_uploaded_file ($_FILES['form_data']['tmp_name'],$add)){	

  

 	$id= mysql_insert_id(); 

 	// print "<p>File ID: <b>$id</b><br>"; 

 	// print "<p>File Name: <b>$name</b><br>"; 

 	// print "<p>File Size: <b>$size</b><br>"; 

 	// print "<p>File Type: <b>$type</b><p>"; 

 	// print "To upload another file <a href='getfile.htm'>Click Here</a>";  

	// echo "Successfully uploaded the mage";

 }

 ///////// Start the thumbnail generation//////////////

$n_width=120;          // Fix the width of the thumb nail images

$n_height=120;         // Fix the height of the thumb nail imaage

 

 $tsrc="../resize-pro-pic/".$name;   // Path where thumb nail image will be stored

 

 //mysql_query("UPDATE user SET  pic_name = '$name' , type='$type' WHERE  uid= '$uid' ");

 

//echo $tsrc;

if (!($_FILES['form_data']['type'] =="image/jpeg" OR $_FILES['form_data']['type']=="image/gif" OR $_FILES['form_data']['type']=="")){echo "Your uploaded file must be of JPG or GIF. Other file types are not allowed<BR>";

exit;}

/////////////////////////////////////////////// Starting of GIF thumb nail creation///////////

if (@$_FILES['form_data']['type']=="image/gif")

{

$im=ImageCreateFromGIF($add);

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);                  // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);

if (function_exists("imagegif")) {

Header("Content-type: image/gif");

ImageGIF($newimage,$tsrc);

}

elseif (function_exists("imagejpeg")) {

Header("Content-type: image/jpeg");

ImageJPEG($newimage,$tsrc);

}

chmod("$tsrc",0777);

}////////// end of gif file thumb nail creation//////////



////////////// starting of JPG thumb nail creation//////////

if($_FILES['form_data']['type']=="image/jpeg"){

$im=ImageCreateFromJPEG($add); 

$width=ImageSx($im);              // Original picture width is stored

$height=ImageSy($im);             // Original picture height is stored

$newimage=imagecreatetruecolor($n_width,$n_height);                 

imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);

ImageJpeg($newimage,$tsrc);

chmod("$tsrc",0777);

}





?>




			<h2>
			<center>
			Saving Information....Opening Payment Section<br />
			<img src="img/loading1.gif" /> <img src="img/loading2.gif" /> <img src="img/loading1.gif" />
			</center>
		</h2>
        <center>If you are not redirected in 5 seconds, please <a href="pay-top.php?bid=<?php echo $bid;?>">click here</a></center>




</div>



<!-- -->



<?php

echo "<script type='text/javascript'>
		window.location = 'pay-top.php?bid=$bid';
	</script>";





?>





</div>





<?php //include '../footer.php' ?>

