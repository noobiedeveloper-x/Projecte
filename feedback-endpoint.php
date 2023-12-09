<?php
include 'connection.php';

// Get JSON data from the request
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

// Access individual data fields
$name = $data['name'];
$email = $data['email'];
$message = $data['message'];


try {
    $stmt = $conn->prepare("INSERT INTO feedback ( name, email, message) VALUES (?, ?, ?)");
    
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $message);
  

    // Execute the query
    $stmt->execute();

    // Optionally, you can check if the insertion was successful
    $rowCount = $stmt->rowCount();
    if ($rowCount > 0) {
        echo json_encode(['status' => 'success', 'message' => 'Data inserted successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to insert data']);
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
}

$conn = null;
?>
