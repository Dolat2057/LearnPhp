<?php
//
$colors = array("red",20,"greeen",12.5);


 echo $colors[0]."<br>";//in bracket we take index number.
 echo $colors[1]."<br>";
 echo $colors[2]."<br>";
 echo $colors[3]."<br>";
echo "<br>";

//second method
 $colors = ["red",20,"greeen",12.5];
 echo "<ol>";
for($i=0;$i< 4;$i++){
    echo "<li> $colors[$i] </li>";
}
echo "</ol>";

 /*echo $colors[0]."<br>";//in bracket we take index number.
 echo $colors[1]."<br>";
 echo $colors[2]."<br>";
 echo $colors[3]."<br>";*/

 //these tags can we help to visible the data in the array
 //in very easy manner
 echo "<pre>";
 print_r($colors);
 echo "</pre>";



?>