<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Леоненко | ЛР4</title>

</block>
<?php
include 'connect_to_db.php';
$holid=$_GET['id'];
 $table->query("UPDATE students SET fio='".$_GET['name']."',faculty='".$_GET['model']."' WHERE holid='$holid'");
if (mysqli_affected_rows($table)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
студентов </a>'; }
 else { echo 'Вы не изменили ни одного поля <br> <a href="index.php">
Вернуться к списку студентов</a> '; }
?>
</body>
</html>