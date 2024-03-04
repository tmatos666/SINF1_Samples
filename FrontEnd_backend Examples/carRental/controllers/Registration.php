<?php
require_once '../models/Register.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $r = new Register($name, $username, $password);
    
    if($r->getusers()){
        
        if($r->registerUser()){
            header ("Location: ../index.php");
        }else{
            header ("Location: ../views/loginRegister.php");
        }
       
    }else{
        header ("Location: ../views/loginRegister.php?name=$username");
    }
}