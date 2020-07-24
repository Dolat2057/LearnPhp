<?php

$str= "Hello world. The world is nice";

$find=["Hello","world"];
$replace=["hii","earth"];
echo str_replace($find,$replace,$str);

$color =["blue","red","green","yellow"];
echo"<pre>";
print_r(str_replace("red","pink",$color));
echo"</pre>";
//str_replace --using this function you can easily replace the value. It is also case sensitive
//str_replace(find,replace,string) it is case sensititve function.
//str_ireplace(find,replace,string) it is case insenstive function.
/* this function we can used to when we dont know the word is in uppercase or lowercase */


//substr_replace(string,replacement,start,length).
$a = "hello world .The world is nice";
echo substr_replace($a,"earth",6)."<br>";
//strtr(string,from,to) using this we can replace the character OR strtr(string,array)
$b ="hello world .The world is nice";
echo strtr($b,"eo","ij");
?>