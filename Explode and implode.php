<?php
$str="Hello world. Its a beautiful day.";
//explode("separator",string, limit);
// and stored the value of explode function int he $array and echo this
$array=explode(" ", $str);
echo "<pre>";
print_r($array);
echo "</pre>";


$array1 = array('hello','world!','beautiful','day');
//As implode we can use join function it can work as same as implode function
$str=implode(" ",$array1);

echo "<pre>";
print_r($str);
echo "</pre>";

?>