<?php
if(isset($_POST['last'])){$last = $_POST['last'];}
if(isset($_POST['name'])){$name = $_POST['name'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['phone'])){$phone = $_POST['phone'];}
if(isset($_POST['message'])){$message = $_POST['message'];}

$address = 'manager15081991@gmail.com';
$sub = "Интернет каталог Yota";
$mes = "Номер товара: $last\n Указал свое имя: $name\n Указал электронный адресс: $email\n Указал телефон: $phone\n Указал адресс доставки: $message";

$verify = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf8\r\nFrom:$email");
if($verify == 'true'){
    echo "<p>Вашь заказ успешно отправлен</br>В ближайшее время с вами свяжутся!</p>";
}else{
    echo "<p>Сообщение не отправлено</p>";
}
