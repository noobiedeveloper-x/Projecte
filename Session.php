
<?php

/** IMPORTANT TO AVOID USERS GOING TO ADMIN PAGE WITHOUT LOGIN 
 * 
 * WELL THIS IS WEIRD
 * 
 * UPDATE DONE
 */
require 'connection.php';
require 'login.php';

if (isset( $_SESSION['username'])) {
} else {
    header('location: http://localhost/Portfollio/main.php');
}

?>