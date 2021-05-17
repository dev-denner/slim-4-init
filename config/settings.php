<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
date_default_timezone_set('America/Sao_Paulo');

$settings = [];
$settings['root'] = dirname(__DIR__);
$settings['temp'] = $settings['root'] . '/tmp';
$settings['public'] = $settings['root'] . '/public';
$settings['error'] = [
    'display_error_details' => true,
    'log_errors' => true,
    'log_error_details' => true,
];
$settings['db'] = [
    'driver' => 'mysql',
    'host' => 'remotemysql.com',
    'username' => '4aZuH0UxaP',
    'database' => '4aZuH0UxaP',
    'password' => 'tXgbJUHcRR',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'flags' => [
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => true,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8 COLLATE utf8_unicode_ci',
    ],
];

return $settings;
