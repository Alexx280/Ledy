<?php
include_once ('head.tpl');

function podkl($config){
    $pod =new mysqli($config["database"]["host"], $config["database"]["username"], $config["database"]["password"],$config["database"]["name"]);
    $pod->query("SET NAMES utf8");
    return $pod;
}

function connect(){
    $config = parse_ini_file('config/config.ini', true);
    $link =podkl($config);
    return $link;}

if ($_POST['myname']){
    $link=connect();
    $login= "INSERT INTO `say` (`name`, `e-mail`, `date`, `text`) VALUES ('".$_POST['myname']."', '".$_POST['mymail']."', '".date('y-m-d')."', '".$_POST['mytext2']."');";
    $res = $link->query($login);
}
else {}
//$row = $res->fetch_assoc();
?>
    <style type="text/css">
        table {
            border-collapse: collapse; /* Убираем двойные линии между ячейками */
            color: white;
            font-weight: bold;
        }

        th {
            background: saddlebrown;
        }
        tr:nth-child(n) {
            background: rosybrown; /* Цвет фона */
        }
        tr:nth-child(2n) {
            background: darkgoldenrod; /* Цвет фона */
        }

    </style>
    <div style="position: relative; width: 400px; margin: 10px auto; margin-top: 100px">
    <!--<form name="ask" method="post" action="#">
        <b>Дата</b><br>
        <input type="text" size="40" name="mydate">
        <input type="submit" value="Посмотреть">
    </form>-->
        <form id="first" method="post" action="#">
            <b>Выбирите период оставленных отзывов: </b><br><br>
            <select name="mydate" style="width: 150px">
                <option value="">Выберите из списка</option>
                <option value="2016-08%">2016 Август</option>
                <option value="2016-09%">2016 Сентябрь</option>
                <option value="2016-10%">2016 Октябрь</option>
                <option value="2016-11%">2016 Ноябрь</option>
                <option value="2016-12%">2016 Декабрь</option>
            </select>
            <input type="submit" value="Показать" /><br>
        </form><br>
    </div>
    <div class="tab">
<?php

if ($_POST['mydate'] === '2016-08%') {
    $data = 'Август 2016г.';
} else if ($_POST['mydate'] === '2016-09%') {
    $data = 'Сентябрь 2016г.';
} else if ($_POST['mydate'] === '2016-10%') {
    $data = 'Октябрь 2016г.';
} else if ($_POST['mydate'] === '2016-11%') {
    $data = 'Ноябрь 2016г.';
} else if ($_POST['mydate'] === '2016-12%') {
    $data = 'Декабрь 2016г.';
} else {
};

function print_table($name_place)
{
    $link = connect();
    $login = "SELECT * FROM `say` WHERE date LIKE '" . $_POST['mydate'] . "'";
    $res = $link->query($login);
    $i = 1;
    $massage = '';
    if ($_POST['mydate']){
        //echo('<div class="tab">');
        echo('<table border="2"><tr ><th colspan="5">' . $name_place . '</th></tr>');
        echo('<tr>');
        echo('<td width="20">№<br> </td>');
        echo('<td width="150">Имя<br> </td>');
        echo('<td width="150">Контакт<br> </td>');
        echo('<td width="550">Сообщение<br> </td>');
        echo('<td width="50">Примечание<br> </td>');
        echo('</tr>');
        //echo('</div>');
    }
    while ($row = $res->fetch_assoc()) {
        $name = $row['name'];
        $mail = $row['e-mail'];
        $date = $row['date'];
        $text = $row['text'];
        echo('<tr>');
        echo('<td>' . $i . ' <br> </td>');
        $i = $i + 1;
        echo('<td >' . $name . '<br> </td>');
        echo('<td>' . $mail . '<br> </td>');
        echo('<td>' . $text . '<br> </td>');
        echo('<td>' . $massage . '<br> </td>');
        echo('</tr>');
    };

    echo('</table><br>');
}

print_table($data);

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>
    </div>

<?php

include_once ('footer.tpl');

?>