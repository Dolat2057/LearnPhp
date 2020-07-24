<?php


$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "test";

//create connection
$conn = mysqli_connect("$db_host","$db_user","$db_password","$db_name");

//check connection
if(!$conn){
    die("connection failed");
}
echo "connected successfully <br>";

if(isset($_REQUEST['submit'])){
//checking for empty fields
if(($_REQUEST['name'] == "") || ($_REQUEST['roll'] == "") || ($_REQUEST['address'] == "")){
  echo "<small> Fill All fields...</small> <hr>";
}
else{
  $name = $_REQUEST['name'];
  $roll = $_REQUEST['roll'];
  $address = $_REQUEST['address'];

  $sql = "INSERT INTO student (name, roll, address) VALUE('$name', '$roll', '$address')";
  if(mysqli_query($conn , $sql)){
    echo "New record inserted successfully";
  }
  else{
    echo "unable to insert data";
  }
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

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">
<div class="row">
<div class="col-sm-4">
<form action="" method="POST">
<div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-control" name="name" id="name">

</div>
<div class="form-group">
<label for="roll">Roll</label>
<input type="text" class="form-control" name="roll" id="roll">

</div>
<div class="form-group">
<label for="address">Address</label>
<input type="text" class="form-control" name="address" id="address">
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>