<?php

//1.session_start();
//2.$_SESSION[name] = value; :set session name & value
//3.$_SESSION[name]; : Get session value;

//delete session
//1.session_unset(); :Remove all session variables
//2.session_destroy(); :destroy the session

session_start();

$_SESSION["favcolor"] = "orange";

echo "session variable is set";







?>