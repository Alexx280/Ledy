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
    $res = $link->query($login) ;
}
else {}
//$row = $res->fetch_assoc();

?>
    <div class="say">
        <form name="test" method="post" action="#">
            <p><b>Ваше имя:</b><br>
                <input type="text" size="40" name="myname">
            </p>
            <p><b>Ваш e-mail:</b><br>
                <input type="text" size="40" name="mymail">
            </p>
            <p>Комментарий<Br>
                <textarea cols="50" rows="5" name="mytext2"></textarea> <br>
                <input type="submit" value="Отправить">
                <input type="reset" value="Очистить"></p>
        </form>


    </div>
<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once ('footer.tpl');

?>