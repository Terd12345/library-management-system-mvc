<?php

class LibraryModel extends connection {

    // Resolve the real registration id from either id or stud_id
    public function resolveRegistrationId($userId) {
        $pdo = $this->view();
        // Try id first
        $stmt = $pdo->prepare('SELECT id FROM registrations WHERE id = ?');
        $stmt->execute([$userId]);
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch();
            return $row['id'];
        }
        // Try stud_id
        $stmt = $pdo->prepare('SELECT id FROM registrations WHERE stud_id = ?');
        $stmt->execute([$userId]);
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch();
            return $row['id'];
        }
        return false;
    }

    // Get all currently borrowed books for a student
    public function getBorrowedBooksByStudentId($studentId) {
        $pdo = $this->view();
        $stmt = $pdo->prepare('SELECT b.*, t.id as transaction_id, t.borrowed_at, t.due_date, t.status as borrow_status FROM borrow_transactions t JOIN books b ON t.book_id = b.id WHERE t.student_id = ? AND t.status = ? ORDER BY t.borrowed_at DESC');
        $stmt->execute([$studentId, 'borrowed']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Return a borrowed book: update transaction and book status
    public function returnBook($transactionId, $bookId) {
        $pdo = $this->view();
        // Mark transaction as returned
        $stmt = $pdo->prepare('UPDATE borrow_transactions SET status = ?, returned_at = ? WHERE id = ?');
        $stmt->execute(['returned', date('Y-m-d H:i:s'), $transactionId]);
        // Set book as available
        $stmt2 = $pdo->prepare('UPDATE books SET status = ? WHERE id = ?');
        $stmt2->execute(['available', $bookId]);
    }

    // Archive a returned borrow transaction
    public function archiveBorrowTransaction($transactionId) {
        $pdo = $this->view();
        // Copy the record to borrow_archive
        $pdo->exec('CREATE TABLE IF NOT EXISTS borrow_archive LIKE borrow_transactions');
        $stmt = $pdo->prepare('INSERT INTO borrow_archive SELECT * FROM borrow_transactions WHERE id = ?');
        $stmt->execute([$transactionId]);
        // Delete from borrow_transactions
        $stmt = $pdo->prepare('DELETE FROM borrow_transactions WHERE id = ?');
        $stmt->execute([$transactionId]);
    }
}