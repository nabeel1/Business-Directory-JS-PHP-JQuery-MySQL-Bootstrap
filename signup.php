<?php include_once 'config.php'; 


$fname=strip_tags(addslashes($_POST['fname']));
$lname=strip_tags(addslashes($_POST['lname']));
$pass=strip_tags(addslashes($_POST['pass']));
$email=strip_tags(addslashes($_POST['email']));
$location=strip_tags(addslashes($_POST['location']));


$random=rand(10,500);
$status=1;

mysql_query("INSERT INTO user ( password , fname , lname , email, city,random,status)VALUES ('$pass', '$fname' , '$lname' ,'$email' ,'$location','$random','$status')");


$res = mysql_query("SELECT * FROM user WHERE email='$email' ");
$no_rows=MYSQL_NUM_ROWS($res);

$id=mysql_result($res,0,"id");	
$subject="For ".$_SERVER['SERVER_NAME']." Account Activation";
$senderemail="From: ".$_SERVER['SERVER_NAME']."@".$_SERVER['SERVER_NAME'];


$message="Dear ".$fname." ".$lname.",
\n Thanks for registering on ".$_SERVER['SERVER_NAME']." To complete your registration we need you to activate your account. To do this simply click the link below or copy and paste it exactly into your browser's address bar.\n

http://".$_SERVER['SERVER_NAME']."/confirm-register.php?uid=".$id."&c=".$random;



                 mail($email, "$subject", $message, $senderemail );
  
  $subject1="New Registration ".$subject;
    
	mail("nabeel.nasar1@gmail.com", "$subject1", $message, $senderemail );


?>