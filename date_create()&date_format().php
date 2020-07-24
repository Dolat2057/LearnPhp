<?php

//date_create(time,timezone):it can we used to show past or future time.
//date_format(object,format)

 $date= date_create("2023-03-16 22:25:00",timezone_open("Asia/Kolkata"));
echo date_format($date,"d/m/Y H:i:s");

?>