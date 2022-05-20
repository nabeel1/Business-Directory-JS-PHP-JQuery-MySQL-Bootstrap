<?php include 'header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->




<!-- -->


<div id="main" style=" height:1400px; width:550px; padding: 0em; border-style:solid; border-width:1px; border-color:#B8B8B8; position:absolute; left:200px; top:216px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:524px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:30px; top:20px;" >

<h2>Subscribe  to Citybusinessdirectory</h2>
<br />


<?php
$email=strip_tags(addslashes($_POST['email']));

?>

<table align="center">
<form action="add-email-pro.php" method="post">
<input type="hidden" name="c" id="c" value="<?php echo $c;?>" />
<tr height="40px"><td><b>Enter Email</b> </td>
<td width="50px"><input type="text" id="email" name="email" value="<?php echo $email; ?>" size="40" ></td>
</tr>



<tr height="40px"><td></td>
<td width="50px"><input type="submit" name="submit" value="Subscribe Email" /></td>
</tr>


</form>
</table>





</div>

<!-- -->
















</div>

<?php include 'rightbar.php';?>

<?php include 'footer.php' ?>
