<?php
require 'regi.php';

if(isset($_POST["submit"])){
  $name=$_POST["name"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $msg=$_POST["msg"];

  $query = "INSERT INTO about VALUES('','$name','$email','$phone','$msg')";
  $result = mysqli_query($conn,$query);
  
  if($result){
    header("Loaction: comment.php?msg=New record created successfully");
  }
  else{
    echo"Failed: ".mysqli_error($conn);
  }
}
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
    <link rel="stylesheet" href="About.css">
    <script src="About.js"></script>
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
            <a href="index.html" class="nav-item nav-link ">Home</a>
            <a href="about.php" class="nav-item nav-link active">About</a>
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
        <a href="Home_new.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->



    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container" style="padding-top: 100px; padding-bottom: 60px;">
    <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                

            </div>
        </div>
    </div>
</div>

    <!-- Header End -->
    
    <div class="containers">
        
        <div class="form">
           
          <div class="contact-info">
            <h1 class="display-5">Hello Students !</h1>
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
              Welcome to Horizon University, Sri Lanka's premier institution for academic excellence 
              and innovation. Offering a diverse array of programs ranging from professional certificates
               to master's degrees, we empower our students to thrive and lead in an ever-changing world. 
               Join us as we explore new horizons in education and shape the future together. Welcome to Horizon
                University, where possibilities abound.
            </p>
  
           
  
            
          </div>
  
          <div class="contact-form">
            
  
            <form id="contactForm" action="" method="POST" autocomplete="off">
                <h3 class="title">Contact us</h3>
                
                <div class="input-container">
                    <input type="text" name="name" id="name" class="input" required pattern="[A-Za-z\s]+" />
                    <label for="name">Username</label>
                    <span>Username</span>
                    <small class="error-message"></small>
                </div>
            
                <div class="input-container">
                    <input type="email" name="email" id="email" class="input" required />
                    <label for="email">Email</label>
                    <span>Email</span>
                    <small class="error-message"></small>
                </div>
            
                <div class="input-container">
                    <input type="tel" name="phone" id="phone" class="input" required />
                    <label for="phone">Phone</label>
                    <span>Phone</span>
                    <small class="error-message"></small>
                </div>
            
                <div class="input-container textarea">
                    <textarea name="msg" id="msg" class="input" required></textarea>
                    <label for="msg">Message</label>
                    <span>Message</span>
                    <small class="error-message"></small>
                </div>
            
                <input type="submit" value="Send" name="submit" class="btn1" />
            </form>
            
          </div>
        </div>
      </div>
    
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p> Our expert instructors bring practical experience to ensure top-notch education and personalized learning.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Flexible online courses allow you to learn at your own pace from anywhere, with interactive materials and support.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>Gain hands-on experience through home-based projects that apply real-world skills and enhance your learning.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p> Discover a vast collection of digital and physical books. Our library provides everything you need for deep study and academic success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to Horizon University</h1>
                    <p class="mb-4">At Horizon University, we pride ourselves on offering top-quality education with a focus on innovation, leadership, and community. Our programs are designed to shape the future leaders of tomorrow.</p>
                    <p class="mb-4">With a strong commitment to excellence, our instructors bring both academic knowledge and real-world experience to the classroom, ensuring our students gain valuable insights and practical skills.</p>
                    
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificates</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Modern Facilities</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Diverse Community</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Global Opportunities</p>
                        </div>
                    </div>
                    
                    <a class="btn btn-primary py-3 px-5 mt-2 btn-link" href="about.php">Read More</a>
                </div>
                
    <!-- About End -->


    
   

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
    <script src="About.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script >
       const inputs = document.querySelectorAll(".input");

// Focus and blur functions to add or remove 'focus' class
function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value === "") {
    parent.classList.remove("focus");
  }
}

// Add event listeners to each input element
inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});  
    </script>
</body>

</html>