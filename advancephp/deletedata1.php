<?php
$db_host ="localhost";
$db_user ="root";
$db_password= "";
$db_name ="test";

$conn =mysqli_connect($db_host,$db_user,$db_password,$db_name);

//check connection
if(!$conn){
    die("connection failed");

}
echo "connected successfully <br>";

//sql to delete reord
//$sql = "DELETE FROM student WHERE id = 2";
//if(mysqli_query($conn , $sql)){
  //  echo"record deleted";
//}
//else{
  //   echo "error! unable to delete record";
//}

?>