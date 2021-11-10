<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Леоненко | ЛР5</title>

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
<a href="../4/index.php">Лабораторная работа 4</a><br>
<a href="index.php">Лабораторная работа 5 [ВЫ ТУТ]</a><br>
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
<?php include 'connect_to_db.php';?>
<h2>Cтуденты</h2>
<table cellspacing="10" border="1" cellpadding="10">
<tr>
<th> ID </th> <th> ФИО </th> <th> Факультет </th><th> Группа </th><th> Зачетка </th><th> Телефон </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
    <?php
    $result=$table->query("SELECT holid, fio, faculty, gruppa, zach, tel FROM students"); // запрос на выборку сведений о пользователях
    while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['holid'] . "</td>";
 echo "<td>" . $row['fio'] . "</td>";
 echo "<td>" . $row['faculty'] . "</td>";
  echo "<td>" . $row['gruppa'] . "</td>";
   echo "<td>" . $row['zach'] . "</td>";
    echo "<td>" . $row['tel'] . "</td>";
 echo "<td><a href='edit_stud.php?id=" . $row['holid']. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_stud.php?id=" . $row['holid']. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>$num_rows студентов в базе данных!</p>");
echo "<td><a href='new_stud.php?id='>• Добавить студента</a></td>";
?>
<br><br>
<a href="new.php">
  • Заполнить зачетную ведомость
</a>
<br><br>
<a href="new_market.php">
  • Добавить предмет
</a>
<p>
<h2>Список предметов</h2>
<table cellspacing="10" border="1" cellpadding="10">
<tr>
 <th> Номер </th> <th> Название </th> <th> Преподаватель </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
    <?php
    $result=$table->query("SELECT marketid, Name, City FROM holodservices"); // запрос на выборку сведений о пользователях
    while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
  echo "<td>" . $row['marketid'] . "</td>";
 echo "<td>" . $row['Name'] . "</td>";
 echo "<td>" . $row['City'] . "</td>";
 echo "<td><a href='edit_market.php?id=" . $row['marketid']. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_market.php?id=" . $row['marketid']. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего предметов $num_rows.</p>");
?>
<h2>Зачетная ведомость</h2>
<table cellspacing="10" border="1" cellpadding="10">
<tr>
 <th> Номер </th> <th> Дата сдачи зачета </th><th> ID студента </th>
 <th> ID предмета </th> <th> Оценка </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
    <?php
    $result=$table->query("SELECT holid, studak, manufacturer, model, type, objem, warranty, serviceid, fio, date FROM holods"); // запрос на выборку сведений о пользователях
    while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['holid'] . "</td>";
 echo "<td>" . $row['manufacturer'] . "</td>";
 echo "<td>" . $row['studak'] . "</td>";
  echo "<td>" . $row['serviceid'] . "</td>";
   echo "<td>" . $row['objem'] . "</td>";
 echo "<td><a href='edit.php?id=" . $row['holid']. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id=" . $row['holid']. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего записей в ведомости $num_rows.</p>");
$carnum=$num_rows;
?>
<form action="makedoc.php" method="post">
    <input type="submit" value="Получить ведомость в PDF" class="button_1618916411674">
</form>
<form action="makexls.php" method="post">
    <input type="submit" value="Получить ведомость в XLS" class="button_1618916411674">
</form>




</body>
</html>