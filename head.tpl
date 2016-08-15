
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
    <div class="top_button tel">тел.: 256-296
        <div class="phone"> 8-961-095-6970</div>
    </div>
    <div class="top_button top_button_0">Главная</div>
    <div class="top_button top_button_1">Акции</div>
    <div class="top_button top_button_2">Услуги</div>
    <div class="top_button top_button_3">Адрес</div>
    <div class="top_button top_button_4">Наши работы
        <div class="our_work">
            <div class="we_do hairstyles">Причёски</div>
            <div class="we_do makeup">Макияж</div>
            <div class="we_do manicure">Маникюр</div>
        </div>
    </div>
    <div class="top_button top_button_5">О Нас</div>
    <div class="top_button top_button_6">Отзывы</div>
</div>

<div class="fon">
    <img src="png/fon02.png"/>
</div>
<script>
    $('.top_button_0').click(function(){
        window.open("index.php", '_self');
    });
    $('.top_button_1').click(function(){
        window.open("action.php", '_self');
    });
    $('.top_button_2').click(function(){
        window.open("service.php", '_self');
    });
    $('.top_button_3').click(function(){
        window.open("adress.php", '_self');
    });
    $('.hairstyles').click(function(){
        window.open("hairstyles.php", '_self');
    });
    $('.makeup').click(function(){
        window.open("makeup.php", '_self');
    });
    $('.manicure').click(function(){
        window.open("manicure.php", '_self');
    });
    $('.top_button_5').click(function(){
        window.open("about.php", '_self');
    });
    $('.top_button_6').click(function(){
        window.open("say.php", '_self');
    });

</script>
<img id="scissors" src="pic/Scissors1.png"/>
<div class="main">