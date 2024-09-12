<!--?php
require 'regi.php';

if(isset($_POST["submit"])){
  $name=$_POST["name"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $msg=$_POST["msg"];

  $query = "INSERT INTO about VALUES('','$name','$email','$phone','$msg')";
  $result = mysqli_query($conn,$query);
  
  if($result){
    header("Loaction: comment.php?msg=New record created successfully");
  }
  else{
    echo"Failed: ".mysqli_error($conn);
  }
}
?-->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="About.css" />
    
  </head>
  <body>
    <div class="container">
    
      <div class="form">
        <div class="contact-info">
          <h1 class="title">Hello Students</h1>
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Welcome to Horizon University, Sri Lanka's premier institution for academic excellence 
            and innovation. Offering a diverse array of programs ranging from professional certificates
             to master's degrees, we empower our students to thrive and lead in an ever-changing world. 
             Join us as we explore new horizons in education and shape the future together. Welcome to Horizon
              University, where possibilities abound.
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

          <form action="" method="POST" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="name">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="email">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="phone">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="msg" class="input"></textarea>
              <label for="msg">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" name="submit" class="btn" />
          </form>
        </div>
      </div>
    </div>
    <footer>Horizon University &copy; 2024</footer>

    <script src="About.js"></script>
  </body>
</html>
