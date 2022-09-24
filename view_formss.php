<?php
include 'connection.php';
$query=mysqli_query($conn,"SELECT * FROM student_tb");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td,tr{
                         border:2px solid black;
                         border-collapse:collapse;
                      }
    </style>
</head>
<body>
    <table>
          <tr>
              <th>Name</th>
              <th>Address</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Image</th>
              <th>Action</th>
          </tr>
          <?php
    while($row=mysqli_fetch_assoc($query))
         {
        ?>
        <tr>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Address'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Mobile_no'];?></td>
            <td><?php echo $row['Image'];?></td>
            <td><a href="edit_formss.php?edit_id=<?php echo $row['id'];?>"><input type="submit" name="button"value="Edit"></a>
            <a href="delete_formss.php?delete_id=<?php echo $row['id'];?>"><input type="submit" name="button" value="delete"></a></td>
         </tr>
         <?php
         }
         ?>
            
    </table>
</body>
</html>