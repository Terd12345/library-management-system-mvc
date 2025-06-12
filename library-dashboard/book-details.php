<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php?error=unauthorized');
    exit();
}

include '../includes/classloader.inc.php';

// Get book ID from query string
$book = null;
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $bookId = (int)$_GET['id'];
    $model = new AdminModel();
    $book = $model->getBookById($bookId);
}

if (!$book) {
    echo '<div class="container mt-5"><div class="alert alert-danger">Book not found.</div></div>';
    exit();
}

$imgPath = !empty($book['background_image']) ? '../uploads/' . htmlspecialchars($book['background_image']) : '../assets/images/sample-book.jpg';

$obj = new IndexView();

$obj -> libraryDashboardHeader();

$obj -> bookDetails($book);

?>

<title>Book Details</title>
<link rel="stylesheet" href="../assets/css/lib-dashboard.css" />
<link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">
<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">



<?php $obj->libraryDashboardFooter(); ?>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var borrowBtn = document.getElementById('borrowBtn');
    if (borrowBtn) {
        borrowBtn.addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                icon: 'info',
                title: 'Borrowing Notice',
                html: 'Please note: <b>Books must be returned within 2 weeks</b> of borrowing. Late returns may result in penalties.',
                confirmButtonText: 'Borrow Book',
                customClass: {popup: 'swal2-border-radius'}
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'borrow-book.php?id=<?php echo $bookId; ?>';
                }
            });
        });
    }
});
</script>
</body>
</html>
