<?php
//we have five function to convert string into lowercase and uppercase,let we discuss one by one
//strtolower:to covert string into lowercase.
//strtoupper:to convert string into uppercase.
//ucfirst:to convert string first character into uppercase.
//ucwords: to convert string  every first  character in a word into uppercase.
//lcfirst: to convert string first character into lowercase.

$str = "yahoo baDDDDDSAWEba evcds";
$newStr = ucwords($str);
echo $newStr;

?>