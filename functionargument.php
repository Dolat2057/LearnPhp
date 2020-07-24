<?php
function testing(&$string){//as a refrence value
    $string .=" and something extra";
}
$str = "This is a string";
testing($str);
echo $str;
echo "<br>";

function first($num){
$num+=5;
}

function second(&$num){//address stored 
    $num+=7;
}
$number=10;
first($number);
echo "original value is $number<br>";

second($number);
echo "original value is $number<br>";
?>