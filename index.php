
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
        <div class="top_button tel">8-923-457-15-08
            <div class="phone">
                тел.: 256-296, <br> 8-961-095-6970
            </div>
        </div>

        <div class="top_button top_button_1">Главная</div>
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
    </div>

    <div class="fon">
        <img src="png/fon02.png"/>
    </div>
    <img id="scissors" src="pic/scissors1.png"/>
    <div class="main">
        <img class="face" src="pic/foto2.jpg"/>
        <div class="named">Леди Ди <br>
            <p style=" font-size: 45px; text-align: center">Салон красоты</p>
        </div>
        <!--<div class="named salon">Салон красоты</div>
        <!--<div class="adress">Адрес салона: <br> г. Томск, проспект Фрунзе, 129 <br> тел.: 256-296, 8-961-095-6970 </div>-->
        <div class="time">Мы работаем: <br> Понедельник - Пятница: 9:00 - 21:00 <br> Суббота - Воскресенье: 10:00 - 20:00</div>
        <div class="price">
            <p  style="text-align: center">Услуги:</p>
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
        <script>
            $('.manicure').click(function(){
                $('.price').html('<div class="works">'+
                '<img class="examples" src="pic/examples/Manicure/01.jpg"/>'+
                '<img class="examples" src="pic/examples/Manicure/02.jpg"/>'+
                '<img class="examples" src="pic/examples/Manicure/03.jpg"/>'+
                '<img class="examples" src="pic/examples/Manicure/04.jpg"/>'+
                '<img class="examples" src="pic/examples/Manicure/05.jpg"/>'+
                '<img class="examples" src="pic/examples/Manicure/06.jpg"/>'+
                '</div>');
                $('body,html').animate({scrollTop: 500},1200); return false;
            });
            $('.makeup').click(function(){
                $('.price').html('<div class="works">'+
                '<img class="examples" src="pic/examples/Makeup/07.jpg"/>'+
                '<img class="examples" src="pic/examples/Makeup/02.jpg"/>'+
                '<img class="examples" src="pic/examples/Makeup/03.jpg"/>'+
                '<img class="examples" src="pic/examples/Makeup/04.jpg"/>'+
                '<img class="examples" src="pic/examples/Makeup/05.jpg"/>'+
                '<img class="examples" src="pic/examples/Makeup/06.jpg"/>'+
                '</div>');
                $('body,html').animate({scrollTop: 500},1200); return false;
            });
            $('.hairstyles').click(function(){
                $('.price').html('<div class="works" style="height: 800px;">'+
                '<img class="examples" src="pic/examples/Hairstyles/01.jpg"/>'+
                '<img class="examples" src="pic/examples/Hairstyles/02.jpg"/>'+
                '<img class="examples" src="pic/examples/Hairstyles/03.jpg"/>'+
                '<img class="examples" src="pic/examples/Hairstyles/04.jpg"/>'+
                '<img class="examples" src="pic/examples/Hairstyles/05.jpg"/>'+
                '<img class="examples" src="pic/examples/Hairstyles/06.jpg"/>'+
                '<img class="examples" src="pic/examples/Hairstyles/07.jpg"/>'+
                '<img class="examples" src="pic/examples/Hairstyles/08.jpg"/>'+
                '<img class="examples" src="pic/examples/Hairstyles/09.jpg"/>'+
                '<img class="examples" src="pic/examples/Hairstyles/10.jpg"/>'+
                '<img class="examples" src="pic/examples/Hairstyles/11.jpg"/>'+
                '</div>');
                $('body,html').animate({scrollTop: 500},1200); return false;
            });
            $('.top_button_2').click(function(){
                $('.price').html("<p style='text-align: center'>Услуги:</p> " +
                "<ul>"+
                "<li>Стрижка женская от 350 руб.</li>"+
                "<li>Стрижка мужская от 150 руб.</li>"+
                "<li>Стрижка детская от 150 руб.</li>"+
                "<li>Химическая завивка волос от 1000 руб.</li>"+
                "<li>Визаж от 800 руб.</li>"+
                "<li>Хаэрс тату от 400 руб.</li>"+
                "<li>Лечение волос от 800 руб</li>"+
                "<li>Оформление и покраска бровей от 150 руб.</li>"+
                "<li>Маникюр от 300руб.</li>"+
                "<li>Педикюр от 1000 руб.</li>"+
                "<li></li>"+
                "</ul>");
                $('body,html').animate({scrollTop: 500},1200); return false;
            });
            $('.top_button_5').click(function(){
                $('.price').html('<div class="works">'+
                '<img style="height: 450px; border-radius: 10px" src="pic/examples/master1.jpg"/>'+
                '<div class="me"> Я владею салоном красоты с 2014 года. </div>'+
                '</div>'+
                '');
                $('body,html').animate({scrollTop: 500},1200); return false;
            });

        </script>


        <div class="fon-right">
            <img src="png/fon05.png"/>
        </div>
        <div class="fon-bottom">
            <img src="png/fon01.png"/>
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
        $('body,html').animate({scrollTop: 0},800); return false;
    });
    $('.glav').click(function(){
        $('body,html').animate({scrollTop: 0},800); return false;
    });
    $('.top_button_3').click(function(){
        $('body,html').animate({scrollTop: 900},800); return false;
    });
    /*$('.manicure').click(function(){
        window.open("works.php", '_self');
    });
    $('.button-close').click(function(){
        $('.discount').removeClass('vision');
    });*/

    var scissors = document.getElementById('scissors');
        function getCoords(elem) { // кроме IE8-
            var box = elem.getBoundingClientRect();

            return {
                top: box.top + pageYOffset,
                left: box.left + pageXOffset
            };

        }
    scissors.onmousedown =(function (e) {
        var coords = getCoords(scissors);
        var shiftX = e.pageX - coords.left;
        var shiftY = e.pageY - coords.top;

        document.body.appendChild(scissors);
        moveAt(e);
        function moveAt(e) {
            scissors.style.left = e.pageX - shiftX + 'px';
            scissors.style.top = e.pageY - shiftY + 'px';
        }
        document.onmousemove = function (e) {
            moveAt(e);
        }
        scissors.onmouseup = function () {
            document.onmousemove = null;
            scissors.onmouseup = null;
        }
        scissors.ondragstart = function () {
            return false;
        }
    });

</script>
</html>