<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php?error=unauthorized');
    exit();
}

include "../includes/classloader.inc.php";

$account = null;
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $accountId = (int)$_GET['id'];
    $controller = new AdminController();
    $account = $controller->getAccountById($accountId);
}

if (!$account) {
    echo '<div class="alert alert-danger m-4">Account not found.</div>';
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library | Account Details</title>
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/admin-dashboard.css">
</head>
<body>



<?php

$obj = new IndexView();

$obj -> adminDashboardHeader();

$obj -> adminAccountDetails($account);

$obj -> adminDashboardFooter();

?>


<script>

    var deleteBtn = document.getElementById('deleteBtn');
    if(deleteBtn){
        deleteBtn.addEventListener('click', function(e){
            e.preventDefault();
            Swal.fire({
                title: 'Delete Account?',
                text: 'This action cannot be undone. are you sure you want to delete this account?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if(result.isConfirmed){
                    window.location.href = 'delete-account.php?id=<?= urlencode($account['id']) ?>';
                }
            });
        });
    }

</script>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

</body>
</html>