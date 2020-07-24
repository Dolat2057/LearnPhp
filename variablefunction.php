<?php
function wow($name){
    echo "hello $name";
}
$func="wow";//assign a function to a variable
//we do not call directly but with the help of function we call the variable.
$func("yahoo baba");
echo "<br>";
//second method
$sayHello= function ($name){


    echo "hello $name";
};

$sayHello("yahoo baba");


?>