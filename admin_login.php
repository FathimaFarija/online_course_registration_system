<?php
include 'db_connect.php';

session_start(); // Start a session to track logged-in users

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $email = htmlspecialchars(trim($_POST['mail']));
    $password = htmlspecialchars(trim($_POST['psw']));
    
    $stmt = $conn->prepare("SELECT id,aname,aimage, password FROM ad_page WHERE mail = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id,$AdminName,$image_path, $hashed_password);

        $stmt->fetch();


        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Successful login
            $_SESSION['aname'] = $AdminName;
            $_SESSION['aimage'] = $image_path;
            // Store admin name in session
            
            // Redirect or include the home admin page here
            header("Location: welcome_Admin.php"); // You can redirect to admin home page
            exit();
        } else {
            echo "<p style='color: red;'>❌ Incorrect password! Please try again.</p>";
        }
    } else {
        echo "<p style='color: red;'>❌ No admin found with this email! Please check your email address.</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
