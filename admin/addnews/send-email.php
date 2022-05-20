<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >


<table align="center">
<form action="send-email-pro.php" method="post">

<?php
$id="1";
$res=mysql_query("SELECT * FROM news WHERE id='$id'");
$no_rows=MYSQL_NUM_ROWS($res);
$message=mysql_result($res,0,"message");
?>


<tr height="40px"><td>Message</td>
<td><textarea name="message" cols="60" rows="20"><?php echo $message;?></textarea></td>
</tr>



<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Update News" /></td>
</tr>


</form>
</table>
<!-- -->

</div>


<?php include '../footer.php' ?>
