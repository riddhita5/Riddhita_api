<?php
include('connect.php');

$pname = $_POST["pname"];
$pprice = $_POST["pprice"];
$pdes = $_POST["pdes"];
$pfeatures = $_POST["pfeatures"];
$pimage = $_POST["pimage"];


if($pname=="" && $pprice=="" && $pdes=="" && $pfeatures=="" && $pimage=="")
{
    echo "0";
}
else
{
    $sql = "INSERT INTO riddhita_data_info(pname,pprice,pdes,pfeatures,pimage)
            VALUES('$pname','$pprice','$pdes','$pfeatures','$pimage')";

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