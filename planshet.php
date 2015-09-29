<?php
//ПОДКЛЮЧЕНИЕ ФАЙЛА КОНФИГУРАЦИИ
require_once 'config.php';
//ПОДКЛЮЧЕНИЕ ФАЙЛА МОДЕЛЬ
require_once 'model.php';
//ВЫЗОВ ФУНКЦИИ ПОЛУЧЕНИЕ ТОВАРОВ ДЛЯ ПЛАНШЕТА
$planshet = plan_All();
//ПОДКЛЮЧЕНИЕ ФАЙЛА ВИОВ
require_once 'views/planshet.php';



// ПОДКЛЮЧЕНИЕ СТИЛЕЙ
require_once TEMPLATE . "planshet.php";