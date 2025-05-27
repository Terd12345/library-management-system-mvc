<!-- filepath: c:\xampp\htdocs\library_management_system_mvc\contact.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Library Management System</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

<style>
    .contact-form label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
}

.contact-form .form-control {
    margin-bottom: 15px;
    padding: 10px;
    font-size: 14px;
}

.contact-form button {
    padding: 10px 20px;
    font-size: 16px;
}
</style>


    <?php
    include 'includes/classloader.inc.php';

    $indexObj = new IndexView();
    $indexObj->HeaderIndex();
    $indexObj->contactPage();
    $indexObj->FooterIndex();
    ?>


</body>
</html>