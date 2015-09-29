<?php
//ПОДКЛЮЧЕНИЕ ФАЙЛА КОНФИГУРАЦИИ
require_once 'config.php';
//ПОДКЛЮЧЕНИЕ ФАЙЛА МОДЕЛЬ
require_once 'model.php';
//ПОЛУЧЕНИЕ ТОВАРО ДЛЯ СМАРТФОНА
$smartfon = smart_All();
//ПОДКЛЮЧЕНИЕ ФАЙЛА ВИОВ
require_once 'views/smartfon.php';



// ПОДКЛЮЧЕНИЕ СТИЛЕЙ
require_once TEMPLATE . "smartfon.php";