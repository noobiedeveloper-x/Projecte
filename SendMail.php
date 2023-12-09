<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\Portfollio\PhpMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\Portfollio\PhpMailer\src\SMTP.php';
require 'C:\xampp\htdocs\Portfollio\PhpMailer\src\Exception.php';

// Function to send email
function sendEmail($to, $subject, $message) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'angellazadaxx233@gmail.com'; // SMTP username
        $mail->Password   = 'mpwxbamoznvnjkop'; // SMTP password
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('angellazadaxx233@gmail.com', 'AutoMailAzure');
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        // Send email
        $mail->send();

        return ['success' => true, 'message' => 'Email sent successfully'];
    } catch (Exception $e) {
        return ['error' => true, 'message' => $mail->ErrorInfo];
    }
}

// Retrieve data from the AJAX request
$data = json_decode(file_get_contents('php://input'), true);

// Check if required fields are present
if (isset($data['to'], $data['subject'], $data['message'])) {
    $to = $data['to'];
    $subject = $data['subject'];
    $message = $data['message'];

    // Send email
    $result = sendEmail($to, $subject, $message);

    // Return the result as JSON
    header('Content-Type: application/json');
    echo json_encode($result);
} else {
    // Return an error if required fields are missing
    header('Content-Type: application/json');
    echo json_encode(['error' => true, 'message' => 'Missing required']);
}
