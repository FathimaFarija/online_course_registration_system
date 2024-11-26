<!?php
require 'regi.php'; // Ensure this file establishes a database connection and defines $conn

if (isset($_POST["submit"])) {
    // Sanitize user input
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $mail = mysqli_real_escape_string($conn, $_POST["mail"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $whatsapp = mysqli_real_escape_string($conn, $_POST["whatsapp"]);
    $nic = mysqli_real_escape_string($conn, $_POST["nic"]);
    $catagory = mysqli_real_escape_string($conn, $_POST["catagory"]);
    $cname = mysqli_real_escape_string($conn, $_POST["cname"]);
    $duration = mysqli_real_escape_string($conn, $_POST["duration"]);
    $user = mysqli_real_escape_string($conn, $_POST["user"]);
    $ol = mysqli_real_escape_string($conn, $_POST["ol"]);
    $al = mysqli_real_escape_string($conn, $_POST["al"]);
    
    // Validate that all required fields are filled
    if (empty($fname) || empty($lname) || empty($dob) || empty($gender) || empty($mail) || empty($phone) || empty($whatsapp) || empty($nic) || empty($catagory) || empty($cname) || empty($duration) || empty($ol) || empty($al) || empty($user) || empty($_POST["pass"])) {
        echo "<script>alert('All fields are required.');</script>";
    } else {
        // Hash the password before storing it
        $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
        
        // Handle image upload
        if ($_FILES["image"]["error"] === 4) {
            echo "<script>alert('Image does not exist');</script>";
        } else {
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tempName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));

            if (!in_array($imageExtension, $validImageExtension)) {
                echo "<script>alert('Invalid image extension');</script>";
            } else if ($fileSize > 1000000) {
                echo "<script>alert('Image size is too large');</script>";
            } else {
                $newImageName = uniqid() . '.' . $imageExtension;
                move_uploaded_file($tempName, 'img/' . $newImageName);

                // Prepare the SQL statement
                $stmt = $conn->prepare("INSERT INTO registation_form (fname, lname, dob, gender, mail, phone, whatsapp, nic, catagory, cname, duration, image, ol, al, user, pass) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                // Bind the parameters
                $stmt->bind_param("sssssssssssssss", $fname, $lname, $dob, $gender, $mail, $phone, $whatsapp, $nic, $catagory, $cname, $duration, $newImageName, $ol, $al, $user, $pass);

                // Execute the statement
                if ($stmt->execute()) {
                    echo "<script>alert('Data inserted successfully'); document.location.href='studentdetails.php';</script>";
                } else {
                    echo "<script>alert('Error in registration!');</script>";
                }

                // Close the statement
                $stmt->close();
            }
        }
    }
    
    // Close the database connection
    $conn->close();
}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Horizonal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   
    <link rel="stylesheet" href="regstyle.css">

    <script>
        // Function to show a temporary alert
        function showTemporaryAlert(message) {
            const alertBox = document.createElement("div");
            alertBox.textContent = message;
            alertBox.style.position = "fixed";
            alertBox.style.top = "20px";
            alertBox.style.left = "50%";
            alertBox.style.transform = "translateX(-50%)";
            alertBox.style.backgroundColor = "#f44336";
            alertBox.style.color = "#fff";
            alertBox.style.padding = "10px 20px";
            alertBox.style.borderRadius = "5px";
            alertBox.style.zIndex = "1000";
            document.body.appendChild(alertBox);

            // Remove the alert after 3 seconds
            setTimeout(() => {
                alertBox.remove();
            }, 3000);
        }

        // Function to check input fields
        function checkInput(event) {
            const input = event.target;
            if (input.value.trim() === "") {
                showTemporaryAlert("This field is required.");
                input.focus(); // Keep focus on the empty field
                event.preventDefault(); // Prevents moving to the next field
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            const inputs = document.querySelectorAll("input, select");
            inputs.forEach(input => {
                input.addEventListener("blur", checkInput);
                input.addEventListener("focus", () => {
                    // Allow focus only if the field is filled
                    if (input.value.trim() !== "") {
                        input.removeEventListener("blur", checkInput);
                    }
                });
                input.addEventListener("input", () => {
                    // Remove blur listener when user starts typing
                    input.removeEventListener("blur", checkInput);
                });
            });
        });
    </script>


  </head>
  <body>
   

  <div class="container">
  <div class="nav-menu" id="navMenu">
            <ul>
            <li><button><a href="index.html" class="link ">Home</a></button></li>
            <li><button><a href="course.html" class="link ">Course</a></button></li>
            <li><button><a href="welcome_new.html" class="link ">Back</a></button></li>
   
            </ul>
        </div>
   
     <div class="progress-bar">
       <div class="step">
         <p>Name</p>
         <div class="bullet">
           <span>1</span>
         </div>
         <div class="check fas fa-check"></div>
       </div>
       <div class="step">
         <p>Contact</p>
         <div class="bullet">
           <span>2</span>
         </div>
         <div class="check fas fa-check"></div>
       </div>
       <div class="step">
         <p>Course</p>
         <div class="bullet">
           <span>3</span>
         </div>
         <div class="check fas fa-check"></div>
       </div>
       <div class="step">
         <p>Attachment</p>
         <div class="bullet">
           <span>4</span>
         </div>
         <div class="check fas fa-check"></div>
       </div>
       <div class="step">
         <p>Submit</p>
         <div class="bullet">
           <span>5</span>
         </div>
         <div class="check fas fa-check"></div>
       </div>
     </div>
     <div class="form-outer">
     <form id="admissionForm" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
         <div class="page slide-page">
           <div class="title">Basic Info:</div>
           <div class="field">
             <lable class="label" for="fname">First Name</lable>
             <input type="text" id="fname" name="fname" required>
           </div>
           <div class="field">
             <lable class="label" for="lname">Last Name</lable>
             <input type="text" id="lname" name="lname" required>
           </div>
          
           <div class="field">
           <lable class="label" for="dob">Date Of Birth</lable>
              <input type="date" id="dob" name="dob" required>
             </div>
             <div class="field">
               <lable class="label" for="gender">Gender</lable>
               <select id="gender" name="gender" required>
                 <option>Select Gender</option>
                 <option>Male</option>
                 <option>Female</option>
                 <option>Other</option>
               </select>
             </div>
             
           <div class="field">
             <button class="firstNext next">Next</button>
           </div>
         </div>

         <div class="page">
           <div class="title">Contact Info:</div>
           <div class="field">
             <lable class="label" for="mail">Email Address</lable>
             <input type="text" id="mail" name="mail" required>
           </div>
           <div class="field">
             <lable class="label" for="phone">Phone Number</lable>
             <input type="Number" id="phone" name="phone" required>
           </div>
           <div class="field">
             <lable class="label" for="whatsapp">Whatsapp Number</lable>
             <input type="Number" id="whatsapp" name="whatsapp" required>
           </div>
           <div class="field">
             <lable class="label" for="nic">NIC</lable>
             <input type="text" id="nic" name="nic" required>
           </div>
           <div class="field btns">
             <button class="prev-1 prev">Previous</button>
             <button class="next-1 next">Next</button>
           </div>
         </div>

         <div class="page">
           <div class="title">Course Information</div>
           <div class="field">
             <lable class="label" for="catagory">Course Catagory</lable>
             <select id="catagory" name="catagory" required>
               <option>Select Course Catagory</option>
               <option>Certificate courses</option>
               <option>Foundation</option>
               <option>Diploma & Higher Diploma</option>
               <option>Bachelor Degree</option>
               <option>Master Degree Programme</option>
             </select>
           </div>
           <div class="field">
             <lable class="label" for="cname">Course Name</lable>
             <select id="cname" name="cname" required>
               <option>Select the Course Name</option>
               <option>English skill development</option>
               <option>Business Information Technology</option>
               <option>Programme in English</option>
               <option>Programme in Computing</option>
               <option>Programme in Business Management</option>
               <option>Programme in Teacher Education</option>
               <option>Programme in Psychology</option>
               <option>Programme in Bio Medical Science</option>
               <option>Programme in Bio Technology</option>
               <option>Programme in Fashion Design</option>
               <option>Programme in Quantity Surveying</option>
               <option>Diploma in English Language</option>
               <option>Diploma in Computing</option>
               <option>Diploma in Primary Teaching</option>
               <option>Diploma in Physicological Counselling</option>
               <option>Diploma in Architecture Design</option>
               <option>Diploma in Business Management</option>
               <option>Diploma in Financial Management</option>
               <option>Diploma in Fashion Design</option>
               <option>Diploma in Quantity Surveying</option>
               <option>Diploma in Bio Medical Science</option>
               <option>Diploma in Bio Technology</option>
               <option>BSc (Hons) Architecture Design</option>
               <option>Bachelor of Computer Science(Hons)</option>
               <option>Bachelor of Applied Psychology(Hons)</option>
               <option>Bachelor of Business Administration(Hons)</option>
               <option>BEd Early Childhood Edu.(Hons)</option>
               <option>BEd in TESL(Hons)</option>
               <option>Master Programme in MED</option>
               <option>Master Programme in MBA</option>
               
             </select>
           </div>
           <div class="field">
             <lable class="label" for="duration">Duration</lable>
             <select id="duration" name="duration" required>
               <option>Select Course Duration</option>
               <option>6 months</option>
               <option>1 year</option>
               <option>2 year</option>
               <option>3 year</option>
               <option>4 year</option>
             </select>
           </div>
           <div class="field btns">
             <button class="prev-2 prev">Previous</button>
             <button class="next-2 next">Next</button>
           </div>
         </div>
          
         

         <div class="page">
           <div class="title">Result sheet:</div>
           <div class="field">
             <lable class="label" for="image">Student Photo</lable>
           
             <input type="file" name="image" accept=".jpg,.jpeg,.png">
           </div>
           <div class="field">
             <lable class="label" for="ol">O/L Result Sheet</lable>
             <input type="text" id="ol" name="ol"  required placeholder="Only include Maths,Science and English Result">
           </div>
           <div class="field">
             <lable class="label" for="al">A/L Result Sheet</lable>
             <input type="text" id="al" name="al" required placeholder="Subject name and Result">
           </div>
           <div class="field btns">
             <button class="prev-3 prev">Previous</button>
             <button class="next-3 next">Next</button>
           </div>
         </div>
         
         <div class="page">
           <div class="title">Login Details:</div>
           <div class="field">
             <lable class="label" for="user">Username</lable>
             <input type="text" id="user" name="user" required>
           </div>
           <div class="field">
             <lable class="label" for="pass">Password</lable>
             <input type="password" id="pass" name="pass" required>
           </div>
           <div class="field btns">
             <button class="prev-4 prev">Previous</button>
             <button class="submit" type="submit" name="submit" >Submit</button>
           </div>
         </div>
       </form>
     </div>
   </div>
   <script src="script.js"></script>
 </body>
</html>
