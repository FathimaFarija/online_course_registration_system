<?php
require 'vendor/autoload.php'; // Include Stripe PHP library
require 'regi.php';  // Include your database connection file

\Stripe\Stripe::setApiKey('YOUR_STRIPE_SECRET_KEY'); // Add your Stripe Secret Key

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['fname'];
    $reg = $_POST['reg'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $course = $_POST['course'];

    $amount_in_cents = $amount * 100;

    try {
        // Create Payment Intent
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => $amount_in_cents,
            'currency' => 'usd',
            'payment_method_types' => ['card'],
            'description' => "Payment for $course by $name",
            'receipt_email' => $email,
        ]);

        $payment_id = $paymentIntent->id;

        // Save the payment record to the database
        $conn = new mysqli('localhost', 'root', '', 'online_payments');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO payments (full_name, registration_number, email, course_name, amount, payment_status, payment_id) VALUES (?, ?, ?, ?, ?, 'pending', ?)");
        $stmt->bind_param("ssssds", $name, $reg, $email, $course, $amount, $payment_id);

        if ($stmt->execute()) {
            echo json_encode([
                'clientSecret' => $paymentIntent->client_secret,
                'status' => 'success',
                'message' => 'Payment initiated successfully',
            ]);
        } else {
            throw new Exception("Database Error: Unable to save payment record.");
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => $e->getMessage(),
        ]);
    }
}
?>
