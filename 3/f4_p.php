<?

if($_POST["d"]=="plus") {

$c=$_POST["a"]+$_POST["b"];

if($_POST["p"]=="poln"){

echo($_POST["a"] . ' + ' . $_POST["b"] . ' = ' . $c);

} else { echo("Сумма чисел: $c"); }

} else {

$c=$_POST["a"]*$_POST["b"];

if($_POST["p"] == "poln" ) {

echo($_POST["a"] . ' * ' . $_POST["b"] . ' = ' . $c);

} else {

echo("Произведение чисел: $c");

}

}

echo ("<BR> <A href='f4.php'> Вернуться назад </A>");

?>