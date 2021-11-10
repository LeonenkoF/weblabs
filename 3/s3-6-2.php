
<FORM method="post" action="s3-6-2.php">
<h4>
<P>Напишите предложение: <input type="text" name="text" size="50">

<P> Исключаемое слово: <input type="text" name="word" size="25">

<p><input type="submit"value="Вывод">
</h4>
</FORM>

<?

$text = $_POST["text"];

$text2 = $_POST["word"];

echo ("Текст без исключённого слова: ");

echo str_replace($text2,"",$text);

?>
