<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "crompton";

//create connection
$conn = mysqli_connect("$db_host","$db_user","$db_password","$db_name");

//check connection
if(!$conn){
    die("connection failed");
}
echo "connected successfully<br> ";







//click on sumit button and check for empty fields
if(isset($_REQUEST['submit'])){
//checking for empty fields
if(($_REQUEST['serialnumber'] == "") || ($_REQUEST['purchasedate'] == "") || ($_REQUEST['modalnumber'] == "")
||($_REQUEST['productimage'] == "") || ($_REQUEST['warrantystatus'] == "") ){
  echo "<small> Fill All fields...</small> <br>";
}

else{
  $serialnumber = $_REQUEST['serialnumber'];
  $purchasedate = $_REQUEST['purchasedate'];
  $modalnumber = $_REQUEST['modalnumber'];
  $productimage = $_REQUEST['productimage'];
  $warrantystatus = $_REQUEST['warrantystatus'];

  $sql = "INSERT INTO product (serialnumber,purchasedate,modalnumber,productimage,warrantystatus)
   VALUE('$serialnumber', '$purchasedate', '$modalnumber', '$productimage', '$warrantystatus')";
  if(mysqli_query($conn , $sql)){
    echo "New record inserted successfully";
  }
  else{
    echo "unable to insert data";
  }
  
}
}

//delete section
if(isset($_REQUEST['delete'])){
	$sql = "DELETE FROM product WHERE serialnumber= {$_REQUEST['serialnumber']}";
if(mysqli_query($conn , $sql)){
    echo"Record deleted";
}
else{
     echo "Error! unable to delete record";
} 
}

//image upload section
if(isset($_FILES['productimage'])){
   

  $file_name = $_FILES['productimage']['name'];
  $file_size = $_FILES['productimage']['size'];
  $file_tmp = $_FILES['productimage']['tmp_name'];
  
  move_uploaded_file($file_tmp,"upload/".$file_name);
  
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<?php echo include 'modal.php' ?>

<div class="container">
<h2>Register your product here</h2>
<div class="row">
<div class="col-sm-3">
<form action="" method="POST" enctype="multipart/form-data" >

<div class="form-group">
<label for="serialnumber">Serial Number</label>
<input type="text" class="form-control" name="serialnumber" id="serialnumber">

</div>
<div class="form-group">
<label for="purchasedate">Purchase Date</label>
<input type="date" class="form-control" name="purchasedate" id="purchasedate">


</div>
<div class="form-group">
<label for="modalnumber">Modal Number</label>
<input type="text" class="form-control" name="modalnumber" id="modalnumber">
</div>

<div class="form-group">
<label for="modalnumber">Product Image</label>
 <input type="file" name="productimage"  id="productimage" >
 </div>

<div class="form-group">
<label for="warrantystatus">Warranty Status</label>
<input type="text" class="form-control" name="warrantystatus" id="warrantystatus">
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<a href="">Already register?Search your product</a>
</form>
</div>
 <div class="col-sm-6 offset-sm-1">
<?php
$sql = "SELECT * FROM product";
$result = mysqli_query($conn , $sql);

if(mysqli_num_rows ($result) > 0){
  echo '<table class ="table">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>SERIAL NUMBER</th>";
    echo "<th>PURCHASE DATE</th>";
    echo "<th>MODAL NUMBER</th>";
    echo "<th>Product Image</th>";
    echo "<th>WARRANTY STATUS</th>";
    echo "<th>ACTION1</th>";
    
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row["serialnumber"] . "</td>";
        echo "<td>" . $row["purchasedate"] . "</td>";
        echo "<td>" . $row["modalnumber"] . "</td>";
        echo "<td>" . $row["productimage"] . "</td>";
         echo "<td>" . $row["warrantystatus"] . "</td>";

         echo '<td><form action="" method="POST"><input type="hidden" name="serialnumber"
        value='. $row['serialnumber'] . '><input type="submit" class=" btn btn-danger" name="delete"
        value="delete"></form></td>';

      


        echo '<td>
        <button type="button" class="btn btn-info editbtn">Edit</button>
        </td>';
        
        echo '<td><form action="" method="POST">
        <input type="submit" class="btn-sm btn-success" name="claimwarranty" 
        value="Claim Warranty"></form></td>';
        echo "</tr>";
      
    }
  }else{
    echo "0 results";
  }
  ?>
  </tbody>
</table>

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