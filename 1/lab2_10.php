<HTML>
    <title>Леоненко Ф.И. ЭАС-410</title>
<BODY>
<TABLE border=1>
<?php
for ($i=1; $i<=10; $i++) { // запускаем первый цикл
 echo ("<tr>"); // начало строки таблицы
 for ($k=1; $k<=10; $k++) { // запускаем второй цикл

 echo '<td style="color:', $background, '">';

 $p=$p+1; // находим произведение двух чисел и...

 if(($p % 2) == 1)

 {

    $background=red;
 }

    else{

        $background=black;
    }
 echo ($p); // выводим его,
 echo ("</td>"); // а потом закрываем ячейку
 }
 echo ("</tr>"); // конец строки таблицы
}
?>
</TABLE>
</BODY>
</HTML>