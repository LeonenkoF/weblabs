<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Леоненко | ЛР4</title>
</block>
<?php include 'connect_to_db.php';?>
<?php
$sql_add = "INSERT INTO students SET fio='" . $_GET['marka']."', faculty='".$_GET['model']."', gruppa='".$_GET['gv']."', zach='".$_GET['ts']."', tel='".$_GET['col']. "'";
 $table->query($sql_add); // Выполнение запроса
 if (mysqli_affected_rows($table)>0) // если нет ошибок при выполнении запроса
 { 
 echo('Вы добавили студента в базу данных.');
 echo('<p><a href="index.php">Вернуться к списку студентов</a>'); 
 }
 else { 
 echo('Ошибка сохранения <br><a href="index.php"> Вернуться к списку студентов </a>'); 
 }
?>
</body>
</html>