<?php
/**
 * Created by PhpStorm.
 * User: busygin
 * Date: 18.07.2016
 * Time: 15:25
 */
?>
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
<div class="main works">
    <img class="examples" src="pic/examples/Manicure/01.jpg"/>
    <img class="examples" src="pic/examples/Manicure/02.jpg"/>
    <img class="examples" src="pic/examples/Manicure/03.jpg"/>
    <img class="examples" src="pic/examples/Manicure/04.jpg"/>
    <img class="examples" src="pic/examples/Manicure/05.jpg"/>
    <img class="examples" src="pic/examples/Manicure/06.jpg"/>


</div>
<div class="footer">
    &copy; Разработка и поддержка сайта <a href="http://alexeybusygin.ru" style="text-decoration: none; color: #ffffff">Бусыгин Алексей <img src="pic/Contact-16.png"/></a>
</div>

<!--

-->
</body>

<script>
    $('.top_button_1').click(function(){
        window.open("index.php", '_self');
    });
    $('.glav').click(function(){
        $('body,html').animate({scrollTop: 0},800); return false;
    });
    $('.top_button_3').click(function(){
        /*window.open("index.php", '_self');*/
        var newWin = window.open("index.php", '_self');
        newWin.ready(function(){document.window.$('body,html').animate({scrollTop: 900},800);});
        newWin.ready(function(){document.window.scrollBy(100,100)});
        setTimeout(newWin.document.window.scrollBy(100,100),2000);
        setTimeout(newWin.document.window.animate({scrollTop: 900},800),2000);
        $("document").ready(function(){});

        /*$('body,html').animate({scrollTop: 900},800); return false;*/
    });
    $('.top_button_4').click(function(){
        $('body,html').animate({scrollTop: 0},800); return false;
    });
    $('.button-close').click(function(){
        $('.discount').removeClass('vision');
    });
</script>
</html>