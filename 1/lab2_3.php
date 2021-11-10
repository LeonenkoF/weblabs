<?php

print ("a = A". '<br>');

$а = "А";

switch ($а) {

case 'А' :

echo 'Переменная имеет значение "А"'; break;

case 'В':

echo 'Переменная имеет значение "В"'; break;

default:

echo 'Ответ не найден ' ;

}

print ('<br>'.'<br>');

print ("a = B". '<br>');

$а = "B";

switch ($а) {

case 'А' :

echo 'Переменная имеет значение "А"'; break;

case 'В':

echo 'Переменная имеет значение "В"'; break;

default:

echo 'Ответ не найден ' ;

}

print ('<br>'.'<br>');

print ("a = C". '<br>');

$а = "C";

switch ($а) {

case 'А' :

echo 'Переменная имеет значение "А"'; break;

case 'В':

echo 'Переменная имеет значение "В"'; break;

default:

echo 'Ответ не найден ' ;

}

print ('<br>'.'<br>');

print ("a = A ; Отсутсвует Break". '<br>');

$а = "A";

switch ($а) {

case 'А' :

echo 'Переменная имеет значение "А"';;

case 'В':

echo 'Переменная имеет значение "В"'; break;

default:

echo 'Ответ не найден ' ;

}

?>