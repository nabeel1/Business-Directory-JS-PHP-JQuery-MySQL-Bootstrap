<?php include_once '../config.php'; 




$mto=addslashes($_POST['mto']);
$one1="1";


mysql_query("INSERT INTO like_dislike (bid, like,dislike) VALUES ('$mto', '$one1','$one1')");

//mysql_query("INSERT INTO  friend (friend_id,my_id) VALUES ('$user', '$mto')");

//mysql_query("DELETE FROM notification WHERE to_uid='$user' AND from_uid='$mto' ");

?>