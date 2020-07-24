<?php
//to encrypt the password
//md5(string,raw)in raw we take two value true or false
//sha1(string,raw):us secure Hash algorithm.

$str="Hello";
echo  "The string:".$str."<br><br>";
//md5 gives 32 characters
//echo "md5 binary :". md5($str,TRUE)."<br><br>";

//echo "md5 Hex :". md5($str)."<br><br>";
if(md5($str)=="8b1a9953c4611296a827abf8c47804d7"){
    echo"password matched";
}










//but sha1 gives 40 characters
//echo "sha1 binary :". sha1($str,TRUE)."<br><br>";

//echo "sha1Hex :". sha1($str)."<br><br>";



?>