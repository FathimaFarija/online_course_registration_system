<?php
require 'regi.php';


if(isset($_POST["submit"])){
  $fname=$_POST["fname"];
  $reg=$_POST["reg"];
  $amount=$_POST["amount"];
  $nic=$_POST["nic"];
  $email=$_POST["email"];
  $cname=$_POST["cname"];
  
//

  if($_FILES["image"]["error"]===4){
    echo
    "<script>alert('Image Does not Exist');</script>";
   }
   else{
    $fileName=$_FILES["image"]["name"];
    $fileSize=$_FILES["image"]["size"];
    $tempName=$_FILES["image"]["tmp_name"];

    $validImageExtension=['jpg','jpeg','png'];
    $imageExtension=explode('.',$fileName);
    $imageExtension=strtolower(end($imageExtension));
    if(!in_array($imageExtension,$validImageExtension)){
        echo
        "<script>alert('Invalid Image Extension');</script>";
    }
    else if($fileSize>1000000){
      echo
      "<script>alert('Image size is too large');</script>"; 
    }
    else{
      $newImageName=uniqid();
      $newImageName.='.' . $imageExtension;

      move_uploaded_file($tempName, 'img/' . $newImageName);
      $query = "INSERT INTO payment (fname, reg, amount , nic, email, cname, image) VALUES('$fname', '$reg', '$amount', '$nic', '$email','$cname','$newImageName')";
      mysqli_query($conn, $query);
      echo 
      "<script>alert('Thank you for your payment. Your Registration process has been successfully completed.');
       
      </script>";
    }
   }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>payment</title>
    <link rel="stylesheet" href="About.css" />
    
  </head>
  <body>
    <div class="container">
    <div class="wrapper">
      <nav class="nav">
          <div class="nav-logo">
              <p><img src="logon.png" width="75px" height="75px"></p>
          </div>
          <div class="nav-menu" id="navMenu">
              <ul>
                  <li><a href="enter.php" class="link ">Home</a></li>
                  <li><a href="coursenew.html" class="link">Course</a></li>
                  <li><a href="Reg.php" class="link">Registration</a></li>
                  <li><a href="Aboutus.php" class="link active">About us</a></li>
                  
                  
              </ul>
          </div>
         
      </nav>
      </div>
    
      <span class="big-circle"></span>
     
      <div class="form">
        <div class="contact-info">
          <h1 class="title">Hello Students....</h1>
          <h3 class="title">Payment Instructions</h3>
          <p class="text">
            <p><strong>Bank Name:</strong> Bank of ceylon(BOC)</p>
            <p><strong>Account Name:</strong> Horizon University</p>
            <p><strong>Account Number:</strong> 123-456-7890</p>
            <p><strong>Registration Amount:</strong>Rs.1000</p>


            <p><strong>Reference:</strong> Please include your full name and course name as the payment reference.</p>
            <p><strong>Payment Deadline:</strong> Ensure your payment is made by Payment Deadline 2024/10/01.</p>
            <p><strong>Contact:</strong> If you have any questions or issues with the payment, feel free to contact our support team </p>
          </p>
          
          <div class="info">
            <div class="information">
              
              <img src="address.png" class="icon" alt="" />
              <p>No:28, Main Street, Colombo</p>
            </div>
            <div class="information">
              <img src="email.png" class="icon" alt="" />
              <p>horizonuni@26gmail.com</p>
            </div>
            <div class="information">
              <img src="phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <img src="fb1.jpg" alt="" width="40px" height="40px">
              </a>
              <a href="#">
                <img src="twitter.jpg" alt="" width="40px" height="40px">
              </a>
              <a href="#">
                <img src="insta.jpg" alt="" width="40px" height="40px">
              </a>
              <a href="#">
                <img src="in.jpg" alt="" width="40px" height="40px">
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form  id="payment-form" action="pop.html" method="POST" enctype="multipart/form-data" autocomplete="off">
            <h3 class="title">Payment Details</h3>
            <div class="input-container">
              <input type="text" name="fname" class="input" />
              <label for="fname">Name</label>
              <span>Name</span>
            </div>
            <div class="input-container">
              <input type="text" name="reg" class="input" />
              <label for="reg">Registration Number</label>
              <span>Registration Number</span>
            </div>
            <div class="input-container">
              <input type="int" name="amount" class="input" />
              <label for="amount">Amount</label>
              <span>Name</span>
            </div>
            <div class="input-container">
              <input type="text" name="nic" class="input" />
              <label for="nic">NIC</label>
              <span>NIC</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="email">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="type" name="cname" class="input" />
              <label for="cname">Course Name</label>
             
              <span>Course Name</span>
            </div><br><br>
            <h3 class="title">Deposit slip photo</h3>
            <div class="input-container">
              <input type="file" name="image" accept=".jpg,.jpeg,.png" class="input" />
              
              <span>Deposit slip photo</span>
            </div>
            <button type="submit" value="Submit" name="submit" class="btn" >Submit</button>
            <!--input type="submit" value="Submit" name="submit" class="btn" /-->
          </form>
          
        </div>
      </div>
    </div>
    
    <script src="about.js"></script>
    
  </body>
</html>
