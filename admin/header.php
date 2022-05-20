<?php include 'config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<?php 

if(@$_SESSION['user']=="")
{
	echo "<script type='text/javascript'>
window.location = 'index.php';
 </script>"; 
}
?>


<!-- File for button Menu -->

<link href="style.css" rel="stylesheet" media="all" />

<!-- -->
</head>

<body>
<!-- div for centering -->

<div style="width:100%; height:100%; border:thick #990033;">

<!-- div for relative  -->

<div style="margin-left:auto; margin-right:auto; width:950px; height:auto; position:relative; background-color:#0033FF; border-width:3px; border-color:#33CC99;">

<!-- Div for header -->

<div id="header" style="background-color:#ffffff; position:absolute; width:950px; height:100px; padding:0em; top:0px; left:0px; border-style:solid; border-width:1px;">


<div style="height:100px; width:300px; position:absolute; top:0px; left:0px;">
<h1> <font style=" color:#26B4D9; font-family:Geneva, Arial, Helvetica, sans-serif";>Local City</font></h1>
</div>


<div style="height:100px; width:300px; position:absolute; top:40px; left:50px;">
<h4> <font style=" color:#26B4D9; font-family:Geneva, Arial, Helvetica, sans-serif";>Control Your Site</font></h4>
</div>

<div style="height:100px; width:300px; position:absolute; top:20px; left:600px;">
<h4> <a href="logout.php"><font style=" color:#FF0000; font-family:Geneva, Arial, Helvetica, sans-serif";><u>Logout</u></font></h4>
</div>



</div>

