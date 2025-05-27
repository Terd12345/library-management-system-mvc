<?php

include '../includes/classloader.inc.php';

$controller = new AdminController();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $controller->deleteBookController((int)$_GET['id']);
    header('Location: add-book.php?deleted=1');
    exit();
} else {
    header('Location: add-book.php?deleted=0');
    exit();
}