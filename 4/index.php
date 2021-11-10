<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Леоненко | ЛР4</title>

</block>
<?php include 'connect_to_db.php';?>
<h2>Cтуденты</h2>
<table cellspacing="10" border="1" cellpadding="10">
<tr>
 <th> ФИО </th> <th> Факультет </th><th> Группа </th><th> Зачетка </th><th> Телефон </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
    <?php
    $result=$table->query("SELECT holid, fio, faculty, gruppa, zach, tel FROM students"); // запрос на выборку сведений о пользователях
    while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['fio'] . "</td>";
 echo "<td>" . $row['faculty'] . "</td>";
  echo "<td>" . $row['gruppa'] . "</td>";
   echo "<td>" . $row['zach'] . "</td>";
    echo "<td>" . $row['tel'] . "</td>";
 echo "<td><a href='edit_stud.php?id=" . $row['holid']. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id=" . $row['holid']. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>$num_rows студентов в базе данных!</p>");
echo "<td><a href='new_stud.php?id='>Добавить студента</a></td>";
?>
</body>
</html>