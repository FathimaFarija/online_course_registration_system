<?php
require 'regi.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $reg = $_POST['reg'] ?? null;
    $payment_type = $_POST['payment_type'] ?? null;

    if (!$reg || !$payment_type) {
        die("Error: Missing required fields.");
    }

    if ($payment_type === "online") {
        // Handle online payment
        $cardholder_name = $_POST['cardholder_name'];
        $card_number = $_POST['card_number'];
        $expiry_date = $_POST['expiry_date'];
        $cvv = $_POST['cvv'];

        $stmt = $conn->prepare("INSERT INTO payments (reg, payment_type, cardholder_name, card_number, expiry_date, cvv) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $reg, $payment_type, $cardholder_name, $card_number, $expiry_date, $cvv);

        if ($stmt->execute()) {
            echo "Online payment details saved successfully!";
            header("Location: otp.php");
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } elseif ($payment_type === "manual") {
        // Handle manual payment
        if (isset($_FILES['deposit_slip']) && $_FILES['deposit_slip']['error'] === UPLOAD_ERR_OK) {
            $file_tmp = $_FILES['deposit_slip']['tmp_name'];
            $file_name = basename($_FILES['deposit_slip']['name']);
            $upload_dir = "uploads/";
            $file_path = $upload_dir . $file_name;

            if (move_uploaded_file($file_tmp, $file_path)) {
                $stmt = $conn->prepare("INSERT INTO payments (reg, payment_type, deposit_slip_path) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $reg, $payment_type, $file_path);

                if ($stmt->execute()) {
                    echo "Manual payment details saved successfully!";
                    header("Location: otp.php");
                } else {
                    echo "Error: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Failed to upload deposit slip.";
            }
        } else {
            echo "No deposit slip uploaded.";
        }
    } else {
        echo "Invalid payment type.";
    }
}

$conn->close();
?>
