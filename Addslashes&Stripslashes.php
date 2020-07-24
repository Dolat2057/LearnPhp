<?php
//addcslashes(string,characters)
//stripcslashes(string)

$str = "Hello I am 'Yahoo Baba'";
echo  $str."<br>";

$newStr =  addslashes($str);

echo stripslashes($newStr)."<br>";
// addcslashes is used when we add slash any of the character of word before and after.

?>