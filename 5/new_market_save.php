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
    ?>
    <?php
$sql_add = "INSERT INTO holodservices SET Name='" . $_GET['marketname']."', City='".$_GET['adres']."'";
 $table->query($sql_add); // Выполнение запроса
 if (mysqli_affected_rows($table)>0) // если нет ошибок при выполнении запроса
 { 
 echo('Предмет добавлен');
 echo('<p><a href="index.php"> Вернуться на главную </a>'); 
 }
 else { 
 echo('Ошибка сохранения. <a href="index.php"> Вернуться на главную </a>'); 
 }
?>
 </body>
</html>