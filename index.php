<?php

session_start();
define('__REALPATH__', __DIR__);

$domain = '/handy'; // Pour le prof
define('DOMAIN', $domain);
$uri = str_replace($domain, '', $_SERVER['REQUEST_URI']);
$segments = explode('/', $uri);

require_once __REALPATH__ . '/core/functions.php';

// Uncomment if down to maintenance mode
//maintenance();

$page = get_page($uri, $segments);
require __REALPATH__ . '/views/partials/head.php';
echo $page;
require __REALPATH__ . '/views/partials/footer.php';