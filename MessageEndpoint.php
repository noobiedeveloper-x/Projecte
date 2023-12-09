<?php

//include conenction.php to the database
include 'connection.php';

//Get request
if (isset($_GET['Messageid'])) {
    $messageId = $_GET['Messageid'];
//Get method Messsageid from the table Feedback
    $query = "SELECT * FROM messages WHERE Messageid = :messageId";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':messageId', $messageId, PDO::PARAM_INT); 
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //show if message exist
    if ($row) {
        $messageContent = $row['message_content'];

        //echo in the model
        echo $messageContent;
    } else {
            //notfound
        echo 'Message not found';
    }
} else {
            //invalid
    echo 'Invalid request';
}
?>
