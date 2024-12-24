<?php

function dd($value){
    echo "<pre>"; 
        var_dump($value);
    echo "</pre>";
    die();
}

function abort(){
    http_response_code(404);
    require "views/404.view.php";
    die();
}

function isUrl($uri){
    return $_SERVER['REQUEST_URI'] === $uri;
}