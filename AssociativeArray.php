<?php

$age=[
    "bill" =>25, "steve" =>22,"elon" =>22
];

$age["elon"] = 20;
echo "<pre>";
print_r($age);
var_dump($age);
echo "</pre>";
echo $age["bill"]."<br>";
echo $age["steve"]."<br>";
echo $age["elon"]."<br>";
?>