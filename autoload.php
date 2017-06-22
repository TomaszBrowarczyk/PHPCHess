<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function __autoload($class_name)
{
    $fileName = $class_name . '.php';
    $fileName = str_replace('\\', '/', $fileName);
    if (is_file($fileName)) {
        include $fileName;
    } else {
        $fileName = substr($fileName, strpos($fileName, '\\') + 1);
        if (is_file($fileName)) {
            include $fileName;
        } else {
            $fileName = substr($fileName, strpos($fileName, '\\') + 1);
            if (is_file($fileName)) {
                include $fileName;
            }
        }
    }
}