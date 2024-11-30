<?php
    require 'regi.php';
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['userId'])) {
        header("Location: login.php");
        exit();
    }
    
    $userId = $_SESSION['userId'];
    $sql = "SELECT * FROM users WHERE id='$userId'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $username = $row['username'];
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $email = $row['email'];
    $phone = $row['phone'];
    $userType = $row['userType'];
    if ($userType == 0) {
        $userType = "User";
    } else {
        $userType = "Admin";
    }
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
    <meta name="description" content="Bootstrap navbar examples for any type of project, Bootstrap 4" />  

    <title>Profile</title>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style>
        body {
            background-color: #f1f1f1;
        }
        .row {
            margin-right: 150px;
            margin-top: 73px;
        }
        .footer {
            position: fixed;
            bottom: 0;
        }
        .user-info {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }
        .upload-btn-wrapper button {
            background-color: #bababa;
            border: 2px solid gray;
            border-radius: 8px;
            font-size: 10px;
            font-weight: bold;
        }
        .profile-details-form input,
        .profile-details-form button {
            font-size: 16px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light shadow sticky-top-fixed p-0" style="background-color: rgba(0, 211, 230, 0.12);">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-university me-3"></i>Horizon</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="course.html" class="nav-item nav-link ">Courses</a>
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


    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="jumbotron p-3 mb-3" style="display: flex; justify-content: center;">
                    <div class="user-info">
                        <img class="rounded-circle mb-3 bg-dark" src="img/profilePic-<?php echo $userId; ?>.jpg" onError="this.src = 'img/profilePic.jpg'" style="width:215px;height:215px;padding:1px;">
                        <form action="partials/_manageProfile.php" method="POST">
                            <small>Remove Image: </small><button type="submit" class="btn btn-primary" name="removeProfilePic" style="font-size: 12px;padding: 3px 8px;border-radius: 9px;">Remove</button>
                        </form>
                        <form action="partials/_manageProfile.php" method="POST" enctype="multipart/form-data" style="margin-top: 7px;">
                            <div class="upload-btn-wrapper">
                                <small>Change Image:</small>
                                <button class="btn upload">Choose</button>
                                <input type="file" name="image" id="image" accept="image/*">
                            </div>
                            <button type="submit" name="updateProfilePic" class="btn btn-primary" style="margin-top: 7px;">Update</button>
                        </form>
                    </div>
                </div>

                <div class="content-panel mb-3" style="border-radius: 15px;background-color: #fff;padding: 20px;">
                    <h2 class="title text-center">Profile <span class="badge badge-warning"><?php echo $userType; ?></span></h2>

                    <form action="partials/_manageProfile.php" method="POST" class="profile-details-form">
                        <div class="form-group">
                            <b><label for="username">Username:</label></b>
                            <input class="form-control" id="username" name="username" type="text" disabled value="<?php echo $username; ?>">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="firstName">First Name:</label></b>
                                <input type="text" class="form-control" id="firstName" name="firstName" required value="<?php echo $firstName; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="lastName">Last Name:</label></b>
                                <input type="text" class="form-control" id="lastName" name="lastName" required value="<?php echo $lastName; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <b><label for="email">Email:</label></b>
                            <input type="email" class="form-control" id="email" name="email" required value="<?php echo $email; ?>">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <b><label for="phone">Phone No:</label></b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon">+91</span>
                                    </div>
                                    <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" maxlength="10" required value="<?php echo $phone; ?>">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <b><label for="password">Password:</label></b>
                                <input type="password" class="form-control" id="password" name="password" required minlength="4" maxlength="21">
                            </div>
                        </div>
                        <button type="submit" name="updateProfileDetails" class="btn btn-primary">Update</button>
                    </form>
                </div>

                <a href="logout.php" class="btn btn-secondary">Logout</a>
            </div>
        </div>
    </div>

    

    <!-- JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
</body>
</html>
