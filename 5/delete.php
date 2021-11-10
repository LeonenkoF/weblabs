<?php
    $table = mysqli_connect("localhost","u1518856_default", "VrszV1et65mJFg6I");
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}// установление соединения с сервером
    $table->set_charset("cp1251");
    // подключение к базе данных:
    mysqli_select_db($table, "u1518856_default") or die("Нет такой таблицы!");
 $zapros="DELETE FROM holods WHERE holid=" . $_GET['id'];
 $table->query($zapros);
header("Location: /5/index.php");
 exit
?>