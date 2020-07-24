<?php
if(isset($_FILES['image'])){
    echo "<pre>";
print_r($_FILES);
echo "</pre>";


$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($file_tmp,"upload-images/".$file_name);

}

?>
<html>
<body>

<form action="" method="POST" enctype="multipart/form-data">
<!-- use this enctype when we upload file to the server or we use file in the page-->
<input type="file" name="image"/> <br><br>
<input type="submit"/>
</form>
</body>
</html>