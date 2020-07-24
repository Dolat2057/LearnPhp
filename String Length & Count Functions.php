<?php
$a = "hello world";
//to count the character
$value = strlen($a);
echo $value;



//to count the word
$b="hello world";
$valueb = str_word_count($b,1);
echo "<pre>";
print_r($valueb);
echo "</pre>";

//to search a word in the string
$str = "hello my name is alok rathore not dolat rathore and brother name sumit rathore";
//substr_count(string,substring,start,lengths)
echo substr_count($str,"rathore",15,25);

?>