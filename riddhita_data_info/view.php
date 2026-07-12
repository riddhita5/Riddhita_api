<?php
include('connect.php');
$sql = "select * from riddhita_data_info";

$row = mysqli_query($con,$sql);
$response=array();
while($data = mysqli_fetch_array($row))
    {
        $value["id"]= $data["id"];
        $value["pname"]= $data["pname"];
        $value["pprice"]= $data["pprice"];
        $value["pdes"]= $data["pdes"];
        $value["pfeatures"]=$data["pfeatures"];
        $value["pimage"]=$data["pimage"];

        array_push($response,$value);
    }

    echo json_encode($response);

?>
