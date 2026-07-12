<?php
include('connect.php');

$name = $_POST["name"];
$surname = $_POST["surname"];
$mobile = $_POST["mobile"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password = $_POST["password"];

if($name=="" && $surname=="" && $mobile=="" && $gender=="" && $email=="" && $password=="")
{
    echo "0";
}
else
{
    $sql = "INSERT INTO riddhita_user_info(name,surname,mobile,gender,email,password)
            VALUES('$name','$surname','$mobile','$gender','$email','$password')";

    if(mysqli_query($con,$sql))
    {
        echo "Data Inserted Successfully";
    }
    else
    {
        echo mysqli_error($con);
    }
}
?>
