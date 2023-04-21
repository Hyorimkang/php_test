<?php
//1부터 10까지 합 구하기
$sum=0;
for($i=1; $i<=10; $i++){
    $sum += $i;
}
echo "1부터 100까지 합 : $sum";
echo "<br/>";

//1부터 100까지 짝수 합 구하기
$sum=0;
for($i=1; $i<=100; $i++){
    if($i%2==0){
        $sum += $i;
    }
}
echo "1부터 100까지 짝수 합 : $sum";
echo "<br/>";

//$num = 5 일때 짝수인지 홀수인지 구하기
$num=5;
if($num%2==0){
    echo $num."는 짝수입니다.";
}
else{ 
    echo $num."는 홀수입니다.";
}
echo "<br/>";

//1부터 100까지 3의 배수 구하기
$num=1;
echo "1부터 100까지 3의 배수 : ";
for($i=$num; $i<=100; $i++){
    if($i%3==0){
        echo "$i ";
    }
}
echo "<br/>";

//2단부터 5단까지 구하기
$num=2; $mul=0;
for($i=$num; $i<=5; $i++){
    for($j=1; $j<=9; $j++){
        $mul = $i*$j;
        echo"$i*$j=$mul";
        echo "<br/>";
    }
}
echo "<br/>";

//3,4,5를 삼각형의 넓이구하기
$triangle=0;
$a=3; $b=4; $c=5;
$triangle=$a+$b+$c;
echo "변이 각 3,4,5인 삼각형의 넓이 : $triangle";
?>