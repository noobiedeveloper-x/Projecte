<?php

// Database configuration
$host = 'localhost'; // e.g., localhost
$dbname = 'azure_system';
$username = 'root';
$password = '';

// Attempt to connect to the database
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Additional settings if needed
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>
