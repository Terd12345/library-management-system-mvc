<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Library Registration</title>
  <link rel="stylesheet" href="assets/css/register.css" />
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
</head>
<body>
  


    <?php

     include 'includes/classloader.inc.php';


     $obj = new IndexView();
     $obj->registerPage();

    ?>



    <script src="assets/js/register.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> 
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

</body>
</html>