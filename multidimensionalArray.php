<?php

$emp = [
    [1,"alok","manager",5000],
    [2,"dolu","salesman",4000],
    [3,"a1","trader",300],
    [4,"amir","driver",200]
];
for($row =0;$row<4; $row++){
    for($col=0; $col<4;$col++){
        echo $emp[$row][$col]." ";
    }
    echo "<br>";
}
echo "<table border='2px' cellpadding='5px' cellspacing= '0'>";
echo "<tr>
<th>Emp id</th>
<th>Emp Name</th>
<th>EmpDesignation</th>
<th>Emp Salary</th>
</tr>";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "<tr>";
}
echo "</table>";



 echo "<ul>";
 echo "<li>";
echo $emp[0][0]." ";
echo $emp[0][1]." ";
echo $emp[0][2]." ";
echo $emp[0][3]." ";
echo "</li>";
 echo "</ul>";
echo "<pre>";
print_r($emp);
echo "</pre>";
?>