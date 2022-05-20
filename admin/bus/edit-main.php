<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >

<?php

$id=$_REQUEST['id'];

$res=mysql_query("SELECT * FROM main_category WHERE id='$id'");
$no_rows=MYSQL_NUM_ROWS($res);

$id=mysql_result($res,0,"id");
$cat=mysql_result($res,0,"category");
$mtitle=mysql_result($res,0,"mtitle");
$mdesc=mysql_result($res,0,"mdesc");
$mkeyword=mysql_result($res,0,"mkeyword");
$pdesc=mysql_result($res,0,"pdesc");

?>



<table align="center">

<form action="edit-main-pro.php" method="post">
<input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
<input type="hidden" name="cat1" id="cat1" value="<?php echo $cat; ?>" />
<tr height="40px"><td>Category Name<font color="#FF0000">*</font> : </td>
<td><input type="text" id="cat" name="cat" size="50" value="<?php echo $cat; ?>" ></td>
</tr>


<tr height="40px"><td>Description<font color="#FF0000">*</font> : </td>
<td><textarea name="cdesc" id="cdesc" cols="50" rows="10"><?php echo $pdesc; ?></textarea></td>
</tr>

<tr height="40px"><td>Meta Title: </td>
<td><input type="text" id="title" name="title" size="60" value="<?php echo $mtitle; ?>" ></td>
</tr>

<tr height="40px"><td>Meta Description : </td>
<td><textarea name="mdesc" id="mdesc" cols="40" rows="6"><?php echo $mdesc; ?></textarea></td>
</tr>

<tr height="40px"><td>meta Keyword : </td>
<td><textarea name="keyword" id="keyword" cols="40" rows="6"><?php echo $mkeyword; ?></textarea></td>
</tr>

<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Edit Main Category" /></td>
</tr>


</form>


</table>



<!-- -->

</div>


<?php include '../footer.php' ?>
