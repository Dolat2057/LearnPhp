<?php

//mktime(hour,minute,second,month,day,year):make time its represent past time or timestamp
//gmmktime(hour,minute,second,month,day,year)

echo "Time and Date :" . date("d-m-y h:i:sa") . "<br><br>";

echo date("l",mktime(0,0,0,10,15,2003)). "<br><br>";

echo date("l",gmmktime(0,0,0,10,15,2003));//its shows european time

?>