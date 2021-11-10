<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Леоненко | ЛР5</title><style>.freehosting-2domains-link { display: none; }</style>
 </head>
 <body>
<H2>Заполнение зачетной ведомости</H2>
<form action="new_car_save.php" metod="get">
Выбрать студента:        
    <?php
    echo "<select name='studak'>";
include 'connect_to_db.php';
    ?>
    <?php
    $result=$table->query("SELECT holid, fio FROM students"); // запрос на выборку сведений о пользователях
    while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
  echo "<option value='". $row['holid']. "'>";
  echo $row['fio'];
  echo "</option>";
}
echo "</select>";
?>
<br>
Выбрать предмет<?php
echo "<select name='saloni'>";
include 'connect_to_db.php';
?>
<?php
$result=$table->query("SELECT marketid, Name FROM holodservices"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<option value='". $row['marketid']. "'>";
echo $row['Name'];
echo "</option>";
}
echo "</select>";
?><br>
Дата сдачи зачета: <input name="marka" size="10" type="text">
<br>Оценка: <input name="model" size="10" type="text">


</textarea>
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
 </body>
</html>