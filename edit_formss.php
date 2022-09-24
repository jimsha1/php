<?php
include 'connection.php';
$edit=$_GET['edit_id'];
$query=mysqli_query($conn,"SELECT * FROM student_tb where id='$edit' ");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $mobileno=$_POST['mobile_no'];
    mysqli_query($conn,"update student_tb set Name='$name',Address='$address',Email='$email',Mobile_no='$mobileno' where id='$edit'");
    header('location:view_formss.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <table>
        <thead>
       <?php
            while($row=mysqli_fetch_assoc($query))
            {
            ?>
            
        <tr> 
            <th>Name</th> 
            <td><input type="text" name="name" value="<?php echo $row['Name'];?>"></td> 
        </tr>
        <tr>
            <th>Address</th>
            <td><input type="text" name="address" value="<?php echo $row['Address'];?>"></td>
        </tr>
        <tr>
            <th>Email</th> 
            <td><input type="email" name="email" value="<?php echo $row['Email'];?>"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="text" name="mobile" value="<?php echo $row['Mobile'];?>"></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="image" value="<?php echo $row['Image'];?>"></td>
        </tr>
        <tr>
        <th colspan=2>
                <input type="submit" name="submit" value="submit">
            </th>
        </tr>
        <?php
            }
            ?>
            </thead>
</body>
</html>