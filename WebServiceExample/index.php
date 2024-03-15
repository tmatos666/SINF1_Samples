<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "API Call<br>";
        $apiUrl = "https://e-redes.opendatasoft.com/api/explore/v2.1/catalog/datasets/network-scheduling-work/records?limit=20";

        $json = file_get_contents($apiUrl);
        //echo ($json);
        $data = json_decode($json, true);
        echo ($data["total_count"])."<br>";
        print_r($data["results"]);
        ?>
    </body>
</html>
