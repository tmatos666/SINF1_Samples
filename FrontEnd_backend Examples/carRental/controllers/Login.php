<?php
require_once '../models/Register.php';
session_start();
#login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $r = new Register("", $username, $password);

    if ($r->login()) {
        
        unset($_SESSION["username"]);
        $_SESSION["username"] = $username;
        header("Location: ../index.php");
    } else {
        #echo 'invalid password';
        header("Location: ../views/loginRegister.php?invalidPassword=Yes");
    }
}else{
    #logout
    unset($_SESSION["username"]);
    session_destroy();
    header("Location: ../index.php");
}
