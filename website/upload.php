<?php
if(!empty($_FILES)){
    $targetDir = "./images/gallery/";
    $fileName = $_FILES['file']['name'];
    $targetFilePath = $targetDir.$fileName;

    if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
        //...perform other functions
    }
}
?>