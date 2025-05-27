<?php

class AdminModel extends connection {
    
    public function InsertBook($background_image, $isbn, $book_title, $author, $publisher, $publication_year, $genre, $language, $description){
        $sql = "SELECT * FROM books WHERE isbn = ?";
        $stmt = $this->view()->prepare($sql);
        $stmt->execute([$isbn]);

        if($stmt->rowCount() > 0){
            echo "<br> Book already exists";
        }
        else{
            $sql = "INSERT INTO books(background_image, isbn, book_title, author, publisher, publication_year, genre, language, description) VALUES(?,?,?,?,?,?,?,?,?)";
            $stmt = $this->view()->prepare($sql);
            $stmt->execute([$background_image, $isbn, $book_title, $author, $publisher, $publication_year, $genre, $language, $description]);
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

}