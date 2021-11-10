<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Леоненко | ЛР4</title>

<style>.freehosting-2domains-link { display: none; }</style>
<style type="text/css">
   block {
    background-color: #E6E6FA;
   }
      a {
    background-color: #FFDAB9;
   }

  </style>
</head>
<body>
<block>
Дисциплина "Веб-технологии"<br>
<a href="../1/1.php">Лабораторная работа 1</a>
<br><a href="../2/index.php">Лабораторная работа 2</a><br>
<a href="../3/index.php">Лабораторная работа 3</a><br>
<a href="index.php">Лабораторная работа 4 [ВЫ ТУТ]</a><br>
<a href="../5/index.php">Лабораторная работа 5</a><br>
<a href="../6/index.php">Лабораторная работа 6</a><br>
<a href="../7/index.php">Лабораторная работа 7</a><br>
<a href="../8/index.php">Лабораторная работа 8</a><br>
<a href="../9/index.html">Лабораторная работа 9</a><br>
<a href="../10/index.html">Лабораторная работа 10</a><br>
<a href="../11/index.html">Лабораторная работа 11</a>
<br>
<br>
<br>
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