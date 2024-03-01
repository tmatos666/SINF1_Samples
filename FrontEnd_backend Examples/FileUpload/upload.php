<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$target_dir = getcwd() . "\\uploads\\";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
//echo $target_dir."<br>";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//echo "File is an image - " . $target_file . '<br>';
//echo is_writable($target_dir);
//echo '<br>';
//echo $_FILES["foto"]["tmp_name"] . '<br>';

if ($_FILES["foto"]["error"] > 0) {
    echo "Error: " . $_FILES["foto"]["error"] . "<br />";
} else {
//    echo "Upload: " . $_FILES["foto"]["name"] . "<br />";
//    echo "Type: " . $_FILES["foto"]["type"] . "<br />";
//    echo "Size: " . ($_FILES["foto"]["size"] / 1024) . " Kb<br />";
//    echo "Stored in: " . $_FILES["foto"]["tmp_name"];
    
    
    move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$_FILES["foto"]["name"]);

    header("Location: http://localhost/fileUpload");
    die();
}

