<?php
$connection =mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection, 'crompton');

if(isset($_POST['updatedata']))
{
    $serialnumber = $_POST['serialnumber'];
    $purchasedate = $_POST['purchasedate'];
    $modalnumber = $_POST['modalnumber'];
    $productimage = $_POST['productimage'];
    $warrantystatus = $_POST['warrantystatus'];

$query = "UPDATE  product SET purchasedate='$purchasedate', modalnumber= '$modalnumber', 
productimage='$productimage', warrantystatus='$warrantystatus' WHERE serialnumber= '$serialnumber' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
    
    echo '<script> alert("Data updated");</script>';
    header('Location: productregister.php');
}
else
{
    echo '<script> alert("Data Not updated");</script>';
}

}

?>