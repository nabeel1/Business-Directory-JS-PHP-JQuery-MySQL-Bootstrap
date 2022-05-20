<?php include 'header.php';?>

<?php  include 'leftbar-1.php';?>

<!-- Div for slider show -->





<div id="main" style=" height:966px; width:458px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:290px; top:136px; float:left; background-color:#F5FBFF;" >







<table align="center" width="430px">

<tr><td>

<?php

$bus_name=strip_tags(addslashes($_REQUEST['bus-name']));

$cname=strip_tags(addslashes($_REQUEST['cname']));



$address=strip_tags(addslashes($_REQUEST['address']));

$address2=strip_tags(addslashes($_REQUEST['address2']));

$city=strip_tags(addslashes($_REQUEST['city']));

$pcode=strip_tags(addslashes($_REQUEST['pcode']));

$phone=strip_tags(addslashes($_REQUEST['phone']));

$mobile=strip_tags(addslashes($_REQUEST['mobile']));

$fax=strip_tags(addslashes($_REQUEST['fax']));

$email=strip_tags(addslashes($_REQUEST['email']));

$cat=strip_tags(addslashes($_REQUEST['cat']));

$type=strip_tags(addslashes($_REQUEST['type']));

$desc1=strip_tags(addslashes($_REQUEST['desc']));



$img_path="no-logo.jpg";



$bus_len=strlen($bus_name);

$add_len=strlen($address);

$pcode_len=strlen($pcode);

$phone_len=strlen($phone);

$email_len=strlen($email);



$date=date("d/m/Y");

$status=0;

$uid=$_SESSION['uid'];

if($bus_len=="" or $add_len=="" or $pcode_len=="" or $phone_len==""  or $cat=="-1")

{

echo "<font color='#FF0000'>Please <a href='index.php'>go back</a> and fill all (*) Field</font>";

}else{



@$res12=mysql_query("SELECT city,id FROM city WHERE id='$city'");

@$city1=mysql_result($res12,0,"city");

@$city2=str_replace(" ","+",$city1); 

	

	@$res123=mysql_query("SELECT sIndustryName,id FROM tblindustries WHERE id='$cat'");

	@$cate_name=mysql_result($res123,0,"sIndustryName");

	

	

	$title=$bus_name." in ".$city1.",".$bus_name." ".$cate_name;

	$mkeyword=$bus_name." in ".$city1.",".$bus_name." ".$cate_name.",".$bus_name." ".$cate_name." ".$city1;

	$mdesc=$bus_name." ".$cate_name." ".$city1." is featured in city business ".$city1.". Location of ".$bus_name." is ".$address." ".$pcode." ".$city1;



mysql_query("INSERT INTO tblbusinesses (iUserId,sBusinessName,iIndustry,cname,sAddress,sAddress2,iCity,sPostcode,sTelephone,sMobile,sFax,sContactEmail,created,modified,iStatus,iPaid,iFeatured,tDescription,image_url,sMetaTitle,sMetaKeywords,sMetaDescription)VALUES ('$uid','$bus_name', '$cat', '$cname' , '$address' , '$address2' , '$city' , '$pcode' , '$phone','$mobile', '$fax' , '$email', '$date','$date','$status','$type','$type','$desc1','$img_path','$title','$mkeyword','$mdesc')");



@$res=mysql_query("SELECT id FROM tblbusinesses WHERE iUserId=$uid AND sBusinessName='$bus_name'");

@$bid=mysql_result($res,0,"id");


	$subject_premium="Membership for ".$bus_name." ".$_SERVER['SERVER_NAME'];
	$message_premium="<html><body> Dear ".$cname.", <br /><br /> You have requested to buy membership for your business <b>".$bus_name."</b> in ".$_SERVER['SERVER_NAME'].". We will verify payment within 10 hours. if you still not complete payment step then follow below link to complete last step before your business become active. <br /><br /> http://".$_SERVER['SERVER_NAME']."/user/pay-premium.php?bid=".$bid."&uid=".$uid."&c=".$city2." <br /><br />
<b>Benefit to buy membership of a business</b>
<ul>
<li>We promote your business in search engines.</li>
<li>We promote your business in local businesses forum.</li>
<li>Share your business in soical media.</li>
<li>Present your business with slideshow.</li>
<li>You can upload your business video</li>
<li>Your listing appears In All City Pages.</li>
</ul>

<br />

<b>Why to Pay?</b>
<br />
<ul>
<li>We submit your business to 50 social bookmark directory.</li>
<li>Boast traffic on your business while pay once.</li>
<li>Increase your business reneve.</li>
</ul>
<br />
Regards,<br />
Julian Lewis <br />
Marketing Manager <br />
Team ".$_SERVER['SERVER_NAME']." </body></html>";	

///////////////////////////////////

$message_normal="<html><body>
Dear ".$cname.", <br /><br />

		Thanks for adding your business <b>".$bus_name."</b> in ".$_SERVER['SERVER_NAME'].". Now you have great chance to boost more traffic on your business by following simple last step. Buy premium membership to boost double traffic on <b>".$bus_name."</b>. To buy membership follow below link.
       <br /><br />

http://".$_SERVER['SERVER_NAME']."/user/pay-premium.php?bid=".$bid."&uid=".$uid."&c=".$city2." <br /><br />


<b>Benefit to buy membership of a business</b>
<ul>
<li>We promote your business in search engines.</li>
<li>We promote your business in local businesses forum.</li>
<li>Share your business in soical media.</li>
<li>Present your business with slideshow.</li>
<li>You can upload your business video</li>
<li>Your listing appears In All City Pages.</li>
</ul>

<br />

<b>Why to Pay?</b>
<br />
<ul>
<li>We submit your business to 50 social bookmark directory.</li>
<li>Boast traffic on your business while pay once.</li>
<li>Increase your business reneve.</li>
</ul>
<br />


Regards,<br />
Julian Lewis <br />
Marketing Manager <br />
Team ".$_SERVER['SERVER_NAME']."
</body></html>";



	if($type=="free")
	{
	echo "<center><h2><font color='#32A4D5'>Listing Added Successfully</font></h2></center>";
	echo "<a href='../user/index.php'>Visit Member Area</a> | <a href='../$city2/$bid'>View Your Business</a> | <a href='../add-business/index.php'>Add Another Business</a>"; 

	$subject_free="Upgrade Your Business ".$bus_name;

		$headers = "From: ".$_SERVER['SERVER_NAME']."@".$_SERVER['SERVER_NAME']." \r\n";
		$headers .= "Reply-To: ".$_SERVER['SERVER_NAME']."@".$_SERVER['SERVER_NAME']."  \r\n";
		$headers .= "MIME-Version: ".$_SERVER['SERVER_NAME'] . "\r\n";	
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		
		 mail($email, "$subject_free", $message_normal, $headers );
		 mail("nabeel.nasar1@gmail.com", "$subject_free", $message_normal, $headers );
	
	
	$subject12="View Your Business ".$bus_name;;
	$senderemail="From: ".$_SERVER['SERVER_NAME']."@".$_SERVER['SERVER_NAME'];


$message12="Dear ".$cname.",\n Thanks for submitting your business on ".$_SERVER['SERVER_NAME']." View your business at .\n http://".$_SERVER['SERVER_NAME']."/".$city2."/".$bid;

                 mail($email, "$subject12", $message12, $senderemail );
				mail("nabeel.nasar1@gmail.com", "$subject1", $message, $senderemail );

	}

	if($type=="premium")
	{	
		$headers = "From: ".$_SERVER['SERVER_NAME']."@".$_SERVER['SERVER_NAME']." \r\n";
		$headers .= "Reply-To: ".$_SERVER['SERVER_NAME']."@".$_SERVER['SERVER_NAME']."  \r\n";
		$headers .= "MIME-Version: ".$_SERVER['SERVER_NAME'] . "\r\n";	
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		
		 mail($email, "$subject_premium", $message_premium, $headers );
		
	echo "<script type='text/javascript'>
window.location = 'remain-bus.php?bid=$bid';
 </script>"; 

	}

	if($type=="top"){
		
		$headers = "From: ".$_SERVER['SERVER_NAME']."@".$_SERVER['SERVER_NAME']." \r\n";
		$headers .= "Reply-To: ".$_SERVER['SERVER_NAME']."@".$_SERVER['SERVER_NAME']."  \r\n";
		$headers .= "MIME-Version: ".$_SERVER['SERVER_NAME'] . "\r\n";	
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		
		 mail($email1, "$subject_premium", $message_premium, $headers );

		
		echo "<script type='text/javascript'>
window.location = 'remain-bus.php?bid=$bid';
 </script>";

	}





}



