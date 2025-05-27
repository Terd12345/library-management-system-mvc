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


borrowed books

    <?php

    include '../includes/classloader.inc.php';
    
    $obj = new IndexView();

    $obj->libraryDashboardHeader();
    
    $obj->libraryDashboardFooter();
    
    ?>



<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
