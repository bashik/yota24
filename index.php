<?php
//ПОДКЛЮЧЕНИЕ ФАЙЛА КОНФИГУРАЦИИ
require_once 'config.php';
//ПОДКЛЮЧЕНИЕ ФАЙЛА МОДЕЛЬ
require_once 'model.php';
//ВЫЗОВ ФУНКЦИИ ПОЛУЧЕНИЕ ТОВАРОВ ДЛЯ КОМПЬЮТЕРА
$computer = comp_All();
//ПОДКЛЮЧЕНИЕ ФАЙЛА ВИОВ

require_once 'views/index.php';



// ПОДКЛЮЧЕНИЕ СТИЛЕЙ
require_once TEMPLATE . "index.php";
