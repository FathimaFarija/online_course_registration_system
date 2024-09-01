<?php
require 'regi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Selection</title>
</head>
<body> 
<nav class="navbar bg-primary text-white justify-content-center fs-3 mb-5" ><i> STUDENT STATUS </i> </nav>
  <div class="container">
    
   
   
    <table border=1 cellspacing=0 cellpadding=10 class="table table-hover text-center">
    <thead class="table-dark">  
    <tr>
            <td>Id</td>
            <td>Full Name</td>
            <td>Registration Number</td>
            <td>NIC</td>
            <td>Course Name</td>
            <td>Status</td>
            <td>Message</td>
   </tr>
</thead>
<tbody>
        <?php
        $i=1;
        $rows=mysqli_query($conn,"SELECT * FROM status  ORDER BY id DESC");
        ?>
        <?php foreach($rows as $row) : ?>
            <tr>
            
         <td><?php echo $i++; ?></td>
         <td><?php echo $row["fullname"];?></td>
         <td><?php echo $row["reg"];?></td>
         <td><?php echo $row["nic"];?></td>
         <td><?php echo $row["coname"];?></td>
         <td><?php echo $row["status"];?></td>
         <td><?php echo $row["msg"];?></td>
        
         </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
     </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>