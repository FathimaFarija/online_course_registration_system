<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $firstname = htmlspecialchars(trim($_POST['fname']));
    $lastname = htmlspecialchars(trim($_POST['lname']));
    $email = htmlspecialchars(trim($_POST['mail']));
    $password = $_POST['psw'];
    $confirm_password = $_POST['cpsw'];

    // Validate  Name (only letters allowed)
    if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
        echo "<p style='color: red;'>❌ First Name should contain only letters!</p>";
        exit();
    }
    
    // Validate  Name (only letters allowed)
    if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
        echo "<p style='color: red;'>❌ Last Name should contain only letters!</p>";
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: red;'>❌ Invalid email format!</p>";
        exit();
    }

    // Check if password and confirm password match
    if ($password !== $confirm_password) {
        echo "<p style='color: red;'>❌ Passwords do not match!</p>";
        exit();
    }

    // Check password strength (at least 8 characters, one uppercase, one number, and one special character)
    if (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        echo "<p style='color: red;'>❌ Password must be at least 8 characters long, contain at least one uppercase letter, one number, and one special character!</p>";
        exit();
    }
    
    

    // Check if email already exists
    $checkEmailStmt = $conn->prepare("SELECT * FROM tb_user WHERE mail = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $result = $checkEmailStmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email is already registered!";
        $checkEmailStmt->close();
        exit();
    }
    $checkEmailStmt->close();

    // Hash the password before saving it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO tb_user (fname, lname, mail, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: Unable to complete registration.";
    }

    $stmt->close();
    $conn->close();
}
?>
