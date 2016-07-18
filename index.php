<?php
/**
 * Created by PhpStorm.
 * User: busygin
 * Date: 29.06.2016
 * Time: 15:20
 */?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Леди Ди</title>
    <script src="jquery.js"></script>
    <link rel='stylesheet' type='text/css' href='style.css'/>
    <link rel="shortcut icon" href="png/Scissors1.png" type="image/png">
    <link href='http://fonts.googleapis.com/css?family=Lobster&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="head">
        <div class="top_button tel">8-923-420-15-08
            <div class="phone">
                тел.: 256-296, <br> 8-961-095-6970
            </div>
        </div>

        <div class="top_button top_button_1">Главная</div>
        <div class="top_button top_button_2">Услуги</div>
        <div class="top_button top_button_3">Адрес</div>
        <div class="top_button top_button_4">Наши работы</div>
        <div class="top_button top_button_5">О Нас</div>
    </div>

    <div class="fon">
        <img src="png/fon02.png"/>
    </div>
    <div class="main">
        <img src="pic/foto2.jpg"/>
        <div class="named">Леди Ди</div>
        <div class="named salon">Салон красоты</div>
        <!--<div class="adress">Адрес салона: <br> г. Томск, проспект Фрунзе, 129 <br> тел.: 256-296, 8-961-095-6970 </div>-->
        <div class="time">Мы работаем: <br> Понедельник - Пятница: 9:00 - 21:00 <br> Суббота - Воскресенье: 10:00 - 20:00</div>
        <div class="price">
            <p style="text-align: center">Услуги:</p>
            <ul>
                <li>Стрижка женская от 350 руб.</li>
                <li>Стрижка мужская от 150 руб.</li>
                <li>Стрижка детская от 150 руб.</li>
                <li>Химическая завивка волос от 1000 руб.</li>
                <li>Визаж от 800 руб.</li>
                <li>Хаэрс тату от 400 руб.</li>
                <li>Лечение волос от 800 руб</li>
                <li>Оформление и покраска бровей от 150 руб.</li>
                <li>Маникюр от 300руб.</li>
                <li>Педикюр от 1000 руб.</li>
                <li></li>
            </ul>
        </div>
        <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=DyJCZRn5MeAN_ZM1e1HeJX96G79l31CK&width=615&height=388&lang=ru_RU&sourceType=constructor&scroll=true"></script>
            <div class="adress">Адрес салона: г. Томск, проспект Фрунзе, 129 <br> тел.: 256-296, 8-961-095-6970 </div>
        </div>
    </div>
    <div class="footer">
        &copy; Разработка и поддержка сайта <a href="http://alexeybusygin.ru" style="text-decoration: none; color: #ffffff">Бусыгин Алексей <img src="pic/Contact-16.png"/></a>
    </div>

</body>
<footer>
    <div>

    </div>
</footer>
<script>
    $('.top_button_1').click(function(){
        $('body,html').animate({scrollTop: 0},800); return false;
    });
    $('.glav').click(function(){
        $('body,html').animate({scrollTop: 0},800); return false;
    });
    $('.top_button_3').click(function(){
        $('body,html').animate({scrollTop: 900},800); return false;
    });
    $('.price').click(function(){
        $('body,html').animate({scrollTop: 8500},1500); return false;
    });
    $('.button-close').click(function(){
        $('.discount').removeClass('vision');
    });
</script>
</html>