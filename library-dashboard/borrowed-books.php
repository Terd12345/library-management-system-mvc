<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php?error=unauthorized');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Borrowed Books</title>
  <link rel="stylesheet" href="../assets/css/lib-dashboard.css" />
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>


    <?php

    include '../includes/classloader.inc.php';

    $obj = new IndexView();

    $obj->libraryDashboardHeader();

    $obj->borrowedBooks();

    $obj->libraryDashboardFooter();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['return_transaction_id'], $_POST['return_book_id'])) {
        $transactionId = (int)$_POST['return_transaction_id'];
        $bookId = (int)$_POST['return_book_id'];
        $model->returnBook($transactionId, $bookId);
        // Archive the transaction after returning
        $model->archiveBorrowTransaction($transactionId);
        header('Location: borrowed-books.php?success=returned');
        exit();
    }
    ?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> 

</body>
</html>
