<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $firstname = htmlspecialchars(trim($_POST['fname']));
    $lastname = htmlspecialchars(trim($_POST['lname']));
    $email = htmlspecialchars(trim($_POST['mail']));
    $password = $_POST['psw'];
    $confirm_password = $_POST['cpsw'];

    // Validate inputs
    if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
        echo "❌ First Name should contain only letters!";
        exit();
    }
    if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
        echo "❌ Last Name should contain only letters!";
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "❌ Invalid email format!";
        exit();
    }
    if ($password !== $confirm_password) {
        echo "❌ Passwords do not match!";
        exit();
    }
    if (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        echo "❌ Password must be at least 8 characters, contain an uppercase letter, a number, and a special character!";
        exit();
    }

    // Check if email exists
    $stmt = $conn->prepare("SELECT id FROM tb_user WHERE mail = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo "❌ Email is already registered!";
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

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into the database
    $stmt = $conn->prepare("INSERT INTO tb_user (fname, lname, mail, password, image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $email, $hashed_password, $target_file);

    if ($stmt->execute()) {
        echo "✅ Registration successful!";
        header("Location: login.php");
        exit();
    } else {
        echo "❌ Registration failed!";
    }

    $stmt->close();
    $conn->close();
}
?>
