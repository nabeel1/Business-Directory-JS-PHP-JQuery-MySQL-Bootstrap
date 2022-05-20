<?php include 'header.php';?>


<div id="leftbar" style=" height:900px; width:710px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:3px; top:100px; float:left; background-color:#ffffff;" >


<h1>Thanks for sending us query</h1>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

We will review your query and act accordingly within 5 hours.

<?php

$email=$_POST['email'];
$phone=$_POST['phone'];
$cat=$_POST['cat'];
$desc=$_POST['desc'];


$email_temp="nabeel.nasar1@gmail.com";
$subject="New Query request";
$message="Email: ".$email." \n Phone: ".$phone." \n category: ".$cat." \n descrption: ".$desc;
$senderemail="From: ".$_SERVER['SERVER_NAME']."@".$_SERVER['SERVER_NAME'];
@mail($email_temp, "$subject", $message, $senderemail );


?>

<!-- -->

</div>

<?php include 'leftbar.php';?>
<?php include 'footer.php' ?>
