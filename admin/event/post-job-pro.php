<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:900px; width:740px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:210px; top:196px; float:left; background-color:#ffffff;" >

<br /><br />

<center><font size="+2" color="#EB2E9F">Processing the JOB !!</font></center>

<br />
<br />

<div style=" position:absolute; left:40px;">

<?php
 
 $un=uniqid();
 
 $data = @file_get_contents($_FILES['form_data']['tmp_name']);
 $data = mysql_real_escape_string($data);
 $name  = $_FILES['form_data']['name'];
 $type  = $_FILES['form_data']['type'];
 $size  = $_FILES['form_data']['size'];
 
 $category  = $_POST['category'];
 $form_day  = $_POST['form_day'];
 $form_month  = $_POST['form_month'];
 $form_year  = $_POST['form_year'];
 $end_day  = $_POST['end_day'];
 $end_month  = $_POST['end_month'];
 $end_year  = $_POST['end_year'];
 $event_name  = $_POST['event_name'];
 $event_desc  = $_POST['event_desc'];
 
  $event_email  = $_POST['event_email'];
  $event_address  = $_POST['event_addr'];
 
 $name1  = $_POST['name1'];
 $number  = $_POST['number'];
 $city  = $_POST['city'];
 
 $start_date=$form_month."/".$form_day."/".$form_year;
  $end_date=$end_month."/".$end_day."/".$end_year;
 
 $today_start = strtotime($start_date);
 $end_start = strtotime($end_date);
 
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
mysql_query("INSERT INTO event (category,start,end,event_name,event_desc,city,contact_name,contact_num,image_url,e_email,e_address) VALUES ('$category','$today_start','$end_start','$event_name','$event_desc','$city','$name1','$number','$pp','$event_email','$event_address')");
 echo "<center><font size='+1' color='#40AB05'>Your EVENT Added Succesffully </font></center>";
 }
 else if($data!="")
 {
 $status="open";
mysql_query("INSERT INTO event (category,start,end,event_name,event_desc,city,contact_name,contact_num,image_url,e_email,e_address) VALUES ('$category','$today_start','$end_start','$event_name','$event_desc','$city','$name1','$number','$name','$event_email','$event_address')");

  echo "<center><font size='+1' color='#40AB05'>Your EVENT Added Succesffully </font></center>";
  }
 }
 else{
 echo "<center><font size='+1' color='#40AB05'>Please Select City First </font></center>";
 }
 
 $add="../../org-pro-pic/".$name; // the path with the file name where the file will be stored, upload is the directory name. 
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
 
 $tsrc="../../resize-pro-pic/".$name;   // Path where thumb nail image will be stored
 
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


</div>

<!-- -->


<script type="text/javascript">
//window.location = "my-job.php";
</script>

<br />
<a href="add-event.php">GO Back</a>




</div>


<?php include '../footer.php' ?>
