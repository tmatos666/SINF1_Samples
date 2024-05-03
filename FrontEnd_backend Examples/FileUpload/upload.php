<?php

if (count($_FILES["foto"]["name"]) == 0) {
    echo "Error: " . $_FILES["foto"]["error"] . "<br />";
} else {

    $target_dir = getcwd() . "\\uploads\\";

    for ($i = 0; $i < count($_FILES["foto"]["name"]); $i++) {

        $target_file = $target_dir . basename($_FILES["foto"]["name"][$i]);

        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        move_uploaded_file($_FILES['foto']['tmp_name'][$i], $target_dir . $_FILES["foto"]["name"][$i]);
    }
    header("Location: http://localhost/fileUpload");
}

