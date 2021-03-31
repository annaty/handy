<?php

// $user = 'root';
// $password = 'root';
// $db = 'handy';
// $host = 'localhost';
// $port = 3306;

// $link = mysqli_init();
// $success = mysqli_real_connect(
//    $link, 
//    $host, 
//    $user, 
//    $password, 
//    $db,
//    $port
// );

// die();
require('core/bootstrap.php');
require('controllers/index.php');


if (Request::uri() !== 'handy') {
    Require Router::load('routes.php')->redirect(Request::uri());
}