<?php
//Session started
session_start(); 

//unsetall session var
session_unset();

//destroy session logout
session_destroy();

//redirect the user to the main.php if not login
header('location: http://localhost/Portfollio/main.php');
exit(); //exit
?>