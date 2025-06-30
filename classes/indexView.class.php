<?php

class IndexView {

    public function HeaderIndex() {
        $currentPage = basename($_SERVER['PHP_SELF']); // Get the current page name
    
        echo '
          <div class="hold">
            <div class="header">
                <div class="container">
                    <div id="logo">
                        <img src="assets/images/logo.jpg" alt="Library Logo" height="60px" width="60px">
                    </div>

                    <input type="checkbox" id="nav-toggle" class="nav-toggle">
                    <label for="nav-toggle" class="nav-toggle-label">&#9776;</label>

                    <ul class="nav">
                        <li><a href="index.php" class="' . ($currentPage == 'index.php' ? 'active' : '') . '">Home</a></li>
                        <li><a href="about.php" class="' . ($currentPage == 'about.php' ? 'active' : '') . '">About</a></li>
                        <li><a href="contact.php" class="' . ($currentPage == 'contact.php' ? 'active' : '') . '">Contact Us</a></li>
                        <li><a href="login.php" target="_blank" class="' . ($currentPage == 'login.php' ? 'active' : '') . '">Login</a></li>
                        <li><a href="register.php" target="_blank" class="' . ($currentPage == 'register.php' ? 'active' : '') . '">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </div>
        ';
    }

    public function landingPage(){

        echo '

        <div class="section">
        <div class="slider">
            <div class="container slidercontent">
            <div class="gray-hero-box">
                <h1 class="hero">Library Management System</h1>
                <h2 class="hero">"In the digital age, an online library management system isnt just a convenience; its the key to <br>unlocking a world of knowledge for everyone, everywhere."</h2>
                <a href="register.php" target="_blank" class="call-link">
                  <div class="call">
                    <span>Explore Now</span>
                  </div>
                </a>
                </div>

            </div>
            </div>
        </div>
        </div>

        <div class="section">
        <div class="container">
            <div class="col four">
            <h1 class="icon">📚</h1>
            <h1 class="service">Easy Cataloging</h1>
            <p>Organize and manage books and digital resources effortlessly using our intuitive interface designed for librarians and staff.</p>
            </div>
            <div class="col four">
            <h1 class="icon">🔍</h1>
            <h1 class="service">Advanced Search</h1>
            <p>Find books and resources quickly with our smart search functionality, filtering by author, title, subject, and more.</p>
            </div>
            <div class="responsivegroup"></div>
            <div class="col four">
            <h1 class="icon">⏱️</h1>
            <h1 class="service">Real-Time Updates</h1>
            <p>Stay updated with real-time availability of books and get notified of due dates and reservations.</p>
            </div>
            <div class="col four">
            <h1 class="icon">👩‍🎓</h1>
            <h1 class="service">Student Friendly</h1>
            <p>Designed with students in mind, offering a seamless and engaging experience for borrowing and learning.</p>
            </div>
            <div class="group"></div>
        </div>
        </div>

        <div class="section bg">
        <div class="container">
            <h1>Explore Our Features</h1>
            <h2>Enhancing access to learning resources for all users</h2>
            <div class="col three bg nopad pointer">
            <div class="imgholder">
                <img src="assets/images/library.jpg" alt="Library" height="100px" width="100px">
            </div>
            <h1 class="feature">Comprehensive Catalog</h1>
            <p>Access thousands of books, journals, and multimedia materials in one place.</p>
            </div>
            <div class="col three bg nopad pointer">
            <div class="imgholder">
                <img src="assets/images/1.jpg" alt="Study" height="100px" width="100px">
            </div>
            <h1 class="feature">User Accounts</h1>
            <p>Manage personal checkouts, holds, and reading history with a secure login.</p>
            </div>
            <div class="col three bg nopad pointer">
            <div class="imgholder">
                <img src="assets/images/2.jpeg" alt="Books" height="100px" width="100px">
            </div>
            <h1 class="feature">Mobile Access</h1>
            <p>Access the system anytime, anywhere using your smartphone or tablet.</p>
            </div>
            <div class="group margin"></div>
            <div class="col three bg nopad pointer">
            <div class="imgholder">
                <img src="assets/images/3.jpeg" alt="E-books" height="100px" width="100px">
            </div>
            <h1 class="feature">Digital Resources</h1>
            <p>Enjoy access to e-books, audiobooks, and online journals with ease.</p>
            </div>
            <div class="col three bg nopad pointer">
            <div class="imgholder">
                <img src="assets/images/4.jpg" alt="Assistance" height="100px" width="100px">
            </div>
            <h1 class="feature">Librarian Support</h1>
            <p>Chat or connect with our librarians for assistance or recommendations.</p>
            </div>
            <div class="col three bg nopad pointer">
            <div class="imgholder">
                <img src="assets/images/5.jpg" alt="Learning" height="100px" width="100px">
            </div>
            <h1 class="feature">Learning Spaces</h1>
            <p>Book private study rooms and collaborative spaces in advance.</p>
            </div>
            <div class="group"></div>
        </div>
        </div>

        <div class="section">
        <div class="container">
            <h1>Why Choose Us?</h1>
            <h2>Your gateway to smarter learning</h2>
            <div class="col three">
            <h1 class="icon side">✔️</h1>
            <h1 class="feature side">User Friendly</h1>
            <p class="side">Clean and simple interface designed to make managing your library account effortless and enjoyable.</p>
            </div>
            <div class="col three">
            <h1 class="icon side">⚙️</h1>
            <h1 class="feature side">Highly Customizable</h1>
            <p class="side">Flexible options to tailor the platform for schools, colleges, and public libraries.</p>
            </div>
            <div class="col three">
            <h1 class="icon side">🔒</h1>
            <h1 class="feature side">Secure Access</h1>
            <p class="side">Advanced security features ensure your data and account information are protected.</p>
            </div>
            <div class="group margin"></div>
            <div class="col three">
            <h1 class="icon side">🌐</h1>
            <h1 class="feature side">Cloud-Based</h1>
            <p class="side">Access and manage your library resources from anywhere in the world.</p>
            </div>
            <div class="col three">
            <h1 class="icon side">📈</h1>
            <h1 class="feature side">Reports & Analytics</h1>
            <p class="side">Gain insights into borrowing trends, user engagement, and inventory management.</p>
            </div>
            <div class="col three">
            <h1 class="icon side">🧠</h1>
            <h1 class="feature side">Smart Recommendations</h1>
            <p class="side">Personalized book suggestions based on your interests and reading history.</p>
            </div>
            <div class="group margin"></div>
        </div>
        </div>

        <div class="section bg">
        <div class="container">
            <h1>Testimonials</h1>
            <h2>Hear from our happy users</h2>
            <div class="col two bg margin extrapad">
            <h1 class="icon side">👨‍🏫</h1>
            <span class="feature side">Romeo V. Eustaquio III</span><span class="side"> - Teacher</span>
            <p class="side">“This system has completely changed how I manage reading materials for my classes. It’s quick, reliable, and easy to use.”</p>
            </div>
            <div class="col two bg margin extrapad">
            <h1 class="icon side">👩‍🎓</h1>
            <span class="feature side">Romeo V. Eustaquio III</span><span class="side"> - Student</span>
            <p class="side">“I can now find the books I need without walking all over campus. The notifications help me return books on time!”</p>
            </div>
            <div class="group"></div>
            <div class="col two bg margin extrapad">
            <h1 class="icon side">📖</h1>
            <span class="feature side">Library Staff</span><span class="side"> - Coordinator</span>
            <p class="side">“Managing inventory is no longer a headache. The automated features save us so much time.”</p>
            </div>
            <div class="col two bg margin extrapad">
            <h1 class="icon side">🏫</h1>
            <span class="feature side">Romeo V. Eustaquio III</span><span class="side"> - Developer</span>
            <p class="side">“Implementing this system was really hard”</p>
            </div>
            <div class="group"></div>
        </div>
        </div>

        <div class="section">
        <div class="container">
            <div class="col two">
            <h1 class="icon">⚡</h1>
            <h1 class="service">Fast Deployment</h1>
            <p>Get your library up and running in no time with our fast and guided onboarding process.</p>
            </div>
            <div class="col two">
            <h1 class="icon">💼</h1>
            <h1 class="service">Professional Support</h1>
            <p>Our dedicated support team is ready to help you with setup, training, and troubleshooting.</p>
            </div>
            <div class="group"></div>
        </div>
        </div>

        <div class="section">
        <div class="container">
            <h1 class="reset">Ready to revolutionize your library experience?</h1>
        </div>
        </div>

        ';

    }

