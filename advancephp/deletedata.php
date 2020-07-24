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


if(isset($_REQUEST['submit'])){
	$sql = "DELETE FROM student WHERE id = {$_REQUEST['id']}";
if(mysqli_query($conn , $sql)){
    echo"record deleted";
}
else{
     echo "error! unable to delete record";
} 
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>practice</title>
  </head>
  <body>


<div class="container">
<?php
$sql = "SELECT * FROM student";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0 ){
    echo '<table class ="table">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NAME</th>";
    echo "<th>ROLL</th>";
    echo "<th>ADDRESS</th>";
    echo "<th>ACTION</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["roll"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo '<td><form action="" method="POST"><input type="hidden" name="id"
        value='. $row['id'] . '><input type="submit" class="btn-sm btn-danger" name="submit" 
        value="Delete"></form></td>';
        echo "</tr>";
    }
}else{
	echo "0 result";
}
?>
<tbody>
	<table>
	</table>
	<div>

  	 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>