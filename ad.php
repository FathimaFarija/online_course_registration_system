
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
    <style>
        #loginBtn:hover, #registerBtn:hover {
        background-color: #11c2d63d; 
        color: rgb(0, 0, 0);
        border-radius: 10px;
}

       .btn{
        border-radius: 5px;
       }
    </style>
    
</head>

<body>
    

     <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light shadow sticky-top-fixed p-0" style="background-color: rgba(0, 211, 230, 0.121);">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-university me-3"></i>Horizon</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index1.php" class="nav-item nav-link">Home</a>
                <a href="about1.php" class="nav-item nav-link">About</a>
                <a href="course1.php" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team1.php" class="dropdown-item">Our Team</a>
                        <a href="testimonal1.php" class="dropdown-item">Testimonial</a>
                        <a href="instruction1.php" class="dropdown-item">Instruction</a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center my-3">
                <button class="btn btn-primary py-3 px-4 mx-2" id="loginBtn">Sign In</button>
                <button class="btn btn-primary py-3 px-4 mx-2" id="registerBtn">Sign Up</button>
            </div>
           
        </div>
    </nav>
    <!-- Navbar End -->


   <div class="ubody">
    <div class="wrapper">
        
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
            <input type="text" name="mail" class="input-field" placeholder="   Email">
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
                <form action="Admin_signup.php" method="POST" enctype="multipart/form-data" autocomplete="off">
    
        <div class="input-box">
            <input type="text" name="aname" id="fname" class="input-field" placeholder="Admin Name" required>
            <i class="bx bx-user"></i>
        </div>
        
    
    <br>
    
    <div class="input-box">
        <input type="email" name="mail" id="mail" class="input-field" placeholder="Email" required>
        <i class="bx bx-envelope"></i>
    </div>
    <br>
    
    <div class="two-forms">
        <div class="input-box">
            <input type="password" name="psw" id="psw" class="input-field" placeholder="Password" required>
            <i class="bx bx-lock-alt"></i>
        </div>
        <div class="input-box">
            <input type="password" name="cpsw" id="cpsw" class="input-field" placeholder="Confirm Password" required>
            <i class="bx bx-lock-alt"></i>
        </div>
    </div>
    <br>
    
    <div class="input-box">
        <label for="image" style="color: white;">Profile Picture:</label>
        <input type="file" name="image" id="image" class="input-field" accept="image/jpg, image/jpeg, image/png" required>
    </div>
    <br>
    
    <div class="input-box">
        <button type="submit" class="submit">Submit</button>
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
        document.addEventListener("DOMContentLoaded", () => {
            const loginBtn = document.getElementById("loginBtn");
            const registerBtn = document.getElementById("registerBtn");
            const loginForm = document.getElementById("login");
            const registerForm = document.getElementById("register");

            function login() {
                loginForm.style.left = "0";
                loginForm.style.opacity = "1";
                registerForm.style.right = "-520px";
                registerForm.style.opacity = "0";

                loginBtn.classList.add("primary-btn");
                registerBtn.classList.remove("primary-btn");
            }

            function register() {
                loginForm.style.left = "-510px";
                loginForm.style.opacity = "0";
                registerForm.style.right = "0";
                registerForm.style.opacity = "1";

                registerBtn.classList.add("primary-btn");
                loginBtn.classList.remove("primary-btn");
            }

            loginBtn.addEventListener("click", login);
            registerBtn.addEventListener("click", register);
        });
    </script>
     
    </div> 
</body>

</html>