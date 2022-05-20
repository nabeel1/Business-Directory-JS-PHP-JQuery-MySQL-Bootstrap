<?php  include "config.php" ?> 
<html>
<head>
</head>

<body

<br />
<br />
<br />
<br />
<br />



<center>
<form method="post" action="#" id="login_form" />  
        UserName :
        <input type="text" name="username" id="username" size="14" />
        <br /><br /> Password :
        <input type="password" name="password" id="password" size="14" />
        <br /><br />
        <input name="submit" type="submit" id="submit"
 style="background-color: #CCFFFF; 
 border-top: 2px solid #5f6c4d; 
 border-right: 2px solid #000000; 
 border-bottom: 2px solid #000000; 
 border-left: 2px solid #5f6c4d;
 width: 80px; height: 24px;
 font-weight: bold;" value="Login" />


<!--#######     Login   ######### -->	  
	  
	<?php
	 if (isset($_POST["submit"])) {
	
	$user=addslashes($_POST["username"]);
	$pass=addslashes($_POST["password"]);
	
	$res = mysql_query("SELECT username,password FROM admin WHERE username='$user' AND password='$pass' ");
	$no_rows=MYSQL_NUM_ROWS($res);
	$i=0;
	if($no_rows>0)
	{	
	
	$_SESSION['value']=1;
	$_SESSION['user']=$user;
	
	echo "<script type='text/javascript'>
window.location = 'main.php';
</script>";
	}
	else
	  echo "<br><font color='red'> 	 You Have Enter Wrong Username Or Password Please Try again</font>";
	 } 
	 ?>  

 
 </center>


 
 </body>
 </html>