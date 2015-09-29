<?php
//ПОЛУЧЕНИЕ ТОВАРОВ ДЛЯ КОМПЬЮТЕРА
function comp_All()
{
    $query = "SELECT * FROM comp ORDER BY price";
    $res = mysql_query($query);
    //МАССИВ ТОВАРОВ КОМПЬЮТЕР
    $computer = array();
    while($row = mysql_fetch_assoc($res)){
        $computer[] = $row;
    }
        return $computer;
    //МАССИВ ТОВАРОВ КОМПЬЮТЕР
}
//ПОЛУЧЕНИЕ ТОВАРОВ ДЛЯ КОМПЬЮТЕРА

//ПОЛУЧЕНИЕ ТОВАРОВ ДЛЯ СМАРТФОНА
function smart_All()
{
    $query = "SELECT * FROM smartfon";
    $res = mysql_query($query);
    //МАССИВ ТОВАРОВ СМАРТФОНА
    $smartfon = array();
    while($row = mysql_fetch_assoc($res)){
        $smartfon[] = $row;
    }
    return $smartfon;
    //МАССИВ ТОВАРОВ СМАРТФОНА
}
//ПОЛУЧЕНИЕ ТОВАРОВ ДЛЯ СМАРТФОНА

//ПОЛУЧЕНИЕ ТОВАРОВ ДЛЯ ПЛАНШЕТА
function plan_All()
{
    $query = "SELECT * FROM planshet";
    $res = mysql_query($query);
    //МАСИС ТОВРОВ ДЛЯ ПЛАНШЕТА
    $planshet = array();
    while($row = mysql_fetch_assoc($res)){
        $planshet[] = $row;
    }
    return $planshet;
    //МАСИС ТОВРОВ ДЛЯ ПЛАНШЕТА
}
//ПОЛУЧЕНИЕ ТОВАРОВ ДЛЯ ПЛАНШЕТА

