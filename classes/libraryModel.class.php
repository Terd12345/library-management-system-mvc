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
        $stmt = $pdo->prepare('SELECT b.*, t.borrowed_at, t.due_date, t.status as borrow_status FROM borrow_transactions t JOIN books b ON t.book_id = b.id WHERE t.student_id = ? AND t.status = ? ORDER BY t.borrowed_at DESC');
        $stmt->execute([$studentId, 'borrowed']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}