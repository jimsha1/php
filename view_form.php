
<?php
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM registration");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td{
                    border:2px solid black;border-collapse:collapse;
                   }
    </style>
</head>
<body>
    <table>
        <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Userid</th>
        <th>Password</th>
        <th>Mobileno</th>
        <th>Image</th>
        <th>Action</th>
        
    </tr>
                </thead>
    <?php
    while($row=mysqli_fetch_assoc($query))
    {
        ?>
        <tbody>
        <tr>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Email'];?></td> 
            <td><?php echo $row['User_id'];?></td>
            <td><?php echo $row['Password'];?></td>
            <td><?php echo $row['Mobile_no'];?></td>
            <td><?php echo $row['Image'];?></td>
            <td><a href="edit_form.php?edit_id=<?php echo $row['id'];?>"><input type="submit" name="button"value="Edit"></a>
            <a href="delete_form.php?delete_id=<?php echo $row['id'];?>"><input type="submit" name="button" value="delete"></a></td>
    </tr>
    <?php
    }
    ?>
    </tbody>

    
</table>
</body>
</html>