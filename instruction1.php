<?php
session_start();
if (!isset($_SESSION['fname']) || !isset($_SESSION['image'])) {
    echo "❌ No user data found! Please log in first.";
    header("Location: login.php");
    exit();
}

$fname = $_SESSION['fname'];
$image_path = $_SESSION['image'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Horizon</title>
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
</head>

<body>
   


    <?php
    include 'nav.php';
    ?>
 

 <!-- Header Start -->
 <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container" style="padding-top: 100px; padding-bottom: 60px;">
    <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Online Course Registration  Instructions</h1>
                

            </div>
        </div>
    </div>
</div>

    <!-- Header End -->



  
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructions</h6>
                <h1 class="mb-5">Student Registration Process</h1>
            </div>
    
            <!-- Steps Section -->
            <div class="instruction-section">
                <!-- Step 1 -->
                <div class="instruction-item mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="text-primary mb-3">Step 1: Registration</h2>
                    <p class="bg-light p-4 rounded">
                        - To register, students click the Join Now button left side top of the button<br>
                        - if you haven't email and password you go to the signup page and fill the sign up form.<br>
                       
                    </p>
                </div>
    
                <!-- Step 2 -->
                <div class="instruction-item mb-5 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="text-primary mb-3">Step 2: Login and Profile Setup</h2>
                    <p class="bg-light p-4 rounded">
                        - After successful registration, students log in using their newly created email and password.<br>
                        - They are directed to their profile page to browse courses, view course details, and access cost information.
                    </p>
                </div>
    
                <!-- Step 3 -->
                <div class="instruction-item mb-5 wow fadeInUp" data-wow-delay="0.4s">
                    <h2 class="text-primary mb-3">Step 3: Browse and Select Courses</h2>
                    <p class="bg-light p-4 rounded">
                        - Students visit the Student Page to explore available courses.<br>
                        - They can view detailed course information, including cost and prerequisites, to make informed decisions.
                    </p>
                </div>
    
                <!-- Step 4 -->
                <div class="instruction-item mb-5 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="text-primary mb-3">Step 4: Course Registration</h2>
                    <p class="bg-light p-4 rounded">
                        - Students select their desired courses and proceed with registration.<br>
                        - The system provides the status of their registration, indicating whether they are <em>"Selected,"</em> <em>"Rejected,"</em> or on the <em>"Waiting List."</em>
                    </p>
                </div>
    
                <!-- Step 5 -->
                <div class="instruction-item mb-5 wow fadeInUp" data-wow-delay="0.6s">
                    <h2 class="text-primary mb-3">Step 5: Payment and Confirmation</h2>
                    <p class="bg-light p-4 rounded">
                        - If selected, students must pay the registration fees using available payment methods (e.g., Visa card).<br>
                        - Students upload the deposit slip or screenshot for authentication after completing the payment.
                    </p>
                </div>
    
                <!-- Step 6 -->
                <div class="instruction-item mb-5 wow fadeInUp" data-wow-delay="0.7s">
                    <h2 class="text-primary mb-3">Step 6:OTP Verification </h2>
                    <p class="bg-light p-4 rounded">
                        - Once payment and other details are verified, the system issues otp for your email.<br>
                        - Students should insert the correct otp for confirm their payment .<br>
                        - If your payment successfully paid, then you can see the Confirmation button Right side of the page.
                    </p>
                </div>
    
                <!-- Step 7 -->
                <div class="instruction-item mb-5 wow fadeInUp" data-wow-delay="0.8s">
                    <h2 class="text-primary mb-3">Step 7: Confirmation  </h2>
                    <p class="bg-light p-4 rounded">
                        - After click the Confirmation button it will show thw dialog box<br>
                        - you want to give ok. After that you are welcome to as a Horizon university student.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Team End -->



  
     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="about.php">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="instruction.html">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>No:28, Main Street, Colombo</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>123-456-789</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>horizonuni@26gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/cat-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/cat-3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Browse courses, register, and manage your schedule from any device—quick, convenient, and hassle-free!</p>
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Horizon University</a>, All Right Reserved.

                        
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="Home_new.php">Home</a>
                            <a href="">Cookies</a>
                            <a href="instruction.html">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>