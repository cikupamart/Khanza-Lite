<?php
header('Content-Type:text/html;charset=utf-8');

define('BASE_DIR', __DIR__);
require_once('config.php');

if (DEV_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
}

require_once('systems/lib/Autoloader.php');

// Site core init
$core = new Systems\Site;

ob_end_flush();
