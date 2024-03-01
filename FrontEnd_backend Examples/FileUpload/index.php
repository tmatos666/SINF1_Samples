<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php
require 'phpFunctions.php';
?> 

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/file.css">
    </head>
    <body>
        <?php
        #echo 'Olá';
        ?>
        <div class="container">
            <h2>Formulário de Inserção</h2>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data" required>
                </div>
                <div class="form-group">
                    <label for="valor">Valor Monetário:</label>
                    <input type="number" id="valor" name="valor" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto:</label>
                    <input type="file" id="foto" name="foto" accept="image/*" required>
                </div>
                <button value="Send File" type="submit">Enviar</button>
            </form>
        </div>

        <?PHP
        // fetch image details
        $images = getImages("uploads");
        // display on page
        foreach ($images as $img) {
            $img = substr($img, -39);
            echo "<img class=\"photo\" src=\"uploads{$img}\" alt=\"testing\">";
        }
        ?>
    </body>
</html>
