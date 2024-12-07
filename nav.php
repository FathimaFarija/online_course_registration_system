<!-- Navbar Start -->
    
    <nav class="navbar navbar-expand-lg navbar-light shadow sticky-top-fixed p-0" style="background-color: rgba(0, 211, 230, 0.12);">
        <a href="welcome_new.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-university me-3"></i>Horizon</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index1.php" class="nav-item nav-link">Home</a>
                <a href="about1.php" class="nav-item nav-link">About</a>
                <a href="course1.php" class="nav-item nav-link ">Courses</a>
                <a href="welcome_new.php" class="nav-item nav-link ">Main_Page</a>
                <a href="student_selection.php" class="nav-item nav-link ">stutus</a>
                
                <div class="navbar-nav ms-auto p-4 p-lg-0 d-flex align-items-center">
                    <span class="d-none d-lg-inline">Hi, <?php echo htmlspecialchars($fname); ?>!</span>
                    
    
                    <img src="<?php echo htmlspecialchars($image_path); ?>" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover; margin-right: 10px;">
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


