<?php
include 'db_connect.php';

session_start(); // Start a session to track logged-in users

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $email = htmlspecialchars(trim($_POST['mail']));
    $password = htmlspecialchars(trim($_POST['psw']));

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("SELECT id, fname, password FROM tb_user WHERE mail = ?");
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $firstname, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Successful login
            $_SESSION['user_id'] = $id; // Store user ID in session
            $_SESSION['user_fname'] = $firstname; // Store user first name in session
           // echo "<p style='color: black; '>✅ Login successful! Welcome, " . $_SESSION['user_fname'] . ".</p>";
            
            // Redirect or include welcome page here
            // header("Location: dashboard.php");
            include 'welcome_new.html';
            
        } else {
            echo "<p style='color: red;'>❌ Invalid password! Please try again.</p>";
        }
    } else {
        echo "<p style='color: red;'>❌ No user found with that email! Please check your email address.</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
