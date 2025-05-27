<?php

class IndexController extends IndexModel{

    public function InfoRegister($username, $password, $full_name, $dob, $gender, $contact, $email, $address, $city, $province, $postal_code, $student_id, $department, $year_level, $library_card, $valid_id){
        $this->InsertRegister($username, $password, $full_name, $dob, $gender, $contact, $email, $address, $city, $province, $postal_code, $student_id, $department, $year_level, $library_card, $valid_id);
    }


    public function RegisterController(){
        if(isset($_POST['submitBtn'])){
            $username       =   $_POST['username'];
            $password       =   $_POST['password'];
            $full_name      =   $_POST['full_name'];
            $dob            =   $_POST['dob'];
            $gender         =   $_POST['gender'];
            $contact        =   $_POST['contact'];
            $email          =   $_POST['email'];
            $address        =   $_POST['address'];
            $city           =   $_POST['city'];
            $province       =   $_POST['province'];
            $postal_code    =   $_POST['postal_code'];
            $student_id     =   $_POST['student_id'];
            $department     =   $_POST['department'];
            $year_level     =   $_POST['year_level'];
            $library_card   =   $_POST['library_card'];
            $valid_id       =   $_POST['valid_id'];

            // Handle file upload
            if (isset($_FILES['valid_id']) && $_FILES['valid_id']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'uploads/';
                $valid_id = $uploadDir . basename($_FILES['valid_id']['name']);
                if (!move_uploaded_file($_FILES['valid_id']['tmp_name'], $valid_id)) {
                    die("Failed to upload file.");
                }
            } else {
                $valid_id = null;
            }

            $this->InfoRegister($username, $password, $full_name, $dob, $gender, $contact, $email, $address, $city, $province, $postal_code, $student_id, $department, $year_level, $library_card, $valid_id);

        }
    }

    public function handleLogin($email, $password) {
      
        $user = $this->authenticateUser($email, $password);
        if ($user) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['stud_id'] = $user['stud_id'];
            $_SESSION['user_name'] = $user['username'];
            unset($_SESSION['role']); // Remove role if previously set
            header("Location: library-dashboard/index.php");
            exit();
        }
        
        $librarian = $this->authenticateLibrarian($email, $password);
        if ($librarian) {
            session_start();
            $_SESSION['user_id'] = $librarian['id'];
            $_SESSION['user_name'] = $librarian['username'];
            $_SESSION['role'] = 'librarian';
            header("Location: admin-dashboard/index.php");
            exit();
        }
       
        header("Location: login.php?error=Wrong Email or Password");
        exit();
    }

}