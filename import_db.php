<?php
$host = 'localhost';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;port=3307", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pdo->exec("CREATE DATABASE IF NOT EXISTS ojpcodeastro");
    $pdo->exec("USE ojpcodeastro");
    
    $sql = file_get_contents(__DIR__ . '/DATABASE FILE/ojpcodeastro.sql');
    $pdo->exec($sql);
    
    echo "Database imported successfully!\n";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
