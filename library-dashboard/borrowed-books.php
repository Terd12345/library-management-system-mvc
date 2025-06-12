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

    // Get current user id (try both user_id and stud_id)
    $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    if (!$userId && isset($_SESSION['stud_id'])) {
        $userId = $_SESSION['stud_id'];
    }

    // Resolve registration id
    require_once '../classes/libraryModel.class.php';
    $model = new LibraryModel();
    $studentId = $model->resolveRegistrationId($userId);

    $books = [];
    if ($studentId) {
        $books = $model->getBorrowedBooksByStudentId($studentId);
    }

    $obj = new IndexView();
    $obj->libraryDashboardHeader();

    // Display borrowed books
    ?>
    <div class="container mt-5 mb-5">
      <h2 class="mb-4">My Borrowed Books</h2>
      <?php if (empty($books)): ?>
        <div class="alert alert-info">You have not borrowed any books.</div>
      <?php else: ?>
        <div class="table-responsive">
          <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Borrowed At</th>
                <th>Due Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book): ?>
              <tr>
                <td><?php echo htmlspecialchars($book['book_title']); ?></td>
                <td><?php echo htmlspecialchars($book['author']); ?></td>
                <td><?php echo htmlspecialchars($book['borrowed_at']); ?></td>
                <td><?php echo htmlspecialchars($book['due_date']); ?></td>
                <td>
                  <?php echo $book['borrow_status'] === 'borrowed' ? '<span class="badge bg-success">Borrowed</span>' : htmlspecialchars($book['borrow_status']); ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>
    </div>
    <?php
    $obj->libraryDashboardFooter();
    ?>



<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
