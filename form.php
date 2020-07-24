<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--when we use get in method data also show in the url
but when we use post in method data does not show in the url
so post is better than get method-->

    <form action="testform.php" method="post">
    Name: <input type="text" name="fname"><br><br>
    Age: <input type="text" name="age"><br><br>
  <!--   <input type="file" name="image"/>  -->
    <input type="submit" name="save">
    </form>


</body>
</html>