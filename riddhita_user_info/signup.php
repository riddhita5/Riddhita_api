<?php

include('connect.php');

$n1 = $_POST['name'];
$s1 = $_POST['surname'];
$g1 = $_POST['mobile'];
$m1 = $_POST['gender'];
$e1 = $_POST['email'];
$p1 = $_POST['password'];

if($n1=="" || $s1=="" || $g1=="" || $m1=="" || $e1=="" || $p1=="")
{
    echo "Please fill all fields.";
}
else
{
    $query = "INSERT INTO riddhita_user_info(name, surname, mobile, gender, email, password)
              VALUES('$n1', '$s1', '$g1', '$m1', '$e1', '$p1')";

    mysqli_query($con, $query);

    echo "Data inserted successfully";
}
?>