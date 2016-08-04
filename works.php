
<!DOCTYPE HTML>
<html>
<head>
    <title>Леди Ди</title>
    <script src="jquery.js"></script>
    <link rel='stylesheet' type='text/css' href='style.css'/>
    <link rel="shortcut icon" href="png/Scissors1.png" type="image/png">
    <link href='http://fonts.googleapis.com/css?family=Lobster&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link rel='stylesheet/less' type='text/css' href='learn-less.less'/>
    <script src="less.js"></script>
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
    <div class="about_me" style="position: relative">
            <img class="certificat" src="pic/examples/Certificate/g01.jpg"/>
            <img class="certificat" src="pic/examples/Certificate/g02.jpg"/>
            <img class="certificat" src="pic/examples/Certificate/g03.jpg"/>
            <img class="certificat" src="pic/examples/Certificate/g04.jpg"/>
            <img class="certificat" src="pic/examples/Certificate/g05.jpg"/>
            <img class="certificat" src="pic/examples/Certificate/g06.jpg"/>
            <img class="certificat" src="pic/examples/Certificate/g07.jpg"/>
            <img class="certificat" src="pic/examples/Certificate/g08.jpg"/>
            <img class="certificat" src="pic/examples/Certificate/v01.jpg"/>
            <img class="certificat" src="pic/examples/Certificate/v02.jpg"/>
            <img class="certificat" src="pic/examples/Certificate/v03.jpg"/>
        </div>

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
        /* newWin.onload(function(){newWin.ready(function(){newWin.scrollBy(500,500)})});
        newWin.onload(function(){newWin.ready(function(){$('body,html').animate({scrollTop: 500},800); return false;})});
       newWin.ready(function(){newWin.scrollBy(500,500)});
        newWin.onload(function(){newWin.$('body,html').animate({scrollTop: 500},800); return false;});
        newWin.ready(function(){$('body,html').animate({scrollTop: 500},800); return false;});*/



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