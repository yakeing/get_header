<?php
if (file_exists( __DIR__ . '/vendor/autoload.php')) {
    $dir =  __DIR__ ;
} else {
    $dir =  __DIR__ '/..';
}
$loader = require_once $dir. '/vendor/autoload.php';
$loader->add('get_header', $dir . '/src');
