<?php

class AdminController extends AdminModel {
    public function InsertBook($background_image, $isbn, $book_title, $author, $publisher, $publication_year, $genre, $language, $description) {
        parent::insertBook($background_image, $isbn, $book_title, $author, $publisher, $publication_year, $genre, $language, $description);
    }

    public function AddBookController() {
        if (isset($_POST['submit'])) {
            $background_image = $_FILES['book_image']['name'];
            $uploadDir = '../uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $targetFile = $uploadDir . uniqid('book_', true) . '_' . basename($background_image);
            $check = getimagesize($_FILES['book_image']['tmp_name']);
            if ($check === false) {
                die("File is not an image.");
            }
            if (!move_uploaded_file($_FILES['book_image']['tmp_name'], $targetFile)) {
                die("Failed to upload file.");
            }
            $isbn = $_POST['isbn'];
            $book_title = $_POST['title'];
            $author = $_POST['author'];
            $publisher = $_POST['publisher'];
            $publication_year = $_POST['publication_year'];
            $genre = $_POST['genre'];
            $language = $_POST['language'];
            $description = $_POST['description'];
            $this->InsertBook($targetFile, $isbn, $book_title, $author, $publisher, $publication_year, $genre, $language, $description);
        }
    }

    public function getBookById($id) {
        $model = new AdminModel();
        return $model->getBookById($id);
    }


    public function updateBookController($id) {
    $book = $this->getBookById($id);
    if (!$book) return false;

    $background_image = $book['background_image'];
    if (isset($_FILES['book_image']) && $_FILES['book_image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $targetFile = $uploadDir . uniqid('book_', true) . '_' . basename($_FILES['book_image']['name']);
        $check = getimagesize($_FILES['book_image']['tmp_name']);
        if ($check !== false && move_uploaded_file($_FILES['book_image']['tmp_name'], $targetFile)) {
            $background_image = $targetFile;
        }
    }

    $book_title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $publication_year = $_POST['publication_year'];
    $genre = $_POST['genre'];
    $language = $_POST['language'];
    $description = $_POST['description'];

    return $this->updateBook($id, $background_image, $book_title, $author, $publisher, $publication_year, $genre, $language, $description);
    }

    public function deleteBookController($id) {
        return $this->deleteBook($id);
    }

}