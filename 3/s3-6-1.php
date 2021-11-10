<html>
<head>
</head>
<body>

    <form action="s3-6-1.php" method="post">

<textarea name="predl">

</textarea></br>

Символ который мы заменям. <input type="text" name="symbol_1" size="1" maxlength="1"></br>

Самвол на который мы заменяем. <input type="text" name="symbol_2" size="1" maxlength="1"></br>

<input type="submit" value="Заменить.">

</form>
</body>
</html>
<?php
$text = str_replace($_POST["symbol_1"], $_POST["symbol_2"], $_POST["predl"]);
echo "Текст с изменённым символом:" . $text;
?>