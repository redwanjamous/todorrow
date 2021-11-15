<?php
//Website name
define('WEBSITE_NAME', 'Todorrow');

//Database constants
define('DB_NAME', 'heroku_2f4a37b1c07fda1');
define('DB_USER', 'bf40816a64e88a');
define('DB_PASSWORD', '835a0573');
define('DB_HOST', 'us-cdbr-east-04.cleardb.com');
define('DB_TYPE', 'mysql');

//Set DSN
define('DSN', DB_TYPE .':host=' . DB_HOST . ';dbname=' . DB_NAME);

//PDO Attributes
define('PDO_ATTRS', array(
    PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES      => false,
    PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION
));

//Set protocol (http/https)
define('PROTOCOL','http');

//Root and Assets paths
$path = str_replace("\\", "/",PROTOCOL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("app/core", "public", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));

//Cookie constants
define('COOKIE_NAME', 'auth');
define('COOKIE_EXPIRY', time() + 60 * 60 * 24 * 7);
define('COOKIE_PATH', '/todolist/public');

//Session
define('SESSION_NAME', 'user');

//Salt for token
define('SALT', 'BrL2RkRf');

// Error reporting (0 to turn it off) (-1 to turn it on)
error_reporting(0);
