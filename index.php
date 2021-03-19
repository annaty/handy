<?php

$user = 'root';
$password = 'root';
$db = 'handy';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

require 'core/bootstrap.php';
require 'controllers/index.php';

require Router::load('routes.php')
    ->direct(Request::uri());