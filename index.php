<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Library Management System</title>
  <link rel="stylesheet" href="assets/css/index.css" />
</head>
<body>



  <?php

  include 'includes/classloader.inc.php';

  $indexObj = new IndexView();
  $indexObj->HeaderIndex();
  $indexObj->landingPage();
  $indexObj->FooterIndex();

  ?>


</body>
</html>
