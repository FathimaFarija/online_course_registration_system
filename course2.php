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
<html lang="en" dir="ltr">
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
    <meta charset="utf-8" />
   
    <link rel="stylesheet" href="course.css" />
   
   

    <script src="course.js" defer></script>

  </head>
  <body>



  <?php
   include 'navmain.php';
   ?>

<!-- Header Start >
<div class="container-fluid py-5 mb-5 page-header" style="background: linear-gradient(to right, rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url('./img/uni.jpg'); background-size: cover; background-position: center;">
  <div class="container py-5">
      <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
              <h1 class="display-3 text-white animated slideInDown"></h1>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a class="text-white" href="about.html">About</a></li>
                      <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                  </ol>
              </nav>
              
          </div>
      </div>
  </div>
</div>
< Header End -->
<!-- Header Start -->
<div class="back">
<div class="container-fluid py-5 mb-20 page-header" style="background: linear-gradient(to right, rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url('./img/uni.jpg'); background-size: cover; background-position: center;">
  <div class="container" style="padding-top: 100px; padding-bottom: 60px;">
  <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
              <h1 class="display-3 text-white animated slideInDown">Courses</h1>
              

          </div>
      </div>
  </div>
</div>

  <!-- Header End -->



    <div class="container">
      <!-- Images Filter Buttons Section -->
      <div class="wrapper">

      <div class="row mt-1" id="filter-buttons">
        
        <div class="col-14">
          
          <button class="btn mb-3 me-2 active fs-5" data-filter="all">Show all</button>
          <button class="btn mb-3 mx-2 fs-5" data-filter="Certificate courses">Certificate courses</button>
          <button class="btn mb-3 mx-2 fs-5" data-filter="Foundation">Foundation</button>
          <button class="btn mb-3 mx-2 fs-5" data-filter="Diploma & Higher Diploma">Diploma</button>
          <button class="btn mb-3 mx-2 fs-5" data-filter="Bachelor Degree">Bachelor Degree</button>
          <button class="btn mb-3 mx-2 fs-5" data-filter="Master Programme">Master Degree </button>
          
        </div>
       
      </div>

      <!-- Filterable Images / Cards Section -->
      <div class="row px-2 mt-4 gap-3" id="filterable-cards">
        <div class="card p-0" data-name="Certificate courses">
         <img src="./img/personality-img-1024x788.jpg" alt="img" /> 
          <div class="card-body">
            <h6 class="card-title">English skill development</h6>
            <button id="see"><a href="c1.html">See more...</a></button>
            
          </div>
        </div>
        <div class="card p-0" data-name="Master Programme">
          <img src="./img/Mas2.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Master Programme in MED</h6>
            <button id="see"><a href="c29.html">See more...</a></button>          </div>
        </div>
        
        <div class="card p-0" data-name="Master Programme">
          <img src="./img/MBA.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Master Programme in MBA</h6>
            <button id="see"><a href="c30.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Certificate courses">
          <img src="./img/Cer1.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Business Information Technology</h6>
            <button id="see"><a href="c2.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Foundation">
          <img src="./img/english.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Programme in English</h6>
            <button id="see"><a href="c3.html">See more...</a></button>          </div>
        </div>
        
        <div class="card p-0" data-name="Foundation">
          <img src="./img/computer.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Programme in Computing</h6>
            <button id="see"><a href="c4.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Foundation">
          <img src="./img/BM.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Programme in Business Management</h6>
            <button id="see"><a href="c5.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Foundation">
          <img src="./img/TE.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Programme in Teacher Education</h6>
            <button id="see"><a href="c6.html">See more...</a></button>          </div>
        </div>
        
        <div class="card p-0" data-name="Foundation">
          <img src="./img/Psychology.png" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Programme in Psychology</h6>
            <button id="see"><a href="c7.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Foundation">
          <img src="./img/BMS.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Programme in Bio Medical Science</h6>
            <button id="see"><a href="c8.html">See more...</a></button>          </div>
        </div>
        
        <div class="card p-0" data-name="Foundation">
          <img src="./img/BTech.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Programme in Bio Technology</h6>
            <button id="see"><a href="c9.html">See more...</a></button>          </div>
        </div>
        <div class="card p-0" data-name="Foundation">
          <img src="./img/FD.png" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Programme in Fashion Design</h6>
            <button id="see"><a href="c10.html">See more...</a></button>          </div>
        </div>
        
        <div class="card p-0" data-name="Foundation">
          <img src="./img/Qs.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Programme in Quantity Surveying</h6>
            <button id="see"><a href="c11.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Diploma & Higher Diploma">
          <img src="./img/Endip.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Diploma in English Language</h6>
            <button id="see"><a href="c12.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Diploma & Higher Diploma">
          <img src="./img/com dip.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Diploma in Computing</h6>
            <button id="see"><a href="c13.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Diploma & Higher Diploma">
          <img src="./img/PrimDip.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Diploma in Primary Teaching</h6>
            <button id="see"><a href="c14.html">See more...</a></button>          </div>
        </div>
      
        <div class="card p-0" data-name="Diploma & Higher Diploma">
          <img src="./img/phiDip.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Diploma in Physicological Counselling</h6>
            <button id="see"><a href="c15.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Diploma & Higher Diploma">
          <img src="./img/ArcDip.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Diploma in Architecture Design</h6>
            <button id="see"><a href="c16.html">See more...</a></button>          </div>
        </div>
      
        <div class="card p-0" data-name="Diploma & Higher Diploma">
          <img src="./img/BMDip.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Diploma in Business Management</h6>
            <button id="see"><a href="c17.html">See more...</a></button>          </div>
        </div>
      
        <div class="card p-0" data-name="Diploma & Higher Diploma">
          <img src="./img/fmDip.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Diploma in Financial Management</h6>
            <button id="see"><a href="c18.html">See more...</a></button>          </div>
        </div>
      
        <div class="card p-0" data-name="Diploma & Higher Diploma">
          <img src="./img/FDDip.png" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Diploma in Fashion Design</h6>
            <button id="see"><a href="c19.html">See more...</a></button>          </div>
        </div>
      
        <div class="card p-0" data-name="Diploma & Higher Diploma">
          <img src="./img/QsDip.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Diploma in Quantity Surveying</h6>
            <button id="see"><a href="c20.html">See more...</a></button>          </div>
        </div>
      
        <div class="card p-0" data-name="Diploma & Higher Diploma">
          <img src="./img/BioDip.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Diploma in Bio Medical Science</h6>
            <button id="see"><a href="c21.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Diploma & Higher Diploma">
          <img src="./img/BiotchDip.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Diploma in Bio Technology</h6>
            <button id="see"><a href="c22.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Bachelor Degree">
          <img src="./img/Degarc.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">BSc (Hons) Architecture Design </h6>
            <button id="see"><a href="c23.html">See more...</a></button>          </div>
        </div>
      
        <div class="card p-0" data-name="Bachelor Degree">
          <img src="./img/Degcom.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Bachelor of Computer Science(Hons)</h6>
            <button id="see"><a href="c24.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Bachelor Degree">
          <img src="./img/degphy.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Bachelor of Applied Psychology(Hons)</h6>
            <button id="see"><a href="c25.html">See more...</a></button>          </div>
        </div>
      
        <div class="card p-0" data-name="Bachelor Degree">
          <img src="./img/degbm.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">Bachelor of Business Administration(Hons)</h6>
            <button id="see"><a href="c26.html">See more...</a></button>          </div>
        </div>
      
        <div class="card p-0" data-name="Bachelor Degree">
          <img src="./img/Degchild.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">BEd Early Childhood Edu.(Hons)</h6>
            <button id="see"><a href="c27.html">See more...</a></button>          </div>
        </div>
       
        <div class="card p-0" data-name="Bachelor Degree">
          <img src="./img/Degtesl.jpg" alt="img" />
          <div class="card-body">
            <h6 class="card-title">BEd in TESL(Hons)</h6>
            <button id="see"><a href="c28.html">See more...</a></button>          </div>
        </div>
        
      </div>
    </div>
  </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  </body>
</html>
