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
    <link rel="stylesheet" href="Admin.css">
    
</head>

<body>
   


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-university me-3"></i>Horizon</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link ">Courses</a>
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
                        <a href="student_selection.php" class="dropdown-item">Students_stutus</a>
                        <a href="student_comment.php" class="dropdown-item">Student_comments</a>
                    </div>
                </div>
            </div>
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
            <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
            <a href="Home_new.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <div class="wrapper">
    <nav class="nav">
       
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
<!----------------------------- Form box ----------------------------------->    
<div class="form-box">
        
        <!------------------- login form -------------------------->
        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>
            <form action="admin_login.php" method="POST" autocomplete="off">
    <div class="input-box">
        <input type="text" name="mail" class="input-field" placeholder="    Email">
        <i class="bx bx-user"></i>
    </div><br>
    <div class="input-box">
        <input type="password" name="psw" class="input-field" placeholder="    Password">
        <i class="bx bx-lock-alt"></i>
    </div><br>
    <div class="input-box">
        <input type="submit" class="submit" value="Sign In">
    </div>
</form>
</div>
        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <!--span>Have an account? <a href="#" onclick="login()">Login</a></span-->
                <header>Sign Up</header>
            </div>
            <form action="Admin_signup.php" method="POST" autocomplete="off">
    
    <div class="input-box">
            <input type="text" name="aname" id="fname" class="input-field" placeholder="Admin Name">
            <i class="bx bx-user"></i>
        </div><br>
    <div class="input-box">
        <input type="text" name="mail" id="mail" class="input-field" placeholder="    Email">
        <i class="bx bx-envelope"></i>
    </div><br>
    <div class="input-box">
        <input type="password" name="psw" id="psw" class="input-field" placeholder="    Password">
        <i class="bx bx-lock-alt"></i>
    </div><br>
    <div class="input-box">
        <input type="password" name="cpsw" id="cpsw" class="input-field" placeholder="    Confirm Password">
        <i class="bx bx-lock-alt"></i>
    </div><br>
    <div class="input-box">
        <input type="submit" class="submit" value="submit">
    </div>
</form>
            
        </div>
    </div>
</div>   

    

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
    <script>
       
        function myMenuFunction() {
         var i = document.getElementById("navMenu");
         if(i.className === "nav-menu") {
             i.className += " responsive";
         } else {
             i.className = "nav-menu";
         }
        }
      
     </script>
     <script>
         var a = document.getElementById("loginBtn");
         var b = document.getElementById("registerBtn");
         var x = document.getElementById("login");
         var y = document.getElementById("register");
         function login() {
             x.style.left = "4px";
             y.style.right = "-520px";
             a.className += " white-btn";
             b.className = "btn";
             x.style.opacity = 1;
             y.style.opacity = 0;
         }
         function register() {
             x.style.left = "-510px";
             y.style.right = "5px";
             a.className = "btn";
             b.className += " white-btn";
             x.style.opacity = 0;
             y.style.opacity = 1;
         }
     </script>
     
     
</body>

</html>