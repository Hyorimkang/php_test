<?php
//저장
$filename="data.txt";
// $fp=fopen($filename,"w"); //mode a는 추가 w는 사라지고 다시생김

// $str="Mary had a dog";
// $str1="Tom had a cat";
// //fwrite($fp,$str);
// fwrite($fp,$str1);
// fclose($fp);
// echo "저장되었습니다.";

//2.파일 읽기
$fp=fopen($filename,"r");
while(!feof($fp)){  //end of file
    // echo fgetc($fp);
    echo fgets($fp);
}

?>
