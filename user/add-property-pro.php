<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="main" style=" height:900px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:950px; width:540px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:10px; top:0px; background-color:#F5FBFF;" >

<center><h1><font color="#32A4D5">Thanks for submitting Property !!</font></h1></center>

Admin will review the Property and approve within 4 hours.<font color="#EE0000"> You will notify on your email address.</font>


<center><script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* blue add 336&#42;280 */
google_ad_slot = "2674535903";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></center>

<?php
 
 $un=uniqid();
 
 $data = @file_get_contents($_FILES['form_data']['tmp_name']);
 $data = mysql_real_escape_string($data);
 $name  = $_FILES['form_data']['name'];
 $type  = $_FILES['form_data']['type'];
 $size  = $_FILES['form_data']['size'];
 
 $category  = $_POST['category'];
 $type  = $_POST['type'];
 $address  = $_POST['address'];
 $town  = $_POST['town'];
 $city  = $_POST['city'];
 $code  = $_POST['code'];
 $bedrooms  = $_POST['bedrooms'];
 $price  = $_POST['price'];
 $way  = $_POST['way'];
 $name1  = $_POST['name1'];
 $number  = $_POST['number'];
 $pdesc  = $_POST['desc'];
  $title1  = $_POST['title1'];
 
 
 $name=$un.$name;
// $uid=$_SESSION['uid'];
 
// $date=date("d/m/Y");
 
// echo $title;
if($city!="-1")
{
 if($data=="")
 {
 $status="open";
 $pp="no.jpg";
mysql_query("INSERT INTO property (category,type,address,town,city,code,bedrooms,price,way,image_url,name1,number,pdesc,title,Active) VALUES ('$category','$type','$address','$town','$city','$code','$bedrooms','$price','$way','$pp','$name1','$number','$pdesc','$title1','0')");
 echo "<center><font size='+1' color='#40AB05'>Your Property Added Succesffully </font></center>";
 }
 else if($data!="")
 {
 $status="open";
mysql_query("INSERT INTO property (category,type,address,town,city,code,bedrooms,price,way,image_url,name1,number,pdesc,title,Active) VALUES ('$category','$type','$address','$town','$city','$code','$bedrooms','$price','$way','$name','$name1','$number','$pdesc','$title1','0')");
  echo "<center><font size='+1' color='#40AB05'>Your Property Added Succesffully </font></center>";
  }
 }
 else{
 echo "<center><font size='+1' color='#40AB05'>Please Select City First </font></center>";
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
$n_width=160;          // Fix the width of the thumb nail images
$n_height=110;         // Fix the height of the thumb nail imaage
 
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

$email="nabeel.nasar1@gmail.com";
$subject="New property request";
$message="Approve or disapprove new property request";
$senderemail="From: ".$_SERVER['SERVER_NAME']."@".$_SERVER['SERVER_NAME'];
@mail($email, "$subject", $message, $senderemail );

?>


<!-- --->

</div>

<!-- -->



</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
