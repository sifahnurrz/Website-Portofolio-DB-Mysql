<?php
$host = 'localhost'; // or your host
$dbname = 'portofolio_db';
$username = 'root'; // default XAMPP username
$password = ''; // default XAMPP password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>