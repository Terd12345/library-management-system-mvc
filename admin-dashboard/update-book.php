<?php

include '../includes/classloader.inc.php';

$controller = new AdminController();

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $controller->updateBookController((int)$_GET['id']);
    if ($result) {
        header('Location: book-details.php?id=' . urlencode($_GET['id']) . '&success=1');
        exit();
    } else {
        header('Location: book-details.php?id=' . urlencode($_GET['id']) . '&error=1');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}