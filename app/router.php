<?php


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'.$dir.'' => 'controllers/index.php',
    '/'.$dir.'student-record' => 'controllers/student-record.php',
    '/'.$dir.'student-phone-book' => 'controllers/student-phone-book.php',
];

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
}else{
    http_response_code(404);
    require 'views/404.php';
    die();
}