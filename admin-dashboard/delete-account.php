<?php

include '../includes/classloader.inc.php';

$controller = new AdminController();

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $controller->deleteAccountController((int)$_GET['id']);
    header('Location: manage-accounts.php?deleted=1');
    exit();
} else {
    header('Location: manage-accounts.php?deleted=0');
    exit();
}