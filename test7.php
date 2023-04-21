<?php
$filename = "data2.txt";
$fp=fopen($filename,"r");
$fr=fread($fp, filesize($filename));

echo $fr;

fclose($fp);
?>