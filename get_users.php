<?php
require 'config/config.php';
$stmt = $conn->query("SELECT email, type, username FROM users LIMIT 10");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($users);
