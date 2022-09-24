<?php
include 'conn.php';
$delete=$_GET['delete_id'];
$query=mysqli_query($conn,"delete from registration where id='$delete'");
header('location:view_form.php');
?>