<?php

    $table = mysqli_connect("localhost","u1518856_default", "VrszV1et65mJFg6I");
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}// установление соединения с сервером
    $table->set_charset("cp1251");
    // подключение к базе данных:
    mysqli_select_db($table, "u1518856_default") or die("Нет такой таблицы!");
define('FPDF_FONTPATH',"font/");
require('fpdf.php');
$shet=1;
$pdf=new FPDF();
$pdf->AddPage('L');
$imya="Студент";
$fac="Факультет";
$grup="Группа";
$zach="Зачётка";
$data="Дата";
$predm="Предмет";
$ocenka="Оценка";
$prepod="Преподаватель";
$result=$table->query("SELECT holid, manufacturer, model, type, objem, warranty, serviceid, fio, date, studak FROM holods"); // запрос на выборку сведений о пользователях
$result3=$table->query("SELECT marketid, Name, City FROM holodservices");
$result2=$table->query("SELECT holid, fio, faculty, gruppa, zach, tel FROM students"); // запрос на выборку сведений о пользователях
$pdf->AddFont('CM_GARDEN_R','','20011.php'); 
$pdf->SetFont('CM_GARDEN_R');
$pdf->SetTitle("BEDOMOCTb");
$pdf->Cell(1);
$pdf->Cell(10,5,"ID",1,0);
$pdf->Cell(22,5,iconv('utf-8', 'cp1251',$data),1,0);
$pdf->Cell(48,5,iconv('utf-8', 'cp1251',$predm),1,0);
$pdf->Cell(22,5,iconv('utf-8', 'cp1251',$ocenka),1,0);
$pdf->Cell(65,5,iconv('utf-8', 'cp1251',$imya),1,0);
$pdf->Cell(23,5,iconv('utf-8', 'cp1251',$fac),1,0);
$pdf->Cell(23,5,iconv('utf-8', 'cp1251',$grup),1,0);
$pdf->Cell(25,5,iconv('utf-8', 'cp1251',$zach),1,0);
$pdf->Cell(40,5,iconv('utf-8', 'cp1251',$prepod),1,1);
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса

$pdf->Cell(1);
$pdf->Cell(10,5,$shet,1,0);
$pdf->Cell(22,5,iconv('utf-8', 'cp1251',$row['manufacturer']),1,0);

$zapros=$table->query("SELECT Name FROM holodservices WHERE marketid=" . $row['serviceid']);
while ($row2=mysqli_fetch_array($zapros)){
$pdf->Cell(48,5,iconv('utf-8', 'cp1251',$row2['Name']),1,0);
}

$pdf->Cell(22,5,iconv('utf-8', 'cp1251',$row['objem']),1,0); 

$zapros=$table->query("SELECT fio FROM students WHERE holid=" . $row['studak']);
while ($row2=mysqli_fetch_array($zapros)){
$pdf->Cell(65,5,iconv('utf-8', 'cp1251',$row2['fio']),1,0);
}

$zapros=$table->query("SELECT faculty FROM students WHERE holid=" . $row['studak']);
while ($row2=mysqli_fetch_array($zapros)){
$pdf->Cell(23,5,iconv('utf-8', 'cp1251',$row2['faculty']),1,0);
}

$zapros=$table->query("SELECT gruppa FROM students WHERE holid=" . $row['studak']);
while ($row2=mysqli_fetch_array($zapros)){
$pdf->Cell(23,5,iconv('utf-8', 'cp1251',$row2['gruppa']),1,0);
}

$zapros=$table->query("SELECT zach FROM students WHERE holid=" . $row['studak']);
while ($row2=mysqli_fetch_array($zapros)){
$pdf->Cell(25,5,iconv('utf-8', 'cp1251',$row2['zach']),1,0);
}

$zapros=$table->query("SELECT City FROM holodservices WHERE marketid=" . $row['serviceid']);
while ($row2=mysqli_fetch_array($zapros)){
$pdf->Cell(40,5,iconv('utf-8', 'cp1251',$row2['City']),1,1);
}

$shet++;
}
$pdf->Output();
?>
