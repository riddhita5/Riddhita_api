<?php

include('connect.php');

// Upload folder
$upload_path = "images/";

// Create folder if it doesn't exist
if (!file_exists($upload_path)) {
    mkdir($upload_path, 0777, true);
}

// Get data
$pname = $_POST['pname'];
$pprice = $_POST['pprice'];
$pdes = $_POST['pdes'];
$pfeatures = $_POST['pfeatures'];

// Check if image is selected
if(isset($_FILES['pimage']))
{
    $fileinfo = pathinfo($_FILES['pimage']['name']);
    $extension = strtolower($fileinfo['extension']);

    $filename = "product_" . time() . "." . $extension;

    $filepath = $upload_path . $filename;

    if(move_uploaded_file($_FILES['pimage']['tmp_name'], $filepath))
    {
        $image_url = "http://localhost/riddhita_data_info/" . $filepath;

        $sql = "INSERT INTO riddhita_data_info
                (pname,pprice,pdes,pfeatures,pimage)
                VALUES
                ('$pname','$pprice','$pdes','$pfeatures','$image_url')";

        if(mysqli_query($con,$sql))
        {
            echo json_encode([
                "status"=>1,
                "message"=>"Product Added Successfully",
                "image"=>$image_url
            ]);
        }
        else
        {
            echo mysqli_error($con);
        }
    }
    else
    {
        echo "Image Upload Failed";
    }
}
else
{
    echo "Please Select Image";
}

mysqli_close($con);

?>