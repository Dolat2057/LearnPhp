<?php

$str = "yahoo baba";
//string split can we used to split the string one constraint is string and another is length
$array=str_split($str,4);
echo "<pre>";
print_r($array);
echo "</pre>";

$str1 = "dolat rathore";
//first constraint is string ,length,end
$newStr = chunk_split($str1,3, "....");
echo "<pre>";
print_r($newStr);
echo "</pre>";
?>