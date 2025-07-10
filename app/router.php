<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'.$dir.'' => 'views/index.view.php',
    '/'.$dir.'verify' => 'views/verify-login.php',
    '/'.$dir.'student-record' => 'views/student-record.view.php',
    '/'.$dir.'student-record-table' => 'views/student-record-table.view.php',
    '/'.$dir.'student-profile' => 'views/student-profile.view.php',
    '/'.$dir.'student-attendance' => 'views/student-attendance.view.php',
    '/'.$dir.'student-take-fees' => 'views/student-take-fees.view.php',
];

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
}else{
    http_response_code(404);
    require 'views/404.php';
    die();
}