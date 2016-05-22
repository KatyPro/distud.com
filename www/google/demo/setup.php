<?php

// Включения

require_once 'includes/google-api-php-client/apiClient.php';
require_once 'includes/google-api-php-client/contrib/apiOauth2Service.php';
require_once 'includes/idiorm.php';
require_once 'includes/relativeTime.php';

// Сессия. Используйте свое имя, если хочется.

session_name('ruseller_demo');
session_start();

// Конфигурация подключения к базе данных с исопльзованием библиотеки IDIORM

$host = '';
$user = '';
$pass = '';
$database = '';

ORM::configure("mysql:host=$host;dbname=$database");
ORM::configure('username', $user);
ORM::configure('password', $pass);

// Используем юникод
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// Google API. Получаем установки на странице https://code.google.com/apis/console/

$redirect_url = ''; // URL вашего сайта
$client_id = 'your-client-id';
$client_secret = 'your-client-secret';
$api_key = 'your-api-key';
