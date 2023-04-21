<style>
    h1{
        color:red;
    }
</style>
<?php
echo"<h1>1.strlen</h1>";
$str="php is a popular scripting language";
echo strlen($str);
?>

<hr>
<?php
$var1="hello";
$var2="Hello";
$result=strcmp($var1, $var2);
echo"result ".$result;
?>

<hr>
<?php
$str="abcdef";
$find="c";
$pos=strpos($str, $find);
echo"pos: ".$pos;
?>

<hr>
<?php
$str="Mary had a little lamb and she loved IT so MUCH";
$lower=strtolower($str);
$upper=strtoupper($str);

echo "lower : ".$lower."<br>";
echo "upper : ".$upper;
?>

<hr>
<?php
$str = "hellophpwelcome";
$result=substr($str,5,5);
echo $result."<br/>";
$result2=substr($str,3);
echo $result2;

?>