<?php
$count="data3.txt";

$count++;
$fp = fopen($count,"w");
fwrite($fp, "$count");
fclose($fp);

echo "당신은 ".$count."번째 방문자 입니다.";

?>
