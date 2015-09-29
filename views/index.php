<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Рекомендуем | YOTA магазин в Томске,Северски Yota интернет 4G в Томске,Северске Yota роутер в Томске,Северске Yota модем в Томске,Северсе Беспроводной интернет Yota в Томске,Северске">
    <meta name="description" content="Рекомендуем | YOTA магазин в Томске,Северски Yota интернет 4G в Томске,Северске Yota роутер в Томске,Северске Yota модем в Томске,Северсе Беспроводной интернет Yota в Томске,Северске">
    <title>Интернет каталог Yota |  подключение к мобильному, безлимитному интернету 4G в Томской области</title>
    <link rel="stylesheet" type="text/css" href="<?=TEMPLATE?>style.css">
    <body>
<div class="main">
    <div class="header"></div>
    <ul class="menu">
        <li class="active"><a href="index.php">ДЛЯ КОМПЬЮТЕРА</a></li>
        <li class="active"><a href="planshet.php">ДЛЯ ПЛАНШЕТА</a></li>
        <li class="active"><a href="smartfon.php">ДЛЯ СМАРТФОНА</a></li>
        <li class="active"><a href="zakaz.php">ЗАКАЗАТЬ ТОВАР</a></li>
    </ul>
    <div class="catalog-index">
        <h1>ТОВАРЫ ДЛЯ КОМПЬЮТЕРА</h1>
        <?php foreach($computer as $computers):?>
            <div class="product-index">
                <h2><?=$computers['name']?></h2>
                <img src="<?=TEMPLATE?>img/<?=$computers['img']?>" />
                <div class="articul">
                    <p>АРТИКУЛ: <?=$computers['articul']?></p>
                </div>
                <div class="price">
                    <p>ЦЕНА: <?=$computers['price']?> Рублей</p>
                </div>
            </div>
        <?php endforeach;?>


        <div class="footer">
            Интернет каталог Yota |  подключение к мобильному, безлимитному интернету 4G в Томской области

        </div>

    </div>
</div>

</body>
</head>
</html>