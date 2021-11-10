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
$marketid=$_GET['id'];
 $result=$table->query("SELECT marketid, Name, City FROM holodservices WHERE marketid='$marketid'");
 while ($st = mysqli_fetch_array($result)) {
 $name = $st['Name'];
 $city = $st['City'];
 $marketid = $st['marketid'];
 }
print "<form action='save_edit_market.php' metod='get'>";
print "Наименование: <input name='name' size='10' type='text'value='".$name."'>";
print "<br>Преподаватель: <input name='city' size='10' type='text'value='".$city."'>";
print "<input type='hidden' name='id' value='".$marketid."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться на главную</a>";
?>
 </body>
</html>