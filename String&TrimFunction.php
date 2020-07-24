<?php

// we can use this trim function in the forms
//trim(string,charlist)
//rtrim(string,charlist):for right trim
//ltrim(string,charlist):for left trim
//chop(string,charlist):it can work as same as right trim
$str="yahoo baba";
echo $str."<br>";

echo trim($str,"yba")."<br>";
echo rtrim($str,"Yba")."<br>";
echo ltrim($str,"yba")."<br>";

?>