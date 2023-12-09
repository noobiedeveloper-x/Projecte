<?php
require 'connection.php';
session_start();

//Post method 
if (isset($_POST['submit'])) {
    $username = $_POST['login'];
    $password = $_POST['Password'];

    // Prepare the SQL statement check user for username 
    $stmt = $conn->prepare('SELECT * FROM useraccounts WHERE username=:username');


    // Bind the parameter i should use ss but bind it right away :/
    $stmt->bindParam(':username', $username);

    // execute Statement Stmt
    $stmt->execute();

    // fetchASSOC Fetch all
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    /*--CHECK IF THE USER NAME FOUND IN THE DATABASE
    CHECK IF THE USER MATCHES THE PASSWORD 
    IF IT DOES REDIRECT TO LOGIN ADMIN
    -*/
    if ($user) {
      
        if ($password == $user['password']) {
            $_SESSION['username'] = $username;         
            header('Location: http://localhost/Portfollio/admin.php');
        } else {
            // Password is incorrect No Redirection due to its not produciton
            echo "Incorrect password!";
        }
    } else {
        // No user found with the given username or no matches found in the database
        echo "User not found!";
    }
}
?>
