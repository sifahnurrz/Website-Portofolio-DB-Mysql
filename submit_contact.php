<?php
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Validate inputs
    $errors = [];
    
    if (!preg_match('/^[A-Za-z\s]+$/', $firstName)) {
        $errors[] = "Nama depan hanya boleh mengandung huruf dan spasi.";
    }
    
    if (!preg_match('/^[A-Za-z\s]+$/', $lastName)) {
        $errors[] = "Nama belakang hanya boleh mengandung huruf dan spasi.";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    
    if (!preg_match('/^\d{10,15}$/', $phone)) {
        $errors[] = "Nomor HP harus terdiri dari 10-15 digit angka.";
    }

    if (empty($errors)) {
        try {
            $stmt = $conn->prepare("INSERT INTO contact_submissions (first_name, last_name, email, phone, message) 
                                   VALUES (:firstName, :lastName, :email, :phone, :message)");
            
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':lastName', $lastName);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':message', $message);
            
            $stmt->execute();
            
            // Success response
            echo json_encode([
                'status' => 'success',
                'message' => 'Formulir berhasil dikirim!'
            ]);
        } catch(PDOException $e) {
            // Database error
            echo json_encode([
                'status' => 'error',
                'message' => 'Database error: ' . $e->getMessage()
            ]);
        }
    } else {
        // Validation errors
        echo json_encode([
            'status' => 'error',
            'message' => implode("\n", $errors)
        ]);
    }
} else {
    // Invalid request method
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
}
?>