    public function aboutPage(){

        echo '
        
        <div class="section">
        <div class="slider">
            <div class="container slidercontent">
            <div class="gray-hero-box">
                <h1 class="hero">About Us</h1>
                <h2 class="hero">Empowering knowledge through innovation and accessibility."</h2>
            </div>
            </div>
        </div>
        </div>

    <div class="section bg">
        <div class="container">
            <h1>Our Mission</h1>
            <p>
                At the Library Management System, our mission is to provide a seamless and efficient platform for managing library resources. 
                We aim to empower students, educators, and researchers by making knowledge accessible to everyone, everywhere.
            </p>
            <h1>Our Vision</h1>
            <p>
                We envision a world where libraries are not limited by physical boundaries, and every individual has access to the wealth of knowledge 
                that libraries offer, through innovative and user-friendly technology.
            </p>
        </div>
    </div>

        ';

    }

    public function contactPage(){
        // Handle form submission and send email via PHPMailer
        $success = '';
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = trim($_POST['message']);
            // Load PHPMailer
            require_once __DIR__ . '/../vendor/autoload.php';
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'romeov.eustaquioiii@gmail.com'; 
                $mail->Password   = 'bjsf hibw qrsm tdty';    
                $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;
                //Recipients
                $mail->setFrom($email, $name);
                $mail->addAddress('romeov.eustaquioiii@gmail.com', 'Library Admin'); // <-- CHANGE THIS
                //Content
                $mail->isHTML(true);
                $mail->Subject = 'Library Contact Form Message';
                $mail->Body    = '<b>Name:</b> ' . htmlspecialchars($name) . '<br><b>Email:</b> ' . htmlspecialchars($email) . '<br><b>Message:</b><br>' . nl2br(htmlspecialchars($message));
                $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";
                $mail->send();
                $success = 'Message sent successfully! We will get back to you soon.';
            } catch (Exception $e) {
                $error = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            }
        }
        echo '
        <div class="section">
        <div class="slider">
            <div class="container slidercontent">
                <div class="gray-hero-box">
                    <h1 class="hero">Contact Us</h1>
                    <h2 class="hero">We\'d love to hear from you! Reach out to us for any inquiries or support.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="section bg">
        <div class="container">
            <h1>Get in Touch</h1>';
        if ($success) {
            echo '<div class="alert alert-success">' . $success . '</div>';
        }
        if ($error) {
            echo '<div class="alert alert-danger">' . $error . '</div>';
        }
        echo '<form action="" method="POST" class="contact-form">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="col-12">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <button type="submit" class="btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </div>';
    }


    public function FooterIndex(){

        echo '
        
        <div class="section">
        <div class="footer">
            <div class="container white">
            <div class="col four left">
                <h1>About</h1>
                <p>This Library Management System aims to simplify the way resources are accessed and managed in educational institutions and public libraries.</p>
                <p>It brings together efficiency, accessibility, and smart technology in one platform.</p>
            </div>
            <div class="col four left">
                <h1>Technology</h1>
                <p>Built with HTML5, PHP, CSS3, and a touch of JavaScript. Fully responsive and compatible with all modern browsers and devices.</p>
            </div>
            <div class="col four left">
                <h1>Philosophy</h1>
                <p>We believe in simplicity, speed, and user empowerment. Our goal is to make library access easy for everyone, everywhere.</p>
            </div>
            
            </div>
        </div>
        </div>
        
        ';

    }



    public function loginPage(){

        $error = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';

        $message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';

        echo '
        <div class="login-container">
            <h3 class="text-center mb-4">Login to Your Account</h3>';

        if ($error) {
            echo '<div class="alert alert-danger text-center">' . $error . '</div>';
        }
        if ($message) {
            echo '<div class="alert alert-success text-center">' . $message . '</div>';
        }

        echo '
            <form action="process_login.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>


                <button type="submit" class="btn login-btn w-100">Login</button>
            </form>
            <p class="text-center mt-3">Dont have an account? <a href="register.php">Register</a></p>
        </div>';
    }


    public function registerPage(){

        echo '
        
            <!-- Data Privacy Notice Modal -->
<div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="privacyForm">
        <div class="modal-header">
          <h5 class="modal-title" id="privacyModalLabel">Data Privacy Notice</h5>
        </div>
        <div class="modal-body">
          <p>We value your privacy. By continuing, you agree to our data collection practices outlined in our Privacy Policy.</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">I Agree</button>
        </div>
      </form>
    </div>
  </div>
</div>

  <div class="form-container">
    <form id="multiStepForm" action="register_process.php" method="POST" enctype="multipart/form-data">
  <div class="step-indicator">
    <span class="active">Account</span>
    <span>Personal</span>
    <span>Address</span>
    <span>Institution</span>
  </div>

  <!-- Step 1 -->
  <div class="form-step active">
    <div class="row g-3">
      <div class="col-md-6">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username" required>
      </div>
      <div class="col-md-6">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
      <div class="col-12">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
      </div>
    </div>
    <button type="button" class="btn btn-success mt-3 next-step">Next</button>
  </div>

  <!-- Step 2 -->
  <div class="form-step">
    <div class="row g-3">
      <div class="col-md-6">
        <label>Full Name</label>
        <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
      </div>
      <div class="col-md-6">
        <label>Date of Birth</label>
        <input type="date" class="form-control" name="dob" required>
      </div>
      <div class="col-md-6">
        <label>Gender</label>
        <select class="form-select" name="gender" required>
          <option value="">Select</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Contact Number</label>
        <input type="number" class="form-control" name="contact" placeholder="Contact Number" required>
      </div>
      <div class="col-12">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
    </div>
    <div class="d-flex justify-content-between mt-3">
      <button type="button" class="btn btn-secondary prev-step">Back</button>
      <button type="button" class="btn btn-success next-step">Next</button>
    </div>
  </div>

  <!-- Step 3 -->
  <div class="form-step">
    <div class="row g-3">
      <div class="col-12">
        <label>Block Address</label>
        <input type="text" class="form-control" name="address" placeholder="Address" required>
      </div>
      <div class="col-md-6">
        <label>City</label>
        <input type="text" class="form-control" name="city" placeholder="City" required>
      </div>
      <div class="col-md-6">
        <label>Province/State</label>
        <input type="text" class="form-control" name="province" placeholder="Province/State" required>
      </div>
      <div class="col-md-6">
        <label>Postal Code</label>
        <input type="number" class="form-control" name="postal_code" placeholder="Postal Code" required>
      </div>
    </div>
    <div class="d-flex justify-content-between mt-3">
      <button type="button" class="btn btn-secondary prev-step">Back</button>
      <button type="button" class="btn btn-success next-step">Next</button>
    </div>
  </div>

  <!-- Step 4 -->
  <div class="form-step">
    <div class="row g-3">
      <div class="col-md-6">
        <label>Student ID</label>
        <input type="text" class="form-control" name="student_id" placeholder="ID" required>
      </div>
      <div class="col-md-6">
        <label>Department/Course</label>
        <input type="text" class="form-control" name="department" placeholder="Department" required>
      </div>
      <div class="col-md-6">
        <label>Year Level</label>
        <input type="text" class="form-control" name="year_level" placeholder="Year Level / Position" required>
      </div>
      <div class="col-md-6">
        <label>Library Card Number (optional)</label>
        <input type="text" class="form-control" name="library_card" placeholder="Card Number">
      </div>
      <div class="col-12">
        <label>Upload Valid ID (e.g., Student ID, Drivers License)</label>
        <input type="file" class="form-control" name="valid_id" accept="image/*,.pdf" required>
      </div>
    </div>
    <div class="d-flex justify-content-between mt-3">
      <button type="button" class="btn btn-secondary prev-step">Back</button>
      <button type="submit" name="submitBtn" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  </div>


        ';

    }

    // //  //  //  //  //  //  //  // library UI //  //  //  //  //  //  //  //  //  //  // 

    public function libraryDashboardHeader() {
    $currentPage = basename($_SERVER['PHP_SELF']);

    echo '
    <!-- Header Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg">
      <div class="container-fluid px-4">
        <a class="navbar-brand" href="#">Library Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link ' . ($currentPage === "index.php" ? "active" : "") . '" href="index.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ' . ($currentPage === "browse-books.php" ? "active" : "") . '" href="browse-books.php">Browse Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ' . ($currentPage === "borrowed-books.php" ? "active" : "") . '" href="borrowed-books.php">Borrowed Books</a>
            </li>
            
          </ul>

          <div class="d-flex align-items-center gap-3">
            <div class="dropdown">
              <img src="" class="avatar dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" role="button" />
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                
              
                <li><a class="dropdown-item text-danger" href="../logout.php">🚪 Logout</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </nav>';
}


    public function libraryDashboardMain() {
    // Get current user id (try both user_id and stud_id)
    $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    if (!$userId && isset($_SESSION['stud_id'])) {
        $userId = $_SESSION['stud_id'];
    }
    require_once '../classes/libraryModel.class.php';
    $model = new LibraryModel();
    $studentId = $model->resolveRegistrationId($userId);

    // Fetch all borrowed books for this user
    $books = $studentId ? $model->getBorrowedBooksByStudentId($studentId) : [];
    $now = date('Y-m-d');
    $endOfWeek = date('Y-m-d', strtotime('sunday this week'));
    $borrowedCount = count($books);
    $dueThisWeek = 0;
    $overdue = 0;
    foreach ($books as $book) {
        $dueDate = substr($book['due_date'], 0, 10);
        if ($dueDate >= $now && $dueDate <= $endOfWeek) {
            $dueThisWeek++;
        }
        if ($dueDate < $now) {
            $overdue++;
        }
    }
    echo '
    <!-- Dashboard Section -->
    <main class="container mt-4">
      <h2 class="mb-4">Welcome Back, ' . htmlspecialchars($_SESSION['user_name']) . ' (' . htmlspecialchars($_SESSION['stud_id']) . ') 👋</h2>
      <div class="row g-4">
        <div class="col-md-3 col-sm-6">
          <div class="dashboard-card">
            <h6>Books Borrowed</h6>
            <h3>' . $borrowedCount . '</h3>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="dashboard-card">
            <h6>Due This Week</h6>
            <h3>' . $dueThisWeek . '</h3>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="dashboard-card">
            <h6>Overdue Books</h6>
            <h3 class="text-danger">' . $overdue . '</h3>
          </div>
        </div>
       
      </div>
    </main>
    ';
}

    public function browseBook(){

      // Display all books for users as cards
echo '<div class="container mt-5 mb-5">';
echo '<h3 class="mb-4">Browse Books</h3>';
$books = (new AdminModel())->getAllBooks();
if (count($books) === 0) {
    echo '<div class="alert alert-info">No books found.</div>';
} else {
    echo '<div class="row g-4">';
    foreach ($books as $book) {
        $imgPath = !empty($book['background_image']) ? '../uploads/' . htmlspecialchars($book['background_image']) : '../assets/images/sample-book.jpg';
        $status = isset($book['status']) ? strtolower(trim($book['status'])) : 'available';
        $statusBadge = $status === 'unavailable'
            ? '<span class="badge bg-danger">Unavailable</span>'
            : '<span class="badge bg-success">Available</span>';
        echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3">';
        echo '<a href="book-details.php?id=' . urlencode($book['id']) . '" class="text-decoration-none text-dark">';
        echo '<div class="card book-card h-100">';
        echo '<img src="' . $imgPath . '" class="book-img card-img-top" alt="Book Image">';
        echo '<div class="card-body d-flex flex-column">';
        echo '<div class="book-title">' . htmlspecialchars($book['book_title']) . '</div>';
        echo '<div class="book-author">by ' . htmlspecialchars($book['author']) . '</div>';
        echo '<div class="book-meta mb-2">ISBN: ' . htmlspecialchars($book['isbn']) . '</div>';
        echo '<div class="book-meta mb-2">Publisher: ' . htmlspecialchars($book['publisher']) . '</div>';
        echo '<div class="book-meta mb-2">Year: ' . htmlspecialchars($book['publication_year']) . '</div>';
        echo '<div class="book-meta mb-2">Genre: ' . htmlspecialchars($book['genre']) . '</div>';
        echo '<div class="book-meta mb-2">Language: ' . htmlspecialchars($book['language']) . '</div>';
        echo '<div class="mt-auto">' . $statusBadge . '</div>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
    }
    echo '</div>';
}
echo '</div>';
    
    }


    public function borrowedBooks() {
   

    // Get current user id (try both user_id and stud_id)
    $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    if (!$userId && isset($_SESSION['stud_id'])) {
        $userId = $_SESSION['stud_id'];
    }

    require_once '../classes/libraryModel.class.php';
    $model = new LibraryModel();
    $studentId = $model->resolveRegistrationId($userId);

    $books = [];
    if ($studentId) {
        $books = $model->getBorrowedBooksByStudentId($studentId);
    }

    $obj = new IndexView();
    $obj->libraryDashboardHeader();

    // Handle return book POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['return_transaction_id'], $_POST['return_book_id'])) {
        $transactionId = (int)$_POST['return_transaction_id'];
        $bookId = (int)$_POST['return_book_id'];
        $model->returnBook($transactionId, $bookId);
        // Archive the transaction after returning
        $model->archiveBorrowTransaction($transactionId);
        header('Location: borrowed-books.php?success=returned');
        exit();
    }

    echo <<<HTML
    <div class="container mt-5 mb-5">
        <h2 class="mb-4">My Borrowed Books</h2>
