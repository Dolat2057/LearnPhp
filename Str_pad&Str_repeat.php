<?php
//str_pad(string,length,pad_string,pad_type):pad_string means which type of character you change 
//pad_type:str_pad_Both,str_pad_left

//to repeat the string 
//str_repeat(string,repeat);
$str= "Hello World";
//STR_PAD_LEFT always work in capital order.
echo str_pad($str, 20, ".",STR_PAD_LEFT)."<br>";
$sa="wow";
echo str_repeat($sa,5);



?>