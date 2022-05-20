<?php include '../header.php';?>
<?php include 'leftbar.php';?>
<!-- Div for slider show -->


<!-- -->


<div id="main" style=" height:900px; width:550px; padding: 0em; border-style:solid; border-width:0px; border-color:#B8B8B8; position:absolute; left:200px; top:216px; float:left; background-color:#ffffff;" >

<div id="news" style=" height:150px; width:540px; padding: 0em; border-style:solid; border-width:0px; border-color:#2586d7; position:absolute; left:10px; top:20px;" >

<font size="+2">Members Area
</font>

<br />

<center><h1><font color="#32A4D5">ADD PROCESSING !!</font></h1></center>


<table align="center" width="430px">
<tr><td>
<?php
$bid1=strip_tags(addslashes($_REQUEST['bid1']));
$bus_name=strip_tags(addslashes($_REQUEST['bus-name']));
$cname=strip_tags(addslashes($_REQUEST['cname']));


$address=strip_tags(addslashes($_REQUEST['address']));
$address2=strip_tags(addslashes($_REQUEST['address2']));
$city=strip_tags(addslashes($_REQUEST['city']));
$pcode=strip_tags(addslashes($_REQUEST['pcode']));
$phone=strip_tags(addslashes($_REQUEST['phone']));
$mobile=strip_tags(addslashes($_REQUEST['mobile']));
$fax=strip_tags(addslashes($_REQUEST['fax']));
$email=strip_tags(addslashes($_REQUEST['email']));
$cat=strip_tags(addslashes($_REQUEST['cat']));
$title=strip_tags(addslashes($_REQUEST['title']));
$mdesc=strip_tags(addslashes($_REQUEST['mdesc']));
$keyword=strip_tags(addslashes($_REQUEST['keyword']));




$bus_len=strlen($bus_name);
$add_len=strlen($address);
$pcode_len=strlen($pcode);
$phone_len=strlen($phone);
$email_len=strlen($email);

$date=date("d/m/Y");
$status=0;

if($bus_len=="" or $add_len=="" or $pcode_len=="" or $phone_len=="" or $email=="" or $cat=="-1")
{
echo "not insert here";
}else{
mysql_query("UPDATE tblbusinesses SET sBusinessName='$bus_name',iIndustry='$cat',cname='$cname',sAddress='$address',sAddress2='$address2',iCity='$city',sPostcode='$pcode',sTelephone='$phone',sMobile='$mobile',sFax='$fax',sContactEmail='$email',modified='$date',sMetaTitle='$title',sMetaKeywords='$keyword',sMetaDescription='$mdesc' WHERE id='$bid1'");


}

?>
</td></tr>
</table>



<br />
<a href="select-bus.php">GO Back</a>



</div>

<!-- -->











</div>



<?php include '../footer.php' ?>
