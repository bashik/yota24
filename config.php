<?php
//НАСТРОЙКА БД
//КОНСТАНТА ХОСТ
define('HOST','localhost');
//КОНСТАНТА ИМЯ ПОЛЬЗОВАТЕЛЯ
define('USER','root');
//КОНСТАНТА ПАРОЛЬ
define('PASSWORD','');
//КОНСТАНТА ДБ
define('DB','yota24');

define('TEMPLATE','views/');
//ПОДКЛЮЧЕНИЕ К БД
mysql_connect(HOST,USER,PASSWORD);
mysql_select_db(DB);