HTML;

    if (empty($books)) {
        echo '<div class="alert alert-info">You have not borrowed any books.</div>';
    } else {
        echo <<<TABLE
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
TABLE;

        foreach ($books as $book) {
            $title = htmlspecialchars($book['book_title']);
            $author = htmlspecialchars($book['author']);
            $borrowedAt = htmlspecialchars($book['borrowed_at']);
            $dueDate = htmlspecialchars($book['due_date']);
            $transactionId = htmlspecialchars($book['transaction_id']);
            $bookId = htmlspecialchars($book['id']);

            echo "<tr>
                    <td>{$title}</td>
                    <td>{$author}</td>
                    <td>{$borrowedAt}</td>
                    <td>{$dueDate}</td>
                    <td>";

            if ($book['borrow_status'] === 'borrowed') {
                echo <<<FORM
                    <form method="post" class="return-form" style="display:inline;">
                        <input type="hidden" name="return_transaction_id" value="{$transactionId}">
                        <input type="hidden" name="return_book_id" value="{$bookId}">
                        <button type="submit" class="btn btn-warning btn-sm">Return</button>
                    </form>
FORM;
            } else {
                echo '<span class="badge bg-secondary">Returned</span>';
            }

            echo "</td></tr>";
        }

        echo <<<CLOSE
                </tbody>
            </table>
        </div>
CLOSE;
    }

    echo "</div>";

    // Add SweetAlert script if there are books
    if (!empty($books)) {
        echo '<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>';
        echo '<script>
document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll("form.return-form").forEach(function(form) {
    form.addEventListener("submit", function(e) {
      e.preventDefault();
      Swal.fire({
        title: "Return this book?",
        text: "Are you sure you want to return this book? This action cannot be undone.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, return it!",
        cancelButtonText: "Cancel",
        customClass: {popup: "swal2-border-radius"}
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    });
  });
});
</script>';
    }
}
    public function bookDetails($book)
{
    $imgPath = !empty($book['background_image']) ? '../uploads/' . htmlspecialchars($book['background_image']) : '../assets/images/sample-book.jpg';
    $status = isset($book['status']) ? strtolower(trim($book['status'])) : 'available';

    echo '<div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center justify-content-center p-3">
                            <img src="' . $imgPath . '" alt="Book Image" class="img-fluid rounded" style="max-height:320px; object-fit:cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title mb-2">' . htmlspecialchars($book['book_title']) . '</h3>
                                <h5 class="card-subtitle mb-3 text-muted">by ' . htmlspecialchars($book['author']) . '</h5>
                                <ul class="list-group list-group-flush mb-3">
                                    <li class="list-group-item"><strong>ISBN:</strong> ' . htmlspecialchars($book['isbn']) . '</li>
                                    <li class="list-group-item"><strong>Publisher:</strong> ' . htmlspecialchars($book['publisher']) . '</li>
                                    <li class="list-group-item"><strong>Publication Year:</strong> ' . htmlspecialchars($book['publication_year']) . '</li>
                                    <li class="list-group-item"><strong>Genre:</strong> ' . htmlspecialchars($book['genre']) . '</li>
                                    <li class="list-group-item"><strong>Language:</strong> ' . htmlspecialchars($book['language']) . '</li>
                                    <li class="list-group-item"><strong>Status:</strong> ';

    echo $status === 'unavailable'
        ? '<span class="badge bg-danger">Unavailable</span>'
        : '<span class="badge bg-success">Available</span>';

    echo '</li>
                                </ul>
                                <div class="mb-3">
                                    <strong>Description:</strong>
                                    <p class="mt-2">' . nl2br(htmlspecialchars($book['description'])) . '</p>
                                </div>
                                <a href="browse-books.php" class="btn btn-outline-primary mt-2">&larr; Back to Browse</a>';

    if ($status !== 'unavailable') {
        echo '<button id="borrowBtn" class="btn btn-success mt-2 ms-2">Borrow this Book</button>';
    }

    echo '              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
}



    public function libraryDashboardFooter(){

      echo '
      
        <!-- Footer -->
        <footer>
          <small class="text-muted">© 2025 Library. All rights reserved.</small>
        </footer>

      ';

    }


