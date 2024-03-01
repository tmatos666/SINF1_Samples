<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function getImages($dir)
  {
    // full server path to directory
    $fulldir = getcwd()."\\".$dir;
    //echo $fulldir;die;
    $files = glob($fulldir."\\*");
    
    return $files;
  }