<?php
    $target_dir = "uploads/";
    
    $newURL = $_POST["name"];
    $newURL = preg_replace('/\s+/', '', $newURL);
    
    $helloworld = $newURL . ".mp4";
    $target_file = $target_dir . basename($helloworld);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    echo "Uploading... Please wait.";
    //if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "File uploaded succesfully";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    //} else {
    //    echo "\n An Unknown Error has occurred.";
    //}
    echo "\n";
    echo "Here is the link to your video: ";
    echo "https://localhost/watch.html?video=";
    echo $newURL;
?>
