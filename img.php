<?php
require_once('database.php');
include_once "crud.php";
$crud = new Crud();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./assets/css/image.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@500&family=Roboto+Condensed:wght@300&family=Roboto+Serif:wght@500&display=swap"
        rel="stylesheet"> 

</head>


<body>
    
    <div class="content">
        <h1>ARFLAIR Crud Operations.</h1>
    </div>
<a href="./image/fileupload.php"></a>
<section class="insert">
    <form class="box" action="./image/fileupload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="store_title" id="store_title" placeholder="Store Title">
        <label>Select image:<input type="file" name="fileToUpload" id="fileToUpload"></label>
         <input type="date" name="store_upload_date" id="store_upload_date" placeholder="Store Upload Date">
        <input type="text" name="store_synopsis" id="store_synopsis" placeholder="Store Synopsis">
        <input type="text" name="store_price" id="store_price" placeholder="Store Price">
        <input type="submit" value="Upload Data" name="submit">

    </form>
    </section>
    <section class="details">
    <table class="content-table">
        <thead>
            <tr>
                <th>Store Image</th>
                <th>Store Title</th>
                <th>Store Upload date</th>
                <th>Store Synopsis </th>
                <th>Store Price</th>
                <th>Update</th>
                <th>Delete</th>

            </tr>
        </thead>
<a href="./assets/images/"></a>
        <?php foreach ($crud->getImages('store_info') as $key) : ?>

            <tbody >
                <tr>
                    <td class="kikuyu">
                        <img src="./assets/images/<?php echo $key['store_image']; ?>" /> <br>
                    </td>
                
                    <td>
                        <h4 class="crud"><?php echo $key['store_title']; ?></h4>
                    </td>
                    <td>
                        <h4 class="crud"><?php echo $key['store_upload_date']; ?></h4>
                    </td>
                    <td>
                        <h4 class="crud"><?php echo $key['store_synopsis']; ?></h4>
                    </td>

                    <td>
                        <h4 class="crud"><?php echo $key['store_price']; ?></h4>
                    </td>
                </tr>
            </tbody>
            </section>
            <tr>
            
                <form action="./image/img_update.php" method="post">
                <!-- <td><label>Select image:<input type="file" name="fileToUpload" id="fileToUpload"></label></td> -->
                <td><input type="text" name="store_title" id="store_title" placeholder="Store Title"></td>
                <td><input type="date" name="store_upload_date" id="store_upload_date" placeholder="Store Upload Date"></td>
                <td><input type="text" name="store_synopsis" id="store_synopsis" placeholder="Store Synopsis"></td>
                <td><input type="text" name="store_price" id="store_price" placeholder="Store Price"></td>
                <td><input type="text" name="update" id="update" hidden value="<?php echo $key['store_info'] ?>"></td>
                <td> <input type="submit" class="update" value="update" /></td>


                </form> 

                <form action="./image/img_delete.php" method="post">

                    <input type="text" name="delete" name="delete " id="delete" hidden value="<?php echo $key['store_info'] ?>">

                    <td><input type="submit" class="delete" value="delete" /></td>
                </form>
            </tr>
        <?php endforeach; ?>


</body>

</html>