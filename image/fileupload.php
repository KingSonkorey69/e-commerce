<?php

//require the database connection
require_once "../database.php";
include_once "../crud.php";


$target_dir = "../assets/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$image_name =  basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//var_dump($imageFileType);

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //the mage fike does not exist.
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    echo $target_file;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        //
        $db = new Database();
        
        $fileToUpload = $_POST['fileToUpload'];
        $store_title = $_POST['store_title'];
        $store_upload_date = $_POST['store_upload_date'];
        $store_synopsis = $_POST['store_synopsis'];
        $store_price = intval($_POST['store_price']);
       
        
        $sql = 
        "INSERT INTO store_info(store_title, store_upload_date,store_synopsis,store_price,store_image)VALUES('$store_title', '$store_upload_date' ,'$store_synopsis', '$store_price','$image_name')";
        
        if ($db->exec($sql)>0) {
            header('location: ../index.php');
        } else {
            die($db->errorCode());
        }
    } else {

        echo "Sorry, there was an error uploading your file.";
    }
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
    <a href="../assets/images/"></a>
    <a href="../"></a>
</body>
</html>