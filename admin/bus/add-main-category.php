<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >




<table align="center">
<form action="add-main-category-pro.php" method="post">

<tr height="40px"><td>Category Name<font color="#FF0000">*</font> : </td>
<td><input type="text" id="cat" name="cat" size="50" ></td>
</tr>


<tr height="40px"><td>Description<font color="#FF0000">*</font> : </td>
<td><textarea name="cdesc" id="cdesc" cols="50" rows="10"></textarea></td>
</tr>

<tr height="40px"><td>Meta Title: </td>
<td><input type="text" id="title" name="title" size="60" ></td>
</tr>

<tr height="40px"><td>Meta Description : </td>
<td><textarea name="mdesc" id="mdesc" cols="40" rows="6"></textarea></td>
</tr>

<tr height="40px"><td>meta Keyword : </td>
<td><textarea name="keyword" id="keyword" cols="40" rows="6"></textarea></td>
</tr>

<tr height="40px"><td></td>
<td><input type="submit" name="submit" value="Add MAIN Category" /></td>
</tr>


</form>
</table>



<!-- -->

</div>


<?php include '../footer.php' ?>
