<?php

//checkdate(month,day,year)
//date_diff(datetime1,datetime2,absolute):by default its value is false

echo checkdate(2,15,2024) . "<br>";//it gives 1 bcoz it is true statement

$date1 = date_create("2013-03-15");
$date2 = date_create("2013-12-12");

$diff = date_diff($date1, $date2);

echo $diff->days. "days";
echo "<pre>";
print_r($diff);
echo "</pre>";

?>