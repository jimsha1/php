<?php
include 'conn.php';
$filenew="";
if(isset($_POST['submit']))

{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $userid=$_POST['userid'];
    $password=$_POST['password'];
    $mobileno=$_POST['mobile'];
    $image=$_FILES['image']['name'];

    if($image!="")
    {
        $filearray=pathinfo($_FILES['image']['name']);
        $file1=rand();
        $file_ext=$filearray["extension"];
        $filenew=$file1.".".$file_ext;
        move_uploaded_file($_FILES['image']['tmp_name'],"images/".$filenew);
    }

mysqli_query($conn,"insert into registration (Name,Email,User_id,Password,Mobile_no,Image) values('$name','$email','$userid','$password','$mobileno','$filenew')");
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
<form method="post" enctype="multipart/form-data">
    Name:<input type="text" id="name" name="name"><br><br>
    Email:<input type="email" id="email" name="email"><br><br>
    User_id:<input type="text" id="userid" name="userid"><br><br>
    Password:<input type="password" id="password" name="password"><br><br>
    Mobile_no:<input type="text" id="mobile" name="mobile"><br><br>
    Image:<input type="file" id="image" name="image"><br><br>
    <button name="submit">submit</button>
</form>
    
</body>
</html>