<?php
include 'conn.php';
$edit=$_GET['edit_id'];
$query=mysqli_query($conn,"SELECT * FROM registration where id='$edit' ");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $userid=$_POST['userid'];
    $mobileno=$_POST['mobileno'];
    mysqli_query($conn,"update registration set Name='$name',Email='$email',User_id='$userid',Mobile_no='$mobileno' where id='$edit'");
    header('location:view_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th{
                      border:2px solid black;border-collapse:collapse;
                   }
    </style>
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
        <th>Email</th> 
        <td><input type="email" name="email" value="<?php echo $row['Email'];?>"></td>
        </tr>
        <tr>
        <th>Userid</th> 
        <td><input type="text" name="userid" value="<?php echo $row['User_id'];?>"></td>
        </tr>
        <tr>
        <th>Mobileno</th> 
        <td><input type="text" name="mobileno" value="<?php echo $row['Mobile_no'];?>"></td>
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
          
    </table>
    </form>

    
</body>
</html>