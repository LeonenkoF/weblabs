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
 $table->query("UPDATE holods SET manufacturer='".$_GET['name']."',studak='".$_GET['studak']."',serviceid='".$_GET['saloni']."',objem='".$_GET['objem']."' WHERE holid='$holid'");
if (mysqli_affected_rows($table)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться на главную </a>'; }
 else { echo 'Вы не изменили ни одного поля <br> <a href="index.php">
Вернуться на главную</a> '; }
?>
 </body>
</html>