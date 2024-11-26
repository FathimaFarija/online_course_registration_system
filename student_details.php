<?php
require 'regi.php';

if(isset($_POST["submit"])){
  $fullname=$_POST["fullname"];
  $reg=$_POST["reg"];
  $nic=$_POST["nic"];
  $coname=$_POST["coname"];
  $status=$_POST["status"];
  $msg=$_POST["msg"];

  $query = "INSERT INTO status VALUES('','$fullname','$reg','$nic','$coname','$status','$msg')";
  $result = mysqli_query($conn,$query);
  
  if($result){
    header("Loaction: selection.php?msg=New record created successfully");
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
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
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
        </div>
    </nav>
    <!-- Navbar End -->

         <!-- Header Start -->
         <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container" style="padding-top: 100px; padding-bottom: 60px;">
    <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">STUDENT APPLICATIONS</h1>
                

            </div>
        </div>
    </div>
</div>

    <!-- Header End -->

   
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

   
    <table border=1 cellspacing=0 cellpadding=10 class="table table-hover text-center">
    <thead class="table-dark">  
    <tr>
            <td>Id</td>
            <td>Student photo</td>
            <td>Name</td>
            <td>Gender</td>
            <td>Email</td>
            <td>Phone</td>
            <td>NIC</td>
            <td>Catagory</td>
            <td>Course Name</td>
            <td>O/l Result</td>
            <td>A/l Result</td>
            

        </tr>
</thead>
<tbody>
        <?php
        $i=1;
        $rows=mysqli_query($conn,"SELECT * FROM registation_form  ORDER BY id DESC");
        ?>
        <?php foreach($rows as $row) : ?>
            <tr>
            
         <td><?php echo $i++; ?></td>
         <td><img src="img/<?php echo $row['image']; ?>" width=200 title="<?php echo $row['image']; ?>"></td>
         <td><?php echo $row['fname'] . " " . $row['lname']?></td>
         <td><?php echo $row["gender"];?></td>
         <td><?php echo $row["mail"];?></td>
         <td><?php echo $row["phone"];?></td>
         <td><?php echo $row["nic"];?></td>
         <td><?php echo $row["catagory"];?></td>
         <td><?php echo $row["cname"];?></td>
         <td><?php echo $row["ol"];?></td>
         <td><?php echo $row["al"];?></td>
       
         </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
        <br>
        <nav class="navbar bg-primary text-white justify-content-center fs-3 mb-5" ><i> SELECTION STUDENT DETAILS UPDATE </i> </nav>
        <div class="container d-flex justify-content-center" >
            <div border="2">
            
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Full Name:</label>
                  <input type="text" class="form-control" name="fullname" >
               </div>

               <div class="col">
                  <label class="form-label">Registration No:</label>
                  <input type="text" class="form-control" name="reg" >
               </div>
            </div>

            <div class="mb-4">
               <label class="form-label">NIC:</label>
               <input type="number" class="form-control" name="nic" >
            </div>

            <div class="mb-4">
               <label class="form-label">Course Name</label>
               <select id="cname" name="coname" required>
                <option>Select the Course Name</option>
                <option>English skill development</option>
                <option>Business Information Technology</option>
                <option>Programme in English</option>
                <option>Programme in Computing</option>
                <option>Programme in Business Management</option>
                <option>Programme in Teacher Education</option>
                <option>Programme in Psychology</option>
                <option>Programme in Bio Medical Science</option>
                <option>Programme in Bio Technology</option>
                <option>Programme in Fashion Design</option>
                <option>Programme in Quantity Surveying</option>
                <option>Diploma in English Language</option>
                <option>Diploma in Computing</option>
                <option>Diploma in Primary Teaching</option>
                <option>Diploma in Physicological Counselling</option>
                <option>Diploma in Architecture Design</option>
                <option>Diploma in Business Management</option>
                <option>Diploma in Financial Management</option>
                <option>Diploma in Fashion Design</option>
                <option>Diploma in Quantity Surveying</option>
                <option>Diploma in Bio Medical Science</option>
                <option>Diploma in Bio Technology</option>
                <option>BSc (Hons) Architecture Design</option>
                <option>Bachelor of Computer Science(Hons)</option>
                <option>Bachelor of Applied Psychology(Hons)</option>
                <option>Bachelor of Business Administration(Hons)</option>
                <option>BEd Early Childhood Edu.(Hons)</option>
                <option>BEd in TESL(Hons)</option>
                <option>Master Programme in MED</option>
                <option>Master Programme in MBA</option>
                
              </select>
            </div>

            <div class="mb-3">
               <label class="form-label">Status:</label>
               <select id="state" name="status" required>
                  <option>Enter status</option>
                  <option>Select</option>
                  <option>Reject</option>
                  <option>Waiting</option>
                </select>
            </div>

            <div class="mb-3">
            <label class="form-label">Message:</label><br>
            <textarea name="msg" class="input" cols="95" rows="5"></textarea>
            </div>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Submit</button>
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
</body>

</html>