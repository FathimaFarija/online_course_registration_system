<?php
session_start();
if (!isset($_SESSION['fname']) || !isset($_SESSION['image'])) {
    echo "❌ No user data found! Please log in first.";
    header("Location: login.php");
    exit();
}

$fname = $_SESSION['fname'];
$image_path = $_SESSION['image'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Horizon University</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="paycard.css">

    <style>
             .icons {
  display: flex;
  gap: 40px;
  font-size: 36px;
}

.icons i {
  color: #000; /* You can customize the color */
}

.icons i:hover {
  color: #0077ff; /* Hover effect color */
}
    </style>
   
    
  
</head>

<body>

<?php
   include 'nav.php';
   ?>
    




    <!-- Header Start -->
<div class="back">
    <div class="container-fluid py-5 mb-20 page-header" style="background: linear-gradient(to right, rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url('./img/uni.jpg'); background-size: cover; background-position: center;">
      <div class="container" style="padding-top: 100px; padding-bottom: 60px;">
      <div class="row justify-content-center">
              <div class="col-lg-10 text-center">
                  <h1 class="display-3 text-white animated slideInDown">Payment</h1>
                  
    
              </div>
          </div>
      </div>
    </div>
    
      <!-- Header End -->
    <div class="containers">
        <div class="wrapper">
          
          </div>
        
         
          <div class="form">
            <div class="contact-info">
              <h1 class="title">Hello Students....</h1>
              <h3 class="title">Payment Instructions</h3>
              <p class="text"> <div class="animated slideInUp">
                <p><strong>Bank Name:</strong> Bank of ceylon(BOC)</p>
                <p><strong>Account Name:</strong> Horizon University</p>
                <p><strong>Account Number:</strong> 123-456-7890</p>
                <p><strong>Registration Amount:</strong>Rs.1000</p>
    
    
                <p><strong>Reference:</strong> Please include your full name and course name as the payment reference.</p>
                <p><strong>Payment Deadline:</strong> Ensure your payment is made by Payment Deadline 2024/12/31.</p>
                <p><strong>Contact:</strong> If you have any questions or issues with the payment, feel free to contact our support team </p>
              </div>
                
              </p>
              
              
    
              
            </div>
    
            <div class="contact-form">
             
    
            <div class="container mt-5">
        <h2 class="text-center">Payment Form</h2>
        
        <!-- Payment Type Selection -->
        
        <div class="form-group">
            
            <label for="payment-type">Choose Payment Method:</label>
            <select id="payment-type" class="form-control" onchange="showPaymentForm()">
                <option value=""> 💳 Select Payment Method</option>
                <option value="online">Online Payment</option>
                <option value="manual">Manual Payment</option>
            </select>
        </div>
        

        <!-- Online Payment Form (Credit Card) -->
        <div id="online-payment-form" class="payment-method-section"  style="display: none;">
            <h4>Credit Card Payment</h4>
            <form id="credit-card-form" method="POST" action="payment_script.php"  >

                <input type="hidden" name="payment_type" value="online">
                <div class="form-group">
                 <label for="reg">Registration_Number</label>
                 <input type="text" id="reg" name="reg" class="form-control" required>
                 </div>
                <div class="form-group">
                    <label for="cardholder-name">Cardholder Name</label>
                    <input type="text" id="cardholder-name" name="cardholder_name" class="form-control" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" name="card_number" class="form-control" placeholder="1234 5678 9012 3456" maxlength="19" required>
                </div>
                <div class="form-group">
                    <label for="expiry-date">Expiry Date</label>
                    <input type="text" id="expiry-date" name="expiry_date" class="form-control" placeholder="MM/YY" maxlength="5" required>
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="password" id="cvv" name="cvv" class="form-control" placeholder="123" maxlength="3" required>
                </div><br>
                <button type="submit" class="btn btn-primary">Pay Now</button><br><br>
                <div class="icons">
  <i class="fab fa-cc-visa"></i> <!-- Visa Icon -->
  <i class="fab fa-cc-mastercard"></i> <!-- MasterCard Icon -->
  <i class="fas fa-credit-card"></i> <!-- Credit Card Icon -->
  <i class="fab fa-paypal"></i> <!-- PayPal Icon -->
</div>
            </form>
        </div>


        <!-- Manual Payment Form (Bank Deposit Slip) -->
        <div id="manual-payment-form" class="payment-method-section"  style="display: none;">
            <h4>Bank Deposit Payment</h4>
            <form id="manual-form" method="POST" action="payment_script.php" enctype="multipart/form-data">
                <input type="hidden" name="payment_type" value="manual">
                <div class="form-group">
                 <label for="reg">Registration_Number</label>
                 <input type="text" id="reg" name="reg" class="form-control" required>
                 </div>
                <div class="form-group">
                    <label for="deposit-slip">Upload Deposit Slip</label>
                    <input type="file" id="deposit-slip" name="deposit_slip" class="form-control" accept=".jpg,.jpeg,.png" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit Deposit Slip</button>
            </form>
        </div>
    </div>
                  
              
            </div>
          </div>
        </div>
 

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="about.php">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="instruction.html">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>No:28, Main Street, Colombo</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>123-456-789</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>horizonuni@26gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/cat-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/cat-3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Browse courses, register, and manage your schedule from any device—quick, convenient, and hassle-free!</p>
                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Horizon University</a>, All Right Reserved.

                        
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="Home_new.php">Home</a>
                            <a href="">Cookies</a>
                            <a href="instruction.html">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="payment.js"></script>


    <script>
    function showPaymentForm() {
        // Get the selected payment type from the dropdown
        var paymentType = document.getElementById('payment-type').value;

        // Get the form sections
        var onlineForm = document.getElementById('online-payment-form');
        var manualForm = document.getElementById('manual-payment-form');

        // Show or hide forms based on selection
        if (paymentType === 'online') {
            onlineForm.style.display = 'block';
            manualForm.style.display = 'none';
        } else if (paymentType === 'manual') {
            manualForm.style.display = 'block';
            onlineForm.style.display = 'none';
        } else {
            onlineForm.style.display = 'none';
            manualForm.style.display = 'none';
        }
    }
</script>
       
 <script>
        function handlePayment(paymentMethod) {
            // Perform basic validation and redirect if successful
            if (paymentMethod === 'online') {
                var cardholderName = document.getElementById('cardholder-name').value;
                var cardNumber = document.getElementById('card-number').value;
                var expiryDate = document.getElementById('expiry-date').value;
                var cvv = document.getElementById('cvv').value;

                // Simple validation (ensure fields are not empty)
                if (!cardholderName || !cardNumber || !expiryDate || !cvv) {
                    alert('Please fill all fields.');
                    return false;
                }
                alert('Online Payment Successful! Redirecting...');
            } else if (paymentMethod === 'manual') {
                var depositSlip = document.getElementById('deposit-slip').files[0];
                
                // Simple validation (check if a file is selected)
                if (!depositSlip) {
                    alert('Please upload the deposit slip.');
                    return false;
                }
                alert('Manual Payment Successful! Redirecting...');
            }

            // Redirect to pop.html after successful payment
            window.location.href = 'pop_new.html';
            return false; // Prevent form submission to allow redirection
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>