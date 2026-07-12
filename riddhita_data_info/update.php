<?php
include('connect.php');

$id = $_POST['id'] ?? '';
$pname = $_POST['pname'] ?? '';
$pprice = $_POST['pprice'] ?? '';
$pdes = $_POST['pdes'] ?? '';
$pfeatures = $_POST['pfeatures'] ?? '';


if (empty($id)) {
    die("ID is required");
}

$sql = "UPDATE riddhita_data_info SET pname='$pname', pprice='$pprice',  pdes='$pdes',  pfeatures='$pfeatures' WHERE id='$id'";

if (mysqli_query($con, $sql)) 
    {
    echo "Updated Successfully";
   } 
else 
    {
    echo mysqli_error($con);
    }
?>