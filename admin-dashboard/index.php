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
  <title>Library | Dashboard</title>
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/admin-dashboard.css">
</head>
<body>



     
  
  <?php

    include '../includes/classloader.inc.php';


    $obj = new IndexView();

    $obj -> adminDashboardHeader();

    $obj -> adminDashboardMain();

    $obj -> adminDashboardFooter();



  ?>

      

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
