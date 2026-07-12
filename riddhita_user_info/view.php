<?php
include('connect.php');
$sql = "select * from riddhita_user_info";

$row = mysqli_query($con,$sql);
$response=array();
while($data = mysqli_fetch_array($row))
    {
        $value["id"]= $data["id"];
        $value["name"]= $data["name"];
        $value["surname"]= $data["surname"];
        $value["mobile"]= $data["mobile"];
        $value["gender"]= $data["gender"];
        $value["email"]= $data["email"];
        $value["password"]=$data["password"];

        array_push($response,$value);
    }

    echo json_encode($response);

?>