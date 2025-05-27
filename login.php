<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css" />
  <link rel="stylesheet" href="assets/css/index.css" />
</head>
<body>

    <?php

    include 'includes/classloader.inc.php';

    $loginObj = new IndexView();
    $loginObj->loginPage();


    ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
