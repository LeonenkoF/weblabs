<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Леоненко | ЛР5</title><style>.freehosting-2domains-link { display: none; }</style>
 </head>
 <body>
<?php
include 'connect_to_db.php';
$holid=$_GET['id'];
 $result=$table->query("SELECT manufacturer, objem, serviceid FROM holods WHERE holid='$holid'");
 while ($st = mysqli_fetch_array($result)) {
 $name = $st['manufacturer'];
 $objem = $st['objem'];
 }
print "<form action='save_edit.php' metod='get'>";
print "Дата зачета <input name='name' size='10' type='text'value='".$name."'>";
print "<br>Оценка <input name='objem' size='10' type='text'value='".$objem."'>";
?>
<br>Студент: <?php
echo "<br><select name='studak'>";
$result=$table->query("SELECT holid, fio FROM students"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
  echo "<option value='". $row['holid']. "'>";
  echo $row['fio'];
  echo "</option>";
}
echo "</select>";
?>
<br>Предмет: <?php
echo "<br><select name='saloni'>";
$result=$table->query("SELECT marketid, Name FROM holodservices"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
  echo "<option value='". $row['marketid']. "'>";
  echo $row['Name'];
  echo "</option>";
}
echo "</select>";
print "<input type='hidden' name='id' value='".$holid."'> <br><br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться на главную</a>";
?>
 </body>
</html>