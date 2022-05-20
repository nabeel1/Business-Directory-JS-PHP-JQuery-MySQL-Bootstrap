<?php include 'header.php';?>
<?php include 'right-bar.php';?>



<div id="leftbar" style=" height:900px; width:310px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:306px; top:100px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:400px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:0px; top:20px;" >

<?php

@$password=addslashes($_REQUEST['password1']);
@$username=addslashes($_REQUEST['username1']);

@$password12=addslashes($_REQUEST['password12']);
@$username12=addslashes($_REQUEST['username12']);

if($password!="" and $username!="")
{
$res=mysql_query("SELECT * FROM user WHERE email='$username' AND password='$password'");
$no_rows=MYSQL_NUM_ROWS($res);
}
else{
$res=mysql_query("SELECT * FROM user WHERE email='$username12' AND password='$password12'");
$no_rows=MYSQL_NUM_ROWS($res);

}

if($no_rows!="")
{
$status=mysql_result($res,0,"status");

	if($status==0)    // mean active user
	{
		$fname=mysql_result($res,0,"fname");
		$lname=mysql_result($res,0,"lname");
		$id=mysql_result($res,0,"id");
		$city=mysql_result($res,0,"city");
		
	 	$_SESSION['fname']=$fname;
		$_SESSION['lname']=$lname;
		$_SESSION['uid']=$id;
		$_SESSION['city']=$city;	
		?>
		<h2>
			<center>
			Loading....Your profile<br />
			<img src="img/loading1.gif" /> <img src="img/loading2.gif" /> <img src="img/loading1.gif" />
			</center>
		</h2>
        <center>If you are not redirected in 5 seconds, please <a href="user/index.php">click here</a></center>

<script type="text/JavaScript">
setTimeout("location.href = 'user/index.php';",4000);
</script>
		<?php
	   // javascript code for take to through user area
	}
	
		if($status==1)     // 1 mean activation link 
	{
	   echo "<font size='+2' color='red'>Please Activate your account first. For activation Link see your <u>Inbox or Spam Box</u></font>";
	}
	
	if($status==2)         // ban from admin
	{
	   echo "<font size='+2' color='red'>Your Account is Ban By Admin Please contact at webmaster@".$_SERVER['SERVER_NAME']."</font>";
	}


}   // end of main if




if($no_rows=="")
{
echo "<font size='+2'>Wrong Email and Password</font><br /><br /> <a href='ret-login.php'>Click Here to Retrieve Your Password</a>";
}

?>




</div>

<!-- -->
<br /><br /><br /><br /><br /><br /><br /><br /><br />
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
</script>

</div>

<?php include 'leftbar.php';?>
<?php include 'footer.php' ?>
