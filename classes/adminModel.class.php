<?php

class AdminModel extends connection {
    
    public function InsertBook($background_image, $isbn, $book_title, $author, $publisher, $publication_year, $genre, $language, $description, $status = 'Available'){
        $sql = "SELECT * FROM books WHERE isbn = ?";
        $stmt = $this->view()->prepare($sql);
        $stmt->execute([$isbn]);

        if($stmt->rowCount() > 0){
            echo "<br> Book already exists";
        }
        else{
            $sql = "INSERT INTO books(background_image, isbn, book_title, author, publisher, publication_year, genre, language, description, status) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->view()->prepare($sql);
            $stmt->execute([$background_image, $isbn, $book_title, $author, $publisher, $publication_year, $genre, $language, $description, $status]);
            // echo "<br> Book added successfully";
            header('Location: add-book.php?added=1');
        }
    }

    public function getAllBooks() {
        $sql = "SELECT * FROM books ORDER BY id DESC";
        $stmt = $this->view()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getBookById($id) {
        $sql = "SELECT * FROM books WHERE id = ? LIMIT 1";
        $stmt = $this->view()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateBook($id, $background_image, $book_title, $author, $publisher, $publication_year, $genre, $language, $description) {
    $sql = "UPDATE books SET background_image = ?, book_title = ?, author = ?, publisher = ?, publication_year = ?, genre = ?, language = ?, description = ? WHERE id = ?";
    $stmt = $this->view()->prepare($sql);
    return $stmt->execute([$background_image, $book_title, $author, $publisher, $publication_year, $genre, $language, $description, $id]);
    }

    public function deleteBook($id) {
        $sql = "DELETE FROM books WHERE id = ?";
        $stmt = $this->view()->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function deleteAccount($id){
        $sql = "DELETE FROM registrations WHERE id = ?";
        $stmt = $this->view()->prepare($sql);
        return $stmt->execute([$id]);
    }
    public function getAllAccounts(){
        $sql = "SELECT * FROM registrations ORDER BY id DESC";
        $stmt = $this->view()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAccountById($id){
        $sql = "SELECT * FROM registrations WHERE id = ? LIMIT 1";
        $stmt = $this->view()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // Get all borrow transactions with user and book details
    public function getAllBorrowedBooksWithUsers() {
        $pdo = $this->view();
        $stmt = $pdo->query('
            SELECT t.id as transaction_id, t.borrowed_at, t.due_date, t.returned_at, t.status as borrow_status,
                   b.book_title, b.author, b.isbn, b.publisher, b.publication_year, b.genre, b.language,
                   r.id as user_id, r.stud_id, r.username, r.full_name, r.dob, r.gender, r.contact, r.email, r.address, r.city, r.province, r.postal_code, r.department, r.year_level
            FROM borrow_transactions t
            JOIN books b ON t.book_id = b.id
            JOIN registrations r ON t.student_id = r.id
            ORDER BY t.borrowed_at DESC
        ');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get all returned/archived borrow transactions with user and book details
    public function getAllReturnedBooksWithUsers() {
        $pdo = $this->view();
        $pdo->exec('CREATE TABLE IF NOT EXISTS borrow_archive LIKE borrow_transactions');
        $stmt = $pdo->query('
            SELECT a.id as transaction_id, a.borrowed_at, a.due_date, a.returned_at, a.status as borrow_status,
                   b.book_title, b.author, b.isbn, b.publisher, b.publication_year, b.genre, b.language,
                   r.id as user_id, r.stud_id, r.username, r.full_name, r.dob, r.gender, r.contact, r.email, r.address, r.city, r.province, r.postal_code, r.department, r.year_level
            FROM borrow_archive a
            JOIN books b ON a.book_id = b.id
            JOIN registrations r ON a.student_id = r.id
            WHERE a.status = "returned"
            ORDER BY a.returned_at DESC
        ');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get all overdue borrowed books (not yet returned and past due date)
    public function getAllOverdueBooksWithUsers() {
        $pdo = $this->view();
        $stmt = $pdo->query('
            SELECT t.id as transaction_id, t.borrowed_at, t.due_date, t.status as borrow_status,
                   b.book_title, b.author, b.isbn, b.publisher, b.publication_year, b.genre, b.language,
                   r.id as user_id, r.stud_id, r.username, r.full_name, r.dob, r.gender, r.contact, r.email, r.address, r.city, r.province, r.postal_code, r.department, r.year_level
            FROM borrow_transactions t
            JOIN books b ON t.book_id = b.id
            JOIN registrations r ON t.student_id = r.id
            WHERE t.status = "borrowed" AND t.due_date < NOW()
            ORDER BY t.due_date ASC
        ');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}