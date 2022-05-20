<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >


<table align="center">

<?php

$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
$lid=$_REQUEST['lid'];
$email1=$_REQUEST['email1'];
$email2=$_REQUEST['email2'];

echo "email1".$email1;
echo "email2".$email2;

// Always set content-type when sending HTML email
$headers = "From: citybusinessdirectory@citybusinessdirectory.co.uk \r\n";
$headers .= "Reply-To: citybusinessdirectory@citybusinessdirectory.co.uk  \r\n";
$headers .= "MIME-Version: Citybusinessdirectory" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

 //	mail($email1, "$subject", $message, "From: citybusinessdirectory@citybusinessdirectory.co.uk" );

 //	mail($email2, "$subject", $message, "From: citybusinessdirectory@citybusinessdirectory.co.uk" );

 mail($email1, "$subject", $message, $headers ); 
 mail($email2, "$subject", $message, $headers );


?>


</table>
<!-- -->

<br />
<a href="premium-listing.php">GO Back</a>


</div>


<?php include '../footer.php' ?>
