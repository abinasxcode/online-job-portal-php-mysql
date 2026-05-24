<?php 
session_start();
session_unset();
session_destroy();

// Dynamically get the base URL
$base_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
if (strpos($_SERVER['HTTP_HOST'], 'localhost:8000') === false) {
    $project_folder = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'))[0];
    $base_url .= '/' . $project_folder;
}

// Build full redirect path to login-admins.php
$redirect_url = $base_url . '/admin/admins/login-admins.php';

// Redirect
header("Location: $redirect_url");
exit;
?>
