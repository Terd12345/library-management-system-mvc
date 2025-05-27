<?php

include 'includes/classloader.inc.php';

try {
    $controller = new IndexController();
    $controller->handleLogin($_POST['email'] ?? '', $_POST['password'] ?? '');
} catch (Exception $e) {
    error_log($e->getMessage());
    header("Location: login.php?error=server_error");
    exit();
}
