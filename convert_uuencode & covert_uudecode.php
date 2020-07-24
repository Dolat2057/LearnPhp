<?php
//to encrypt the message
//this function is based on uuencode algorithm.
//basically this function is used when we transmit the data but no when read in the medium. 
//convert_uuencode(string)

$str="hello wrold";
//to encrypt the data
$encodeString = convert_uuencode($str);

echo $encodeString;

$decodeString = convert_uudecode($encodeString);
echo $decodeString;




?>