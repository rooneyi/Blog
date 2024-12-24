<?php

require "functions.php";

function routesToController($uri, $routes){

    if(array_key_exists($uri, $routes)){

        require "controllers/".$routes[$uri];

    } else {

        require abort();
    }
}

$routes = require "routes.php";


// *creation d'un parse url pour faciliter la correspondance des routes 
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
routesToController($uri, $routes);

