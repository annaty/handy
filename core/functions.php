<?php

if (!function_exists('connexion')) {

    function connexion()
    {
        $host = 'localhost';             //myHostAddress
        $dbuser = 'root';     //myUserName
        $dbpw = '';     //myPassword
        $dbname = 'handy';     //myDatabase

        $pdoReqArg1 = "mysql:host=". $host .";dbname=". $dbname .";";
        $pdoReqArg2 = $dbuser;
        $pdoReqArg3 = $dbpw;

        try {

            $db = new \PDO($pdoReqArg1, $pdoReqArg2, $pdoReqArg3);
            $db->setAttribute(\PDO::ATTR_CASE, \PDO::CASE_LOWER);
            $db->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
            $db->exec("SET NAMES 'utf8'");

            return $db;

        } catch(\PDOException $e) {

            $errorMessage = $e->getMessage();
            echo $errorMessage;
        }
    }
}

if (!function_exists('get_page')) {

    function get_page($uri, $segments)
    {
        $content = '';
        if (!isset($segments[2])) {

            switch ($uri) {

                case '/':
                    ob_start();
                    include __REALPATH__ . '/views/index.view.php';
                    $content = ob_get_clean();
                    break;

                case '/discover':
                    ob_start();
                    include __REALPATH__ . '/views/discover.view.php';
                    $content = ob_get_clean();
                    break;

                case '/join':
                    ob_start();
                    include __REALPATH__ . '/views/join.view.php';
                    $content = ob_get_clean();
                    break;

                case '/connect':
                    ob_start();
                    include __REALPATH__ . '/views/connect.view.php';
                    $content = ob_get_clean();
                    break;

                case '/rgpd':
                    ob_start();
                    include __REALPATH__ . '/includes/rgpd.php';
                    $content = ob_get_clean();
                    break;

                case '/cgu':
                    ob_start();
                    include __REALPATH__ . '/includes/cgu.php';
                    $content = ob_get_clean();
                    break;

                case '/login':
                    define('ADMIN', true);
                    ob_start();
                    include __REALPATH__ . '/includes/admin/login.php';
                    $content = ob_get_clean();
                    break;

                case '/admin':
                    define('ADMIN', true);
                    ob_start();
                    include __REALPATH__ . '/includes/admin/admin.php';
                    $content = ob_get_clean();
                    break;

                default:
                    define('ERROR_404', true);
                    ob_start();
                    include __REALPATH__ . '/views/404.view.php';
                    $content = ob_get_clean();
                    http_response_code(404);
                    break;
            }

        }  
        return $content;
    }
}

if (!function_exists('maintenance')) {

    function maintenance()
    {
        $ip = [
            ''
        ];

        if ((isset($_SERVER['HTTP_X_FORWARDED_FOR']) && in_array($_SERVER['HTTP_X_FORWARDED_FOR'], $ip))
            || (isset($_SERVER['REMOTE_ADDR']) && in_array($_SERVER['REMOTE_ADDR'], $ip))) {

            return true;

        } else {

            define('MAINTENANCE', true);
            require __REALPATH__ . '/includes/common/head.php';
            require __REALPATH__ . '/includes/maintenance.view.php';
            require __REALPATH__ . '/includes/common/footer.php';
            exit();
        }
    }
}


