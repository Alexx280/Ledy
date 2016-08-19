
<div class="fon-right">
    <img src="png/fon05.png"/>
</div>
<div class="fon-bottom">
    <img src="png/fon01.png"/>
</div>
</div>
<div class="footer">
    <!--&copy; Разработка и поддержка сайта <a href="http://alexeybusygin.ru" style="text-decoration: none; color: #ffffff">Бусыгин Алексей <img src="pic/Contact-16.png"/></a>-->
    &copy; Разработка и поддержка сайта Бусыгин Алексей <img src="pic/Contact-16.png"/> 8-953-920-4705
</div>
<a href="see.php"><div class="see"></div></a>


</body>

<script>

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