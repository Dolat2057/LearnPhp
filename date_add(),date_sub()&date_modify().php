<?php

//to add the days in the existing date: date_add(object,interval)
//to remove the days on the existing date:date_sub(object,interval)
//date_modify:in this we can do add or remove both function work

//date_add
$date = date_create("2015-05-15");
date_add($date, date_interval_create_from_date_string("10 days"));
echo date_format($date , "d-m-Y"). "<br>";

//date_sub
$date = date_create("2015-05-15");
date_sub($date, date_interval_create_from_date_string("10 days"));
echo date_format($date , "d-m-Y"). "<br>";

//date_modify
$date = date_create("2015-05-15");
date_modify($date,"10 days");
echo date_format($date , "d-m-Y"). "<br>";

$date = date_create("2015-05-15");
date_modify($date,"-10 days");
echo date_format($date , "d-m-Y"). "<br>";



?>