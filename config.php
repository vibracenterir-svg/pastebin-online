<?php
// Database configuration
$host = 'localhost';
$db_name = 'pastebin';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host={$host};dbname={$db_name};", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}
?>