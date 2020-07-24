<?php
$str = "Hello world. The world is nice";
//strstr( string, search,before_search) ,before search have only two value tru or false
//this is case senstive.
//strpbrk(string,charlist)
 echo strstr($str,"world")."<br>";
 echo stristr($str,"World",true)."<br>";//i for insenssitive
 echo strchr($str,"world")."<br>";// it can work as same as strstr
 echo strrchr($str, "world")."<br>";//it can we used in the reverse order
echo strpbrk($str,"w");
?>