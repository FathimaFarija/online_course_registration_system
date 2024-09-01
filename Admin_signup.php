<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $AdminName = $_POST['aname'];
    $email = $_POST['mail'];
    $password = $_POST['psw'];
    $confirm_password = $_POST['cpsw'];

    // Check if password and confirm password match
    if ($password != $confirm_password) {
        echo "Passwords do not match!";
        exit();
    }

    // Hash the password before saving it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO ad_page (aname, mail, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss",$AdminName, $email, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
