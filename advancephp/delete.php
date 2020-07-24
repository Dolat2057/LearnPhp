<?php

if(isset($_REQUEST['delete'])){
	$sql = "DELETE FROM product WHERE serialnumber= {$_REQUEST['serialnumber']}";
if(mysqli_query($conn , $sql)){
    echo"Record deleted";
}
else{
     echo "Error! unable to delete record";
} 
}

?>