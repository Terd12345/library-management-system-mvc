<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php?error=unauthorized');
    exit();
}

include '../includes/classloader.inc.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: browse-books.php?error=invalid_book');
    exit();
}

$bookId = (int)$_GET['id'];
$model = new AdminModel();
$book = $model->getBookById($bookId);

if (!$book) {
    header('Location: browse-books.php?error=book_not_found');
    exit();
}

$status = isset($book['status']) ? strtolower(trim($book['status'])) : 'available';
if ($status === 'unavailable') {
    header('Location: book-details.php?id=' . $bookId . '&error=already_borrowed');
    exit();
}

$controller = new LibraryController();
$success = false;
// Try user_id first
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    $success = $controller->borrowBook($bookId, $_SESSION['user_id']);
}
// If not successful, try stud_id
if (!$success && isset($_SESSION['stud_id']) && !empty($_SESSION['stud_id'])) {
    $success = $controller->borrowBook($bookId, $_SESSION['stud_id']);
}

if ($success) {
    header('Location: book-details.php?id=' . $bookId . '&success=borrowed');
    exit();
} else {
    echo '<div style="color:red;">Borrowing failed. Please contact the administrator.</div>';
    exit();
}
