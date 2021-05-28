<?php
define("ROOT", dirname(__DIR__));
define('IMG_SMALL', $_SERVER['DOCUMENT_ROOT'] . '/img/small/');
define('IMG_BIG', $_SERVER['DOCUMENT_ROOT'] . '/img/big/');
define('TEMPLATES_DIR', ROOT . '/templates/');
define('LAYOUTS_DIR', 'layouts/');

// DB config
define('HOST','localhost:3306');
define('USER','root');
define('PASS','Not.8fat');
define('DB','shop_SM');

include ROOT . "/engine/db.php";
include ROOT . "/engine/function.php";
include ROOT . "/engine/news.php"; 
include ROOT . "/engine/catalog.php"; 
include ROOT . "/engine/log.php"; 
include ROOT . "/engine/gallery.php";
include ROOT . "/engine/classSimpleImage.php";