public function adminDashboardHeader(){

      echo '
      
      <div class="sidebar">
        <div class="title">Library Dashboard</div>
        <a href="index.php"><i class="fas fa-home"></i> <span class="d-none d-lg-inline">Home</span></a>
        <a href="add-book.php"><i class="fas fa-book"></i> <span class="d-none d-lg-inline">Add Books</span></a>
        <a href="borrowed-books.php"><i class="fas fa-arrow-right-from-bracket"></i> <span class="d-none d-lg-inline">Borrowed</span></a>
        <a href="returned-books.php"><i class="fas fa-rotate-left"></i> <span class="d-none d-lg-inline">Returned</span></a>
        <a href="due-dates.php"><i class="fas fa-calendar"></i> <span class="d-none d-lg-inline">Due Dates</span></a>
        <a href="manage-accounts.php"><i class="fas fa-cogs"></i> <span class="d-none d-lg-inline">Manage Accounts</span></a>
         </div>

      <div class="header">
    <h5>Welcome ' . htmlspecialchars($_SESSION['user_name']) . ' </h5>
    <div class="dropdown">
      
      <!-- WITH THIS DROPDOWN VERSION: -->
    <div class="d-flex align-items-center gap-3">
            <div class="dropdown">
              <img src="" class="avatar dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" role="button" />
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item text-danger" href="../logout.php">🚪 Logout</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      
      ';

    }


    public function adminDashboardMain(){
        $model = new AdminModel();
        $allBorrowed = $model->getAllBorrowedBooksWithUsers();
        $now = date('Y-m-d');
        $dueSoonDays = 7;
        $dueSoonList = [];
        foreach ($allBorrowed as $row) {
            $dueDate = substr($row['due_date'], 0, 10);
            if ($dueDate >= $now && $dueDate <= date('Y-m-d', strtotime("+{$dueSoonDays} days"))) {
                $dueSoonList[] = $row;
            }
        }
        $totalBorrowed = count($allBorrowed);
        $totalDueSoon = count($dueSoonList);
        echo '
        <div class="wrapper">
        <main class="main-content">
          <!-- Breadcrumbs -->
          <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </nav>
          <div class="row g-4">
            <div class="col-md-4 col-sm-6">
              <div class="card p-4">
                <div class="d-flex align-items-center">
                  <i class="fas fa-book fa-2x text-primary me-3"></i>
                  <div>
                    <h6 class="mb-0">Books Borrowed</h6>
                    <p class="mb-0 fw-bold">' . $totalBorrowed . '</p>
                  </div>
                </div>
                <div class="mt-3">
                  <h6 class="fw-bold">Borrowers:</h6>';
                    if ($totalBorrowed === 0) {
                        echo '<div class="text-muted">No books currently borrowed.</div>';
                    } else {
                        echo '<ul class="list-group">';
                        foreach ($allBorrowed as $row) {
                            echo '<li class="list-group-item d-flex justify-content-between align-items-center">'
                                . htmlspecialchars($row['full_name']) .
                                ' <span class="badge bg-primary">' . htmlspecialchars($row['book_title']) . '</span>' .
                                '</li>';
                        }
                        echo '</ul>';
                    }
                echo '</div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6">
              <div class="card p-4">
                <div class="d-flex align-items-center">
                  <i class="fas fa-clock fa-2x text-warning me-3"></i>
                  <div>
                    <h6 class="mb-0">Due Soon</h6>
                    <p class="mb-0 fw-bold">' . $totalDueSoon . '</p>
                  </div>
                </div>
                <div class="mt-3">
                  <h6 class="fw-bold">Due Soon List:</h6>';
                    if ($totalDueSoon === 0) {
                        echo '<div class="text-muted">No books due soon.</div>';
                    } else {
                        echo '<ul class="list-group">';
                        foreach ($dueSoonList as $row) {
                            echo '<li class="list-group-item d-flex justify-content-between align-items-center">'
                                . htmlspecialchars($row['full_name']) .
                                ' <span class="badge bg-warning text-dark">' . htmlspecialchars($row['book_title']) . '</span>' .
                                ' <span class="ms-2 small text-muted">Due: ' . htmlspecialchars(date('M d, Y', strtotime($row['due_date']))) . '</span>' .
                                '</li>';
                        }
                        echo '</ul>';
                    }
                echo '</div>
              </div>
            </div>

          </div>
        </main>
        </div>';
    }



    public function adminAddBook() {

      $books = (new AdminModel())->getAllBooks();

    // Assuming $books is the array of books retrieved from database
    echo '
    <!-- Modal for Add Book -->
    <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <form class="modal-content" method="POST" action="add-book-process.php" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="addBookModalLabel">Add New Book</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="book_image" class="form-label">Book Image</label>
                  <input type="file" class="form-control" id="book_image" name="book_image" accept="image/*">
                </div>
                <div class="col-md-6">
                  <label for="isbn" class="form-label">ISBN</label>
                  <input type="text" class="form-control" id="isbn" name="isbn" required>
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Book Title</label>
                  <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="col-md-6">
                  <label for="author" class="form-label">Author</label>
                  <input type="text" class="form-control" id="author" name="author" required>
                </div>
                <div class="col-md-6">
                  <label for="publisher" class="form-label">Publisher</label>
                  <input type="text" class="form-control" id="publisher" name="publisher" required>
                </div>
                <div class="col-md-6">
                  <label for="publication_year" class="form-label">Publication Year</label>
                  <input type="date" class="form-control" id="publication_year" name="publication_year" min="1000" max="9999" required>
                </div>
                <div class="col-md-6">
                  <label for="genre" class="form-label">Genre</label>
                  <input type="text" class="form-control" id="genre" name="genre" required>
                </div>
                <div class="col-md-6">
                  <label for="language" class="form-label">Language</label>
                  <input type="text" class="form-control" id="language" name="language" required>
                </div>
                <div class="col-md-6">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>

    <div class="wrapper">
      <div class="main-content">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Book</li>
          </ol>
        </nav>
        <!-- Book List Section -->
        <div class="container mt-2">
          <div class="container-box">
            <!-- Header with Add Button -->
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="mb-0">Book List</h4>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addBookModal">
                <i class="bi bi-plus-lg"></i> Add Book
              </button>
            </div>

            <!-- Table -->
            <div class="table-responsive">
              <table id="bookTable" class="table table-hover table-bordered align-middle">
                <thead class="table-dark">
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Year</th>
                    <th>Genre</th>
                    <th>Language</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>';

                foreach ($books as $i => $book) {
                  $imgPath = !empty($book['background_image']) ? '../uploads/' . htmlspecialchars($book['background_image']) : '../assets/images/sample-book.jpg';

                    // Determine status badge HTML
                    $status = isset($book['status']) ? strtolower(trim($book['status'])) : 'available';
                    $statusBadge = $status === 'unavailable'
                      ? '<span class="badge bg-danger">Unavailable</span>'
                      : '<span class="badge bg-success">Available</span>';

                  echo '
                  <tr class="clickable-row" data-href="book-details.php?id=' . htmlspecialchars($book['id']) . '">
                    <td>' . ($i + 1) . '</td>
                    <td><img src="' . $imgPath . '" alt="Book Image" class="img-thumbnail" style="width: 60px; height: 60px; object-fit: cover;"></td>
                    <td>' . htmlspecialchars($book['isbn']) . '</td>
                    <td>' . htmlspecialchars($book['book_title']) . '</td>
                    <td>' . htmlspecialchars($book['author']) . '</td>
                    <td>' . htmlspecialchars($book['publisher']) . '</td>
                    <td>' . htmlspecialchars($book['publication_year']) . '</td>
                    <td>' . htmlspecialchars($book['genre']) . '</td>
                    <td>' . htmlspecialchars($book['language']) . '</td>
                    <td>' . $statusBadge . '</td>
                    <td class="text-center align-middle"><i class="bi bi-chevron-right"></i></td>
                  </tr>';
                }

                echo '
                </tbody>
              </table>
            </div>
          </div>
                                    <div class="col-md-6">
                                        <label for="isbn" class="form-label">ISBN</label>
                                        <input type="text" class="form-control" id="isbn" name="isbn" value="' . htmlspecialchars($book['isbn']) . '" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="' . htmlspecialchars($book['book_title']) . '" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="author" class="form-label">Author</label>
                                        <input type="text" class="form-control" id="author" name="author" value="' . htmlspecialchars($book['author']) . '" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="publisher" class="form-label">Publisher</label>
                                        <input type="text" class="form-control" id="publisher" name="publisher" value="' . htmlspecialchars($book['publisher']) . '" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="publication_year" class="form-label">Publication Year</label>
                                        <input type="date" class="form-control" id="publication_year" name="publication_year" value="' . htmlspecialchars($book['publication_year']) . '" min="1000" max="9999" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="genre" class="form-label">Genre</label>
                                        <input type="text" class="form-control" id="genre" name="genre" value="' . htmlspecialchars($book['genre']) . '" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="language" class="form-label">Language</label>
                                        <input type="text" class="form-control" id="language" name="language" value="' . htmlspecialchars($book['language']) . '" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" required>' . htmlspecialchars($book['description']) . '</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <a href="add-book.php" class="btn btn-secondary">Back to List</a>
                            <button type="submit" class="btn btn-primary" id="updateBtn">Update</button>
                            <a href="#" class="btn btn-danger" id="deleteBtn">Delete</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>';
}


    public function adminBorrowedBooks(){

      $model = new AdminModel();
      $borrowedBooks = $model->getAllBorrowedBooksWithUsers();

      echo '
      
      <div class="wrapper">
        <div class="main-content">
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Borrowed Books</li>
                </ol>
            </nav>';


            echo '
    <div class="container mt-4 mb-5">
        <h2 class="mb-4">All Borrowed Books</h2>
        <div class="table-responsive">
            <table id="borrowedBooksTable" class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Book ISBN</th>
                        <th>Book Title</th>
                        <th>Borrowed Date</th>
                        <th>Return Date (Expected)</th>
                        <th>Status</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                    </tr>
                </thead>
                <tbody>';
                
    foreach ($borrowedBooks as $row) {
        echo '
                    <tr>
                        <td>' . htmlspecialchars($row['isbn']) . '</td>
                        <td>' . htmlspecialchars($row['book_title']) . '</td>
                        <td>' . htmlspecialchars($row['borrowed_at']) . '</td>
                        <td>' . htmlspecialchars($row['due_date']) . '</td>
                        <td>' . htmlspecialchars(ucfirst($row['borrow_status'])) . '</td>
                        <td>' . htmlspecialchars($row['stud_id']) . '</td>
                        <td>' . htmlspecialchars($row['full_name']) . '</td>
                    </tr>';
    }

    echo '
                </tbody>
            </table>
        </div>
    </div>';


      
      echo '

      </div>
      </div>
      
      ';

    }

    public function adminManageAccount(){

      $accounts = (new AdminModel())->getAllAccounts();

      echo '
      
      <div class="wrapper">
        <div class="main-content">
          <!-- Breadcrumbs -->
          <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Manage Accounts</li>
            </ol>
          </nav>
          <div class="container mt-2">
            <div class="container-box">
              <!-- Header with Add Button -->
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">User List</h4>
              </div>

              <!-- Table -->
              <div class="table-responsive">
                <table id="bookTable" class="table table-hover table-bordered align-middle">
                  <thead class="table-dark">
                    <tr>
                      <th>Student ID</th>
                      <th>Name</th>
                      <th>Sex</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>';

    foreach ($accounts as $account) {
        echo '<tr class="clickable-row" data-href="account-details.php?id=' . htmlspecialchars($account['id']) . '">';
        echo '<td>' . htmlspecialchars($account['stud_id']) . '</td>';
        echo '<td>' . htmlspecialchars($account['full_name']) . '</td>';
        echo '<td>' . htmlspecialchars($account['gender']) . '</td>';
        echo '<td>' . htmlspecialchars($account['email']) . '</td>';
        echo '<td>' . htmlspecialchars($account['address']) . '</td>';
        echo '<td class="text-center align-middle"><i class="bi bi-chevron-right"></i></td>';
        echo '</tr>';
    }
    
    echo '</tbody></table></div></div></div></div></div>';
    }


    public function adminReturnedBooks(){

      $model = new AdminModel();
      $returnedBooks = $model->getAllReturnedBooksWithUsers();

      echo '
      
      <div class="wrapper">
      <main class="main-content">
      <!-- Breadcrumbs -->
      <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Returned Books</li>
        </ol>
      </nav>

      <div class="container mt-4 mb-5">
    <h2 class="mb-4">All Returned Books</h2>
    <div class="table-responsive">
        <table id="returnedBooksTable" class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Book ISBN</th>
                    <th>Book Title</th>
                    <th>Borrowed Date</th>
                    <th>Return Date (Expected)</th>
                    <th>Returned At</th>
                    <th>Status</th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                </tr>
            </thead>
            <tbody>';

            foreach ($returnedBooks as $row):
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['isbn']) . '</td>';
                echo '<td>' . htmlspecialchars($row['book_title']) . '</td>';
                echo '<td>' . htmlspecialchars($row['borrowed_at']) . '</td>';
                echo '<td>' . htmlspecialchars($row['due_date']) . '</td>';
                echo '<td>' . htmlspecialchars($row['returned_at']) . '</td>';
                echo '<td>' . htmlspecialchars(ucfirst($row['borrow_status'])) . '</td>';
                echo '<td>' . htmlspecialchars($row['stud_id']) . '</td>';
                echo '<td>' . htmlspecialchars($row['full_name']) . '</td>';
                echo '</tr>';
            endforeach;

