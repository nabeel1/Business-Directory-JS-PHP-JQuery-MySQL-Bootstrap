<?php  include '../config.php';
$b=$_REQUEST['c'];
?>
<?xml version="1.0" ?>
<rss version="2.0">
  <channel>
    <title>Business Directory</title>
    <link>http://4mylocal.co.uk/</link>
    <description>Find All Business in your town. Now you can add your business freely</description>
    
 
<?php
$res=mysql_query("SELECT id,sIndustryName,pdesc FROM tblindustries WHERE main_category='$b' ORDER BY sIndustryName ASC");
$num_rows=MYSQL_NUM_ROWS($res);

$i=0;
while($i<$num_rows)
{
$category=mysql_result($res,$i,"sIndustryName");
$pdesc=mysql_result($res,$i,"pdesc");
$id=mysql_result($res,$i,"id");
$pdesc1=substr($pdesc,0,117);
?>
<item>
       <title><?php echo $category; ?></title>
       <link>http://4mylocal.co.uk/business-dir/service.php?bid=<?php echo $id; ?> </link>  
       <description><?php echo $pdesc;?></description>
    </item>
<?php
$i++;
}
?>



      
  </channel>
</rss>