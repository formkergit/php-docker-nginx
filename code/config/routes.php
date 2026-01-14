<?php
define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT']  . "/code");
define("WEB_ROOT", "/code");


$routes = [
    'home' => 'pages/home.php',
    'connexiondb' => 'pages/connectDb.php' ,
    'phpinfo' => 'pages/phpinfo.php',
    '404' => 'errors/404.php',
    'user' => 'pages/controllers/user.php',
];