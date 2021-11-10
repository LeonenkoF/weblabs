<?

header('Content-Type: application/vnd.ms-excel; format=attachment;');
header('Content-Disposition: attachment; filename=downloaded_' . date('Y-m-d H:i:s') . '.xls');
header('Expires: Mon, 18 Jul 1998 01:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

?>

<meta http-equiv="content-type" content="text/html; charset=utf-8">

<table>

<tr>

<th>ID</th>
<th>Дата</th>
<th>Предмет</th>
<th>Оценка</th>
<th>Студент</th>
<th>Факультет</th>
<th>Группа</th>
<th>Зачётка</th>
<th>Преподаватель</th>
</tr>

<?php
$id=1;
include 'connect_to_db.php';
$result3=$table->query("SELECT marketid, Name, City FROM holodservices");
$result2=$table->query("SELECT holid, manufacturer, model, type, objem, warranty, serviceid, fio, date, studak FROM holods");
$result=$table->query("SELECT holid, fio, faculty, gruppa, zach, tel FROM students");  // запрос на выборку сведений о пользователях

while ($row=mysqli_fetch_array($result2)){// для каждой строки из запроса


echo "<tr><td>" . $id . "</td><td>" . $row['manufacturer'] . "<td>";

$zapros=$table->query("SELECT Name FROM holodservices WHERE marketid=" . $row['serviceid']);
while ($row2=mysqli_fetch_array($zapros)){
echo $row2['Name']. "</td><td>";
}

echo $row['objem']. "</td><td>";

$zapros=$table->query("SELECT fio FROM students WHERE holid=" . $row['studak']);
while ($row2=mysqli_fetch_array($zapros)){
echo $row2['fio']. "</td><td>";
}

$zapros=$table->query("SELECT faculty FROM students WHERE holid=" . $row['studak']);
while ($row2=mysqli_fetch_array($zapros)){
echo $row2['faculty']. "</td><td>";
}

$zapros=$table->query("SELECT gruppa FROM students WHERE holid=" . $row['studak']);
while ($row2=mysqli_fetch_array($zapros)){
echo $row2['gruppa']. "</td><td>";
}

$zapros=$table->query("SELECT zach FROM students WHERE holid=" . $row['studak']);
while ($row2=mysqli_fetch_array($zapros)){
echo $row2['zach']. "</td><td>";
}

$zapros=$table->query("SELECT City FROM holodservices WHERE marketid=" . $row['serviceid']);
while ($row2=mysqli_fetch_array($zapros)){
echo $row2['City']. "</td><td>";
}

$id++;
}


?>

</table>
