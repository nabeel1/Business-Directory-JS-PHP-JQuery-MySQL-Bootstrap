<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>"; 

echo "<urlset
		xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
      xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
      xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">";

echo "<url>
  <loc>http://city44.co.uk/</loc>
  <changefreq>daily</changefreq>
</url>";
?>
<?php @include_once '../config.php';
$result=mysql_query("SELECT * FROM tblbusinesses ORDER BY id DESC Limit 0,4990");
$num_rows=mysql_num_rows($result);

$i=0;
while($i<$num_rows)
{
$id=addslashes(strip_tags(mysql_result($result,$i,"id")));
$iCity=addslashes(strip_tags(mysql_result($result,$i,"iCity")));

$res=mysql_query("SELECT * FROM city WHERE id='$iCity'");
$city=addslashes(strip_tags(mysql_result($res,0,"city")));
$titleurl=str_replace(' ','+',$city);

echo "<url>";
echo "<loc>http://".$_SERVER['SERVER_NAME']."/".$titleurl."/".$id."</loc>";
echo "<changefreq>weekly</changefreq>";
echo "<priority>0.8</priority>";
echo "</url>";

$i++;
}



echo "</urlset>";
?>

