<?php

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch user details from the session
$userName = $_SESSION['user_fname']; // First name from session
$userPhoto = $_SESSION['user_photo'] ?? 'default-avatar.png'; // Default photo if none uploaded
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Horizon University</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="welcome.css" rel="stylesheet">
    <style>
        /* Keyframes for the right to left animation */
        @keyframes slideRightToLeft {
          0% {
            transform: translateX(100%);
          }
          100% {
            transform: translateX(0);
          }
        }
    
        /* Animation class */
        .animate-right-to-left {
          animation: slideRightToLeft 2s ease-out;
        }
      </style>
</head>

<body>
    


  <!-- Navbar Start -->
  <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light shadow sticky-top-fixed p-0" style="background-color: rgba(0, 211, 230, 0.12);">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-university me-3"></i>Horizon</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="courses.html" class="nav-item nav-link active">Courses</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="instruction.html" class="dropdown-item">Instruction</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admin</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="Home_admin.php" class="dropdown-item">Admin_Home</a>
                    <a href="student_selection.php" class="dropdown-item">Students_status</a>
                    <a href="student_comment.php" class="dropdown-item">Student_comments</a>
                </div>
            </div>

            <div class="navbar-nav ms-auto p-4 p-lg-0 d-flex align-items-center">
                <span class="d-none d-lg-inline">Welcome, <?php echo htmlspecialchars($userName); ?>!</span>
                

                <img src="../Login&password/img/testimonial-4.jpg" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover; margin-right: 10px;">
            </div>
        </div>
        <!-- Profile Photo -->
        
    </div>
</nav>
<!-- Navbar End -->


    <!--  Start -->
    
    
                               
 <div class="bdy">
       <h1 >Horizon University</h1>
        <h3><i>Welcome to Registration System</i></h3>
            <div class="container" >
                                        
                 <a href="Reg.php"><button class="btn2" id="firstBtn">Registration</button></a>
                 <a href="payment.php"><button class="btn2">Payment</button></a>

                 <a href="show.html"><button class="btn1" >Visit Here</button></a>
                                       
             </div>
 </div>
  
                          
    <!-- Carousel End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        document.getElementById('logoutBtn').addEventListener('click', function() {
    // Perform logout actions here, such as clearing local storage, session variables, etc.
    alert('Logged out successfully!'); // Example alert

    // Redirect to the login page or another appropriate action
    window.location.href = '/login.html'; // Replace with your actual login page
});
    </script>
</body>

</html>