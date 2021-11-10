<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<h3>Кальулятор</h3>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <P> Первое число: <INPUT type="text" name="a" size="5">
<P> Второе число: <INPUT type="text" name="b" size="5">
 <P> Действие: <BR>
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> Сложить
 <OPTION VALUE="2"> Вычесть
 <OPTION VALUE="3"> Умножить
 <OPTION VALUE="4"> Разделить
 </SELECT>
 <P> <INPUT type="submit" value="Вычислить">
</FORM>
<?
$s3=($_POST["f"]." ".$_POST["n"]);
switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1:
 // 1 — это обращение «господин»…
$c=$_POST["a"]+$_POST["b"];
 break;
 case 2:
 // 2 — это обращение «госпожа»…
$c=$_POST["a"]-$_POST["b"];
 break;
 case 3:
 // 3 — это обращение «товарищ»…
$c=$_POST["a"]*$_POST["b"];
 break;
 case 4:
 // 3 — это обращение «товарищ»…
$c=$_POST["a"]/$_POST["b"];
 break;
}
echo ($c);
?>