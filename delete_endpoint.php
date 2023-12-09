<?php
require_once 'connection.php';

// Check if the id is set in the post data from the Ajax
if (isset($_POST['id'])) {
    // store the the post id in the $rowid
    $rowId = $_POST['id'];

    try {
        // Delete Statement prepare give the value Where id = :id 
        $stmt = $conn->prepare("DELETE FROM azure WHERE id = :id");
        $stmt->bindParam(':id', $rowId, PDO::PARAM_INT);
        $stmt->execute();

        // Return a success response in the console. json
        header('Content-Type: application/json');
        echo json_encode(['success' => true]);

    } catch (PDOException $e) {
        // Return an error response in jason console
        header('Content-Type: application/json');
        echo json_encode(['error' => $e->getMessage()]);
    }
} else {
    // Return an error response if the ID is not provided return success but invalid 
    header('Content-Type: application/json');
    echo json_encode(['error' => 'ID not provided']);
}
?>