?>

</td></tr>

</table>



<table align="center">

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
</tr>
</table>







<?php

/*

--------------------------------------------

 $title contains the title of the page you're sending

 $url is the url of the page

 $debug true print out the debug and show xml call and answer

--------------------------------------------

 the output is an array with two elements:

 status: ok / ko

 msg: the text response from pingomatic

--------------------------------------------

*/

$url="http://www.citybusinessdirectory.co.uk/".$city2."/".$bid;

pingomatic($title,$url,false);

function pingomatic($title,$url,$debug=false) {

	

    $content='<?xml version="1.0"?>'.

        '<methodCall>'.

        ' <methodName>weblogUpdates.ping</methodName>'.

        '  <params>'.

        '   <param>'.

        '    <value>'.$title.'</value>'.

        '   </param>'.

        '  <param>'.

        '   <value>'.$url.'</value>'.

        '  </param>'.

        ' </params>'.

        '</methodCall>';

 

    $headers="POST / HTTP/1.0\r\n".

    "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1) Gecko/20090624 Firefox/3.5 (.NET CLR 3.5.30729)\r\n".

    "Host: rpc.pingomatic.com\r\n".

    "Content-Type: text/xml\r\n".

    "Content-length: ".strlen($content);

 

    if ($debug) nl2br($headers);

 

    $request=$headers."\r\n\r\n".$content;

    $response = "";

    $fs=fsockopen('rpc.pingomatic.com',80, $errno, $errstr);

    if ($fs) {

        fwrite ($fs, $request);

        while (!feof($fs)) $response .= fgets($fs);

        if ($debug) echo "<xmp>".$response."</xmp>";

        fclose ($fs);

        preg_match_all("/<(name|value|boolean|string)>(.*)<\/(name|value|boolean|string)>/U",$response,$ar, PREG_PATTERN_ORDER);

        for($i=0;$i<count($ar[2]);$i++) $ar[2][$i]= strip_tags($ar[2][$i]);

        return array('status'=> ( $ar[2][1]==1 ? 'ko' : 'ok' ), 'msg'=>$ar[2][3] );

    } else {

        if ($debug) echo "<xmp>".$errstr." (".$errno.")</xmp>";

        return array('status'=>'ko', 'msg'=>$errstr." (".$errno.")");

    }

}

?>







</div>



<?php include 'rightbar.php';?>



<?php include 'footer.php' ?>

