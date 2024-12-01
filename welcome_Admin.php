<?php
session_start();
if (!isset($_SESSION['aname']) || !isset($_SESSION['image'])) {
    echo "❌ No user data found! Please log in first.";
    header("Location: login.php");
    exit();
}

$aname = $_SESSION['aname'];
$image_path = $_SESSION['image'];
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

        /* Profile Image Styling */
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #fff;
            object-fit: cover;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        /* Welcome Section Styling */
        .welcome-section {
            margin-top: 100px;
            text-align: center;
            
        }

        .head {
            font-size: 4rem;
            font-weight: 600;
            color:white;
            margin-bottom: 20px;
        }

        .welcome-text {
            font-size: 2rem;
            margin-top: 10px;
            color:white;
            
        }

        .button-container a {
            display: inline-block;
            margin: 15px;
            padding: 10px 25px;
            background-color:white;
            color: black;
            font-size: 1rem;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .button-container a:hover {
            background-color: #019bb2;
            color:white;
        }

    </style>
</head>

<body>
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
                <a href="index2.php" class="nav-item nav-link">Home</a>
                <a href="about2.php" class="nav-item nav-link">About</a>
                <a href="course2.php" class="nav-item nav-link ">Courses</a>
                <a href="welcome_Admin.php" class="nav-item nav-link active">Main_Page</a>

            </div>
        </div>
        <div class="navbar-nav ms-auto p-4 p-lg-0 d-flex align-items-center">
                    <span class="d-none d-lg-inline">Hi, <?php echo htmlspecialchars($aname); ?>!</span>
                    
    
                    <img src="<?php echo htmlspecialchars($image_path); ?>" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover; margin-right: 10px;">
                </div>
    </nav>
    <!-- Navbar End -->

    <!-- Welcome Section Start -->
     <div class="bdy">
    <div class="welcome-section">
        <img src="<?php echo htmlspecialchars($image_path); ?>" alt="Profile Image" class="profile-image">
        <h1 class="head">Admin <?php echo htmlspecialchars($aname); ?>!</h1>
        <p class="welcome-text"><i>We’re glad to have you here. Explore and enjoy!</i></p>
        <div class="button-container">
            <a href="student_details.php">Applications</a>
            <a href="status.php">Selection</a>
            <a href="student_comment.php">Comment</a>
            <a href="student_confirmation.php">Payment Section</a>
            <a href="Logout1.php">Logout</a>
        </div>
    </div>
    <!-- Welcome Section End -->
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>