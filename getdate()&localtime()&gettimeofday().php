<?php
//getdate(timestamp)
//gettimeofday(return_float)
//localtime(timestamp,is_assoc)

$date = getdate();
echo $date['month'];

echo "<pre>";
print_r(getdate());
echo "</pre>";



?>