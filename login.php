<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['mail']));
    $password = htmlspecialchars(trim($_POST['psw']));

    $stmt = $conn->prepare("SELECT id, fname, image, password FROM tb_user WHERE mail = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $firstname, $image_path, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['fname'] = $firstname;
            $_SESSION['image'] = $image_path;

            header("Location: welcome_new.php");
            exit();
        } else {
            echo "❌ Invalid password!";
        }
    } else {
        echo "❌ No user found with that email!";
    }

    $stmt->close();
    $conn->close();
}
?>
