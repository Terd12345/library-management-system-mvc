<?php

class LibraryController extends LibraryModel {

    // Borrow a book: set status to unavailable and log borrowing
    public function borrowBook($bookId, $userId) {
        $pdo = $this->view();
        try {
            // Set book status to unavailable
            $stmt = $pdo->prepare('UPDATE books SET status = ? WHERE id = ?');
            $stmt->execute(['unavailable', $bookId]);

            // Resolve student_id (registrations.id)
            $studentId = $this->resolveRegistrationId($userId);
            file_put_contents(__DIR__ . '/../borrow_debug.log', "Resolved studentId: $studentId\n", FILE_APPEND);
            if (!$studentId) throw new Exception('Student ID not found');

            // Insert into borrow_transactions
            $now = date('Y-m-d H:i:s');
            $due = date('Y-m-d H:i:s', strtotime('+2 weeks'));
            $logMsg = "Insert params: bookId=$bookId, studentId=$studentId, now=$now, due=$due\n";
            file_put_contents(__DIR__ . '/../borrow_debug.log', $logMsg, FILE_APPEND);
            $insert = $pdo->prepare('INSERT INTO borrow_transactions (book_id, student_id, borrowed_at, due_date, status) VALUES (?, ?, ?, ?, ?)');
            $success = $insert->execute([$bookId, $studentId, $now, $due, 'borrowed']);
            if (!$success) {
                $errorInfo = $insert->errorInfo();
                file_put_contents(__DIR__ . '/../borrow_debug.log', 'Insert failed: ' . print_r($errorInfo, true) . "\n", FILE_APPEND);
                throw new Exception('Insert failed: ' . $errorInfo[2]);
            } else {
                file_put_contents(__DIR__ . '/../borrow_debug.log', "Insert success!\n", FILE_APPEND);
            }
            return true;
        } catch (Exception $e) {
            error_log('BorrowBook error: ' . $e->getMessage());
            file_put_contents(__DIR__ . '/../borrow_debug.log', 'Exception: ' . $e->getMessage() . "\n", FILE_APPEND);
            echo '<div style="color:red;">Error: ' . htmlspecialchars($e->getMessage()) . '</div>';
            return false;
        }
    }

}