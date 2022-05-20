<?php include 'picture_header.php';?>
<?php include 'photo-leftbar.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:1870px; width:750px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:156px; float:left; background-color:#ffffff;" >

<table>
<tr>
<td><h1><?php echo $c; ?> Photo Gallery</h1></td>
<td align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php
if(@$_SESSION['fname']!=""){
echo "<a href='../../../user/add-photo.php'><img src='../../img/upload-photo.png' /></a>";
}else{
echo "<a href='../../../login.php'><img src='../../img/upload-photo.png' /></a>";
}
?>
</td>
</tr>
</table>



<table bgcolor="#F5FBFF">
<tr>
<td>
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
</td>
</tr>

<tr>
<td>
<div id="showcase" class="showcase">
<?php
$city_rep1=str_replace('+',' ',$c);
$res_pic=mysql_query("SELECT * FROM city_image WHERE city='$city_rep1' and Active='1' ");
$num_rows_p=MYSQL_NUM_ROWS($res_pic);
?>

                        
		<?php
		$i=0;
		while($i<$num_rows_p)
		{
		$pic=mysql_result($res_pic,$i,"image");
		?>
		 <!-- <img alt="pic of <?php echo $c; ?>" src="../uploads/<?php //echo $pic; ?>" /> -->
 <!-- Each child div in #showcase with the class .showcase-slide represents a slide. -->
		<div class="showcase-slide">
			<div class="showcase-content">
				<img src="../../../uploads/<?php echo $pic; ?>" alt="01" width="700px" height="470px" />
			</div>

			<div class="showcase-thumbnail">
				<img src="../../../uploads/<?php echo $pic; ?>" alt="01" width="140px" height="100px" />
				<!-- The div below with the class .showcase-thumbnail-caption contains the thumbnail caption. -->
				<!--<div class="showcase-thumbnail-caption">Caption Text</div>-->
				<!-- The div below with the class .showcase-thumbnail-cover is used for the thumbnails active state. -->
				<!-- <div class="showcase-thumbnail-cover"></div> -->
			</div>
			<!-- Put the caption content in a div with the class .showcase-caption -->
			<div class="showcase-caption">
				<!-- <h2>Be creative. Get Noticed!</h2>-->
			</div>
		</div>
 
 		<?php
		$i++;
		}
		?>
        

	</div>
</td>
</tr>

<tr>
<td>
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
</td>
</tr>

</table>
     
     <br /><br />
     
    <p> Welcome to most diverse and wanted photo gallery of <?php echo $c;?>. Now you can save this best collections of high resolution wallpapers and pcitures of <?php echo $c;?> on mobile and desktop. By following easy step you will able to share beautiful collection of different area of <?php echo $c;?> in our photo gallery section. </p>
     
     <h3>How to share pictures of <?php echo $c;?> different area and town</h3>
     
     <ul>
     <li> <a href="../../../login.php">Login</a> or <a href="../../../register.php">register</a> now</li>
     <li>Go to member area after login</li>
     <li>Click on Upload Photos button</li>
     <li>Upload your favourite collections of <?php echo $c;?> different area</li>
     <li>Your pictures will appear after our admin approve</li>
     </ul>
     
        
<!-- -->
</div>

<?php include 'footer-photos.php' ?>
