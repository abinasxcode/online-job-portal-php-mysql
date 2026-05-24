<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Success root:root\n";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
