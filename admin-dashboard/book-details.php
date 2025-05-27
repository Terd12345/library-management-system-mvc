<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php?error=unauthorized');
    exit();
}

include "../includes/classloader.inc.php";

$book = null;
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $bookId = (int)$_GET['id'];
    $controller = new AdminController();
    $book = $controller->getBookById($bookId);
}

if (!$book) {
    echo '<div class="alert alert-danger m-4">Book not found.</div>';
    exit();
}

$imgPath = !empty($book['background_image']) ? $book['background_image'] : '../assets/images/sample-book.jpg';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library | Book Details</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/admin-dashboard.css">
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">
</head>
<body>



<?php
$obj = new IndexView();
$obj -> adminDashboardHeader();
$obj -> adminBookDetails($book, $imgPath);
$obj -> adminDashboardFooter();
?>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script>
// Image preview for file input
  document.addEventListener('DOMContentLoaded', function() {
    const input = document.getElementById('book_image_input');
    const preview = document.getElementById('bookImagePreview');
    input.addEventListener('change', function(e) {
      if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(ev) {
          preview.src = ev.target.result;
        };
        reader.readAsDataURL(input.files[0]);
      }
    });

    // SweetAlert for Update
    document.getElementById('updateBtn').addEventListener('click', function(e) {
      Swal.fire({
        title: 'Update Book?',
        text: 'Are you sure you want to update this book? Changes will be saved.',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Yes, update',
        cancelButtonText: 'Cancel',
      }).then((result) => {
        if (result.isConfirmed) {
          e.target.closest('form').submit();
        }
      });
    });

    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    Swal.fire({
      icon: 'success',
      title: 'Book updated!',
      text: 'The book details have been updated successfully.',
      timer: 2000,
      showConfirmButton: false
    });
  <?php endif; ?>

    // SweetAlert for Delete
    document.getElementById('deleteBtn').addEventListener('click', function(e) {
      e.preventDefault();
      Swal.fire({
        title: 'Delete Book?',
        text: 'This action cannot be undone. Are you sure you want to delete this book?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete',
        cancelButtonText: 'Cancel',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = 'delete-book.php?id=<?= urlencode($book['id']) ?>';
        }

        
      });
    });
  });
</script>
</body>
</html>