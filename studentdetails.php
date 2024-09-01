<?php
require 'regi.php';

if(isset($_POST["submit"])){
  $fullname=$_POST["fullname"];
  $reg=$_POST["reg"];
  $nic=$_POST["nic"];
  $coname=$_POST["coname"];
  $status=$_POST["status"];
  $msg=$_POST["msg"];

  $query = "INSERT INTO status VALUES('','$fullname','$reg','$nic','$coname','$status','$msg')";
  $result = mysqli_query($conn,$query);
  
  if($result){
    header("Loaction: selection.php?msg=New record created successfully");
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body> 
<nav class="navbar bg-primary text-white justify-content-center fs-3 mb-5" ><i> STUDENT APPLICATIONS </i> </nav>
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
    <a href="Reg.php" class="btn btn-dark mb-3 " >Add New Student</a>
   
    <table border=1 cellspacing=0 cellpadding=10 class="table table-hover text-center">
    <thead class="table-dark">  
    <tr>
            <td>Id</td>
            <td>Student photo</td>
            <td>Name</td>
            <td>Gender</td>
            <td>Email</td>
            <td>Phone</td>
            <td>NIC</td>
            <td>Catagory</td>
            <td>Course Name</td>
            <td>O/l Result</td>
            <td>A/l Result</td>
            

        </tr>
</thead>
<tbody>
        <?php
        $i=1;
        $rows=mysqli_query($conn,"SELECT * FROM registation_form  ORDER BY id DESC");
        ?>
        <?php foreach($rows as $row) : ?>
            <tr>
            
         <td><?php echo $i++; ?></td>
         <td><img src="img/<?php echo $row['image']; ?>" width=200 title="<?php echo $row['image']; ?>"></td>
         <td><?php echo $row['fname'] . " " . $row['lname']?></td>
         <td><?php echo $row["gender"];?></td>
         <td><?php echo $row["mail"];?></td>
         <td><?php echo $row["phone"];?></td>
         <td><?php echo $row["nic"];?></td>
         <td><?php echo $row["catagory"];?></td>
         <td><?php echo $row["cname"];?></td>
         <td><?php echo $row["ol"];?></td>
         <td><?php echo $row["al"];?></td>
       
         </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
        <br>
        <nav class="navbar bg-primary text-white justify-content-center fs-3 mb-5" ><i> SELECTION STUDENT DETAILS UPDATE </i> </nav>
        <div class="container d-flex justify-content-center" >
            <div border="2">
            
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Full Name:</label>
                  <input type="text" class="form-control" name="fullname" >
               </div>

               <div class="col">
                  <label class="form-label">Registration No:</label>
                  <input type="text" class="form-control" name="reg" >
               </div>
            </div>

            <div class="mb-4">
               <label class="form-label">NIC:</label>
               <input type="number" class="form-control" name="nic" >
            </div>

            <div class="mb-4">
               <label class="form-label">Course Name</label>
               <select id="cname" name="coname" required>
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

            <div class="mb-3">
               <label class="form-label">Status:</label>
               <select id="state" name="status" required>
                  <option>Enter status</option>
                  <option>Select</option>
                  <option>Reject</option>
                  <option>Waiting</option>
                </select>
            </div>

            <div class="mb-3">
            <textarea name="msg" class="input"></textarea>
            </div>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Submit</button>
            </div>
         </form>
         </div>
      </div>
   </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>