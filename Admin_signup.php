<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input fields
    $AdminName = htmlspecialchars(trim($_POST['aname']));
    $email = htmlspecialchars(trim($_POST['mail']));
    $password = htmlspecialchars(trim($_POST['psw']));
    $confirm_password = htmlspecialchars(trim($_POST['cpsw']));

    // Validate Admin Name (only letters allowed)
    if (!preg_match("/^[a-zA-Z ]*$/", $AdminName)) {
        echo "<p style='color: red;'>❌ Admin Name should contain only letters!</p>";
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
    $stmt = $conn->prepare("SELECT id FROM ad_page WHERE mail = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<p style='color: red;'>❌ This email is already registered. Please use a different email!</p>";
        exit();
    }

    $stmt->close();
    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = "uploads/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $file_name = uniqid() . "-" . basename($_FILES['image']['name']);
        $target_file = $upload_dir . $file_name;

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            echo "❌ Failed to upload the image!";
            exit();
        }
    } else {
        echo "❌ Image upload error!";
        exit();
    }

    // Hash the password before saving it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new admin into the database
    $stmt = $conn->prepare("INSERT INTO ad_page (aname, mail, password,image) VALUES (?, ?, ?,?)");
    $stmt->bind_param("ssss", $AdminName, $email, $hashed_password,$target_file);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<p style='color: green;'>✅ Registration successful!</p>";
        // You can redirect to a login page here
        header("Location: welcome_Admin.php"); // You can redirect to admin home page

    } else {
        echo "<p style='color: red;'>❌ Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
