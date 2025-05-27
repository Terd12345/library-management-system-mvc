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
                <div class="call"><span>Explore Now</span></div>
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
            <div class="group margin"></div>
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

        echo '
        
        <div class="section">
        <div class="slider">
            <div class="container slidercontent">
            <div class="gray-hero-box">
                <h1 class="hero">Contact Us</h1>
                <h2 class="hero">"Wed love to hear from you! Reach out to us for any inquiries or support."</h2>
            </div>
            </div>
        </div>
        </div>

    <div class="section bg">
        <div class="container">
            <h1>Get in Touch</h1>
            <form action="process_contact.php" method="POST" class="contact-form">
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
                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </div>
        
        ';

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
              <a class="nav-link ' . ($currentPage === "borrowed-books.php" ? "active" : "") . '" href="borrowed-books.php">Borrowed Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ' . ($currentPage === "browse-books.php" ? "active" : "") . '" href="browse-books.php">Browse Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ' . ($currentPage === "notifications.php" ? "active" : "") . '" href="notifications.php">Notifications</a>
            </li>
          </ul>

          <div class="d-flex align-items-center gap-3">
            <div class="dropdown">
              <img src="" class="avatar dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" role="button" />
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="#">👤 Profile</a></li>
                <li><a class="dropdown-item" href="#">⚙️ Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="../logout.php">🚪 Logout</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </nav>';
}


    public function libraryDashboardMain() {
    echo '
    <!-- Dashboard Section -->
    <main class="container mt-4">
      <h2 class="mb-4">Welcome Back, ' . htmlspecialchars($_SESSION['user_name']) . ' (' . htmlspecialchars($_SESSION['stud_id']) . ') 👋</h2>
      <div class="row g-4">
        <div class="col-md-3 col-sm-6">
          <div class="dashboard-card">
            <h6>Books Borrowed</h6>
            <h3>4</h3>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="dashboard-card">
            <h6>Due This Week</h6>
            <h3>1</h3>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="dashboard-card">
            <h6>Overdue Books</h6>
            <h3 class="text-danger">2</h3>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="dashboard-card">
            <h6>Total Fines</h6>
            <h3 class="text-warning">₱120</h3>
          </div>
        </div>
      </div>
    </main>
    ';
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
        <a href="manage-accounts.php"><i class="fas fa-cogs"></i> <span class="d-none d-lg-inline">Manage Accounts</span></a>
        <a href="#"><i class="fas fa-calendar"></i> <span class="d-none d-lg-inline">Due Dates</span></a>
        <a href="#"><i class="fas fa-bell"></i> <span class="d-none d-lg-inline">Notifications</span></a>
         </div>

      <div class="header">
    <h5>Welcome ' . htmlspecialchars($_SESSION['user_name']) . ' </h5>
    <div class="dropdown">
      
      <!-- WITH THIS DROPDOWN VERSION: -->
    <div class="d-flex align-items-center gap-3">
            <div class="dropdown">
              <img src="" class="avatar dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" role="button" />
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="#">👤 Profile</a></li>
                <li><a class="dropdown-item" href="#">⚙️ Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="../logout.php">🚪 Logout</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      
      ';

    }


    public function adminDashboardMain(){

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
                <p class="mb-0 fw-bold">4</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="card p-4">
            <div class="d-flex align-items-center">
              <i class="fas fa-clock fa-2x text-warning me-3"></i>
              <div>
                <h6 class="mb-0">Due Soon</h6>
                <p class="mb-0 fw-bold">2</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12">
          <div class="card p-4">
            <div class="d-flex align-items-center">
              <i class="fas fa-envelope fa-2x text-info me-3"></i>
              <div>
                <h6 class="mb-0">Messages</h6>
                <p class="mb-0 fw-bold">3</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      ';

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
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>';

                foreach ($books as $i => $book) {
                  $imgPath = !empty($book['background_image']) ? '../uploads/' . htmlspecialchars($book['background_image']) : '../assets/images/sample-book.jpg';
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
                    <td class="text-center align-middle"><i class="bi bi-chevron-right"></i></td>
                  </tr>';
                }

                echo '
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>';
}


  public function adminBookDetails($book, $imgPath) {
    echo '
    <div class="wrapper">
        <div class="main-content">
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="add-book.php">Add Book</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Book Details</li>
                </ol>
            </nav>

            <div class="card mb-4">
                <div class="card-body">
                    <h1>Book Details</h1>
                    <form action="update-book.php?id=' . urlencode($book['id']) . '" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4 text-center mb-3 d-flex flex-column align-items-center justify-content-center">
                                <label for="book_image_input" style="cursor:pointer;">
                                    <img src="' . htmlspecialchars($imgPath) . '" alt="Book Image" id="bookImagePreview" class="img-thumbnail mb-2" style="width: 180px; height: 180px; object-fit: cover;">
                                    <div class="mt-2 text-muted">Click to change image</div>
                                </label>
                                <input type="file" id="book_image_input" name="book_image" accept="image/*" style="display:none;">
                            </div>
                            <div class="col-md-8">
                                <div class="row g-3">
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
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="delete-book.php?id=' . urlencode($book['id']) . '" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete this book?\')">Delete</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>';
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

 //  //  //  //  //  //  //  //  //  //  //  //  admin UI //  //  //  //  //  //  //  //  //  //  //  //