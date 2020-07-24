<?php
//for hour
echo "Hour is:" . date("h").  "<br>";
echo "Hour is:" . date("H").  "<br>";

//for  minute
echo "Minutes is:" . date("i").  "<br>";

//for seconds
echo "Seconds is:" . date("s").  "<br>";
//for meridiem
echo "Meridiem is:" . date("A").  "<br>";
echo "Meridiem is:" . date("a").  "<br>";

//all thinsgs in sam line
echo "Time is:" . date("h:i:sa e").  "<br>";
echo "Time and date is:" . date("d-m-Y h:i:sa").  "<br>";

//to change timezone  we set to india
//to set the time zone we open on google php time zone and in this we just copy the time zone that we want

//in this e represent this time represent to which country or continent
date_default_timezone_set("Asia/Kolkata");
echo "Time is:" . date("h:i:sa e").  "<br>";









?>