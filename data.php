<?php
require 'regi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1 cellspacing=0 cellpadding=10>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Image</td>

        </tr>
        <?php
        $i=1;
        $rows=mysqli_query($conn,"SELECT * FROM ex ORDER BY id DESC");
        ?>
        <?php foreach($rows as $row) : ?>
            <tr>
         <td><?php echo $i++; ?></td>
         <td><?php echo $row["name"];?></td>
         <td><img src="img/<?php echo $row['image'];?>" width=200 title="<?php echo $row['image'];?>"</td>
         </tr>
        <?php endforeach; ?>
        </table>
        <br>
        <a href="../uploadimagefile"> Upload Image File </a>
</body>
</html>