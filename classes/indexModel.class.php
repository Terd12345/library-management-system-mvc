<?php

class IndexModel extends connection{

    public function InsertRegister($username, $password, $full_name, $dob, $gender, $contact, $email, $address, $city, $province, $postal_code, $student_id, $department, $year_level, $library_card, $valid_id){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "SELECT COUNT(*) as count FROM registrations";
        $stmt = $this->view()->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch();

        $count = $row['count'] + 1;
        $stud_id = date('Y') . '-' . str_pad($count, 4, '0', STR_PAD_LEFT);

        $sql = "SELECT * FROM registrations WHERE email = ? AND username = ?";
        $stmt = $this->view()->prepare($sql);
        $stmt->execute([$email, $username]);

        if($stmt->rowCount() > 0){
            echo "<br> User already exists";
        }
        else{
            $sql = "INSERT INTO registrations(stud_id, username, password, full_name, dob, gender, contact, email, address, city, province, postal_code, student_id, department, year_level, library_card, valid_id) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->view()->prepare($sql);
            $stmt->execute([$stud_id, $username, $hashedPassword, $full_name, $dob, $gender, $contact, $email, $address, $city, $province, $postal_code, $student_id, $department, $year_level, $library_card, $valid_id]);
            // Auto-login after registration
            session_start();
            $_SESSION['user_id'] = $this->view()->lastInsertId();
            $_SESSION['stud_id'] = $stud_id;
            $_SESSION['user_name'] = $username;
            header("Location: library-dashboard/index.php");
            exit();
        }
    }

    public function authenticateUser($email, $password) {
        try {
            $sql = "SELECT * FROM registrations WHERE email = ?";
            $stmt = $this->view()->prepare($sql);
            $stmt->execute([$email]);

            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch();
                if (password_verify($password, $user['password'])) {
                    return $user; 
                } else {
                    return false;
                }
            } else {
                return false; 
            }
        } catch (PDOException $e) {
            die("Error authenticating user: " . $e->getMessage());
        }
    }

    public function authenticateLibrarian($email, $password) {
        try {
            $sql = "SELECT * FROM librarian WHERE email = ?";
            $stmt = $this->view()->prepare($sql);
            $stmt->execute([$email]);

            if ($stmt->rowCount() > 0) {
                $admin = $stmt->fetch();
                if (password_verify($password, $admin['password'])) {
                    return $admin;
                }
            }
            return false;
        } catch (PDOException $e) {
            die("Error authenticating admin: " . $e->getMessage());
        }
    }

}