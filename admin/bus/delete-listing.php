<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="leftbar" style=" height:auto; width:740px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:210px; top:116px; float:left; background-color:#ffffff;" >

<?php

$id=addslashes($_REQUEST['id']);


mysql_query("DELETE FROM tblbusinesses WHERE id='$id'");


?>

<font size="+2" color="#009900">Listing DELETED Sucessfully </font>

<!-- -->

</div>


<?php include '../footer.php' ?>
