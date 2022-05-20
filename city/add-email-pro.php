<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:1400px; width:550px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:200px; top:216px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:524px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:30px; top:20px;" >

<h2>Subscribe  to Citybusinessdirectory</h2>
<br />

Thanks for the submission. You will Now Receive Newsletter From Citybusinessdirectory.co.uk

<?php
$email=strip_tags(addslashes($_POST['email']));

mysql_query("INSERT INTO emails (email) VALUES ('$email')");

                 mail("nabeel.nasar1@gmail.com", "Subject: New Subscriber",
  "New email subscribe: $email", "From: citybusinessdirectory@citybusinessdirectory.co.uk" );

?>










</div>

<!-- -->
















</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
