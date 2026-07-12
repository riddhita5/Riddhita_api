<?php
include('connect.php');

$id = $_POST['id'] ?? '';
$name = $_POST['name'] ?? '';
$surname = $_POST['surname'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$gender = $_POST['gender'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($id)) {
    die("ID is required");
}

$sql = "UPDATE riddhita_user_info SET name='$name', surname='$surname',  mobile='$mobile',  gender='$gender',email='$email', password='$password' WHERE id='$id'";

if (mysqli_query($con, $sql)) 
    {
    echo "Updated Successfully";
   } 
else 
    {
    echo mysqli_error($con);
    }
?>