<?php
/*
if (file_exists('vendor/autoload.php')) {
    require_once 'vendor/autoload.php';
} else {
    require_once '../vendor/autoload.php';
}
*/
$loader = include __DIR__ . '/../vendor/autoload.php';
$loader->add('a', __DIR__ . '/../src');