echo '

            </tbody>
        </table>
    </div>
</div>

</div>
      </main>
      ';

    }

    public function adminAccountDetails($account){

      echo '
      
        <div class="wrapper">
      <div class="main-content">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="manage-accounts.php">User List</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Accounts</li>
          </ol>
        </nav>

<div class="card mb-4">
    <div class="card-body">
        <h1>Account Details (' . htmlspecialchars($account['username']) . ')</h1>
        <form action="#" method="post">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="student_id" class="form-label">Student ID</label>
                    <input type="text" class="form-control" id="student_id" name="student_id" value="' . htmlspecialchars($account['student_id']) . '" disabled>
                </div>
                <div class="col-md-6">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" value="' . htmlspecialchars($account['full_name']) . '" disabled>
                </div>
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="' . htmlspecialchars($account['gender']) . '" disabled>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="' . htmlspecialchars($account['email']) . '" disabled>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="' . htmlspecialchars($account['address']) . '" disabled>
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" value="' . htmlspecialchars($account['city']) . '" disabled>
                </div>
                <div class="col-md-6">
                    <label for="province" class="form-label">Province</label>
                    <input type="text" class="form-control" id="province" name="province" value="' . htmlspecialchars($account['province']) . '" disabled>
                </div>
                <div class="col-md-6">
                    <label for="postal_code" class="form-label">Postal Code</label>
                    <input type="text" class="form-control" id="postal_code" name="postal_code" value="' . htmlspecialchars($account['postal_code']) . '" disabled>
                </div>
                <div class="col-md-6">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" class="form-control" id="department" name="department" value="' . htmlspecialchars($account['department']) . '" disabled>
                </div>
                <div class="col-md-6">
                    <label for="year_level" class="form-label">Year Level</label>
                    <input type="text" class="form-control" id="year_level" name="year_level" value="' . htmlspecialchars($account['year_level']) . '" disabled>
                </div>
                <div class="col-md-6">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact" value="' . htmlspecialchars($account['contact']) . '" disabled>
                </div>
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="text" class="form-control" id="dob" name="dob" value="' . htmlspecialchars($account['dob']) . '" disabled>
                </div>
                <div class="col-md-6">
                    <label for="valid_id" class="form-label">Valid ID</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="valid_id" name="valid_id" value="' . htmlspecialchars($account['valid_id']) . '" disabled>';
                if (!empty($account['valid_id'])) {
                  $validIdPath = '../uploads/' . basename($account['valid_id']);
                  if (file_exists($validIdPath)) {
                    $ext = pathinfo($validIdPath, PATHINFO_EXTENSION);
                    $downloadName = 'valid_id_' . $account['student_id'] . ($ext ? ('.' . $ext) : '');
                    echo '<a href="' . $validIdPath . '" class="btn btn-outline-primary" download="' . $downloadName . '" target="_blank">Download</a>';
                  } else {
                    echo '<span class="text-danger ms-2">File not found</span>';
                  }
                }
      echo '        </div>
                  </div>
                </div>
                <div class="d-flex justify-content-end gap-2 mt-4">
                  <a href="#" class="btn btn-danger" id="deleteBtn">Delete</a>
                  <a href="manage-accounts.php" class="btn btn-secondary">Back to List</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>';
    }

    public function adminDueDates($overdueBooks) {

      $model = new AdminModel();
      $overdueBooks = $model->getAllOverdueBooksWithUsers();

    echo <<<HTML
    <div class="container mt-4 mb-5">
        <h2 class="mb-4">Overdue Books</h2>
        <div class="table-responsive">
            <table id="overdueBooksTable" class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Book ISBN</th>
                        <th>Book Title</th>
                        <th>Borrowed Date</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Student ID</th>
                    </tr>
                </thead>
                <tbody>
    HTML;

    foreach ($overdueBooks as $row) {
        echo "<tr>
                <td>" . htmlspecialchars($row['isbn']) . "</td>
                <td>" . htmlspecialchars($row['book_title']) . "</td>
                <td>" . htmlspecialchars($row['borrowed_at']) . "</td>
                <td>" . htmlspecialchars($row['due_date']) . "</td>
                <td><span class='badge bg-danger'>Overdue</span></td>
                <td>" . htmlspecialchars($row['stud_id']) . "</td>
            </tr>";
    }

    echo <<<HTML
                </tbody>
            </table>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#overdueBooksTable').DataTable();
    });
    </script>
    HTML;
}



    public function adminDashboardFooter(){

      echo '
      
        <footer>
        © 2025 Library System
            </footer>
          </main>
        </div>

      ';

    }
  }
