<?php
require 'regi.php'; // Make sure this file establishes a database connection and defines $conn

if (isset($_POST["submit"])) {
    // Sanitize user input
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $mail = mysqli_real_escape_string($conn, $_POST["mail"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $nic = mysqli_real_escape_string($conn, $_POST["nic"]);
    $catagory = mysqli_real_escape_string($conn, $_POST["catagory"]);
    $cname = mysqli_real_escape_string($conn, $_POST["cname"]);
    $photo =mysqli_real_escape_string($conn, $_POST["photo"]);
    $ol=mysqli_real_escape_string($conn, $_POST["ol"]);
    $al =mysqli_real_escape_string($conn, $_POST["al"]);

   
    // Prepare SQL query
    $query = "INSERT INTO `registation_form`  (fname, dob, gender, mail, phone, nic, catagory, cname, photo, ol, al) 
              VALUES ('$fname','$dob', '$gender', '$mail', '$phone','$nic','$catagory','$cname','$photo', '$ol', '$al')";

if($result){
    header("Loaction: Reg.php?msg=New record created successfully");
  }
  else{
    echo"Failed: ".mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    STUDENT APPLICATIONS
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="Aboutus.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Gender</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">NIC</th>
          <th scope="col">Catagory</th>
          <th scope="col">Course Name</th>
          <th scope="col">Student</th>
          <th scope="col">O/L Result</th>
          <th scope="col">A/L Result</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `registation_form` ";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["fname"] ?></td>
            <td><?php echo $row["dob"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td><?php echo $row["mail"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td><?php echo $row["nic"] ?></td>
            <td><?php echo $row["catagory"] ?></td>
            <td><?php echo $row["cname"] ?></td>
            <td><?php echo $row["photo"] ?></td>
            <td><?php echo $row["ol"] ?></td>
            <td><?php echo $row["al"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>

