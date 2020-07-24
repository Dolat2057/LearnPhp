<?php
$conn = mysqli_connect("localhost","root","","test") or die("connection failed");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql) or die("Query unsuccessful");

//to fetch assosciTIVE array
//$row = mysqli_fetch_assoc($result);

//echo "<pre>";
//print_r($row);
//echo "</pre>";


while($row = mysqli_fetch_assoc($result)){

echo  $row['id'] . " " . $row['first_name'] . " " . $row['last_name']."<br>";

}

?>