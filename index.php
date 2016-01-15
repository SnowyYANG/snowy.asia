<?php

if ($q = $_GET['q']) {
    $q = explode('/', $q);
    switch ($q[1]) {
        case 'diary':
            //$router = 'diary';
            break;
        case 'rfwiki':
            $_GET['q'] = substr($_GET['q'], 7);
            $_REQUEST['q'] = substr($_REQUEST['q'], 7);
            require_once 'rfwiki/index.php';
            exit(0);
    }
}

require_once 'private/data.php';
$mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

date_default_timezone_set('Asia/Hong_Kong');
$time = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
$uri = mysqli_real_escape_string($mysqli, $_SERVER['REQUEST_URI']);
$referer = mysqli_real_escape_string($mysqli, $_SERVER['HTTP_REFERER']);
$ip = mysqli_real_escape_string($mysqli, $_SERVER['REMOTE_ADDR']);
$browser = mysqli_real_escape_string($mysqli, $_SERVER['HTTP_USER_AGENT']);
mysqli_query($mysqli, "INSERT requests (time, uri, referer, ip, browser) VALUES ('$time', '$uri', '$referer', '$ip', '$browser')", MYSQLI_USE_RESULT);

if (!isset($router)) $router = 'homepage';

require 'private/'.$router.'.php';

mysqli_close($mysqli);
?>
<!DOCTYPE html>
<!--
by Snowy YANG
for http://snowy.asia/
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?> - 少女❤工房</title>
        <style>
body{
    margin: 0;
    padding: 0;
    font: 16px Microsoft YaHei
}
        </style>
    </head>
    <body>
        <?php require 'private/'.$router.'_view.php'; ?>
    </body>
</html>