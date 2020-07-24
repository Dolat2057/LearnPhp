<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "crompton";

//create connection
$conn = mysqli_connect("$db_host","$db_user","$db_password","$db_name");
if(!$conn){
    die("connection failed");
}
echo "connected successfully <br>";

if(isset($_REQUEST['submit'])){
    //checking for empty fields
    if(($_REQUEST['serialnumber'] == "") || ($_REQUEST['purchasedate'] == "") || ($_REQUEST['modelnumber'] == "")
      || ($_REQUEST['price'] == "") || ($_REQUEST['warrantystatus'] == "")){
      echo " Fill All fields.. <br>";
    }
    else{
      $serialnumber = $_REQUEST['serialnumber'];
      $purchasedate = $_REQUEST['purchasedate'];
      $modelnumber = $_REQUEST['modelnumber'];
      $price = $_REQUEST['price'];
      $warrantystatus = $_REQUEST['warrantystatus'];
    
      $sql = "INSERT INTO product (serialnumber, purchasedate, modelnumber,price,warrantystatus) VALUE
      ('$serialnumber', '$purchasedate', '$modelnumber', '$price', '$warrantystatus')";
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
    
        <title>Register Product</title>
      </head>
      <body>

    <div class="container">
    <h2>Register your product here</h2>
    <div class="row">
    <div class="col-sm-4">
    <form action="" method="POST">
    <div class="form-group">
    <label for="serialnumber">Serial Number</label>
    <input type="text" class="form-control" name="serialnumber" id="serialnumber">
    
    </div>
    <div class="form-group">
    <label for="purchasedate">Purchase Date</label>
    <input type="text" class="form-control" name="purchasedate" id="purchasedate">
    
    </div>
    <div class="form-group">
    <label for="modelnumber">Model Number</label>
    <input type="text" class="form-control" name="modelnumber" id="modelnumber">
    </div>
    <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" name="price" id="price">
    </div>
    <div class="form-group">
    <label for="warrantystatus">Warranty Status</label>
    <input type="text" class="form-control" name="warrantystatus" id="warrantystatus">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <a href="product_table1.php">Already register?Search your product</a>
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

