<?php
$str = "hello world. thoe world is nice";
//these are case insensetive
echo "strpos :".strpos($str,"world")."<br>";
echo  "strpos :".strrpos($str,"world")."<br>";
//these are case insensitive
echo "stripos :".stripos($str,"world")."<br>";
echo  "stripos :".strripos($str,"world")."<br>";
?>
