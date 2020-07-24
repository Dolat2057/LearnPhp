<?php
//setcookie(name,value,expire,path,domain,secure,http only):to create cookie
//view cookie value:$_COOKIE[name]
$cookie_name = "user";
$cookie_value = "yahoo baba";

setcookie($cookie_name,$cookie_value,time() + (86400*30),"/");

?>
<html>
<body>
<?php
if(!isset( $_COOKIE[$cookie_name])){
    echo "cookie is not set";-
    
}else{
echo $_COOKIE[$cookie_name];
}
?>

</body>
</html>
