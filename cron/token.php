<?php
include '../config.php';
$result = mysql_query("SELECT * FROM token ORDER BY RAND() LIMIT 20,$tonglike");
if($result){
while($row = mysql_fetch_array($result))
  {
$access_token = $row[token];
$name_token = $row[ten];

echo $access_token;